<?php 
require_once('zoologico.class.php');
class Animales extends Zoologico {
    public function read(){
        $linea = $this->db->prepare("SELECT id_animal, animal, 
        id_familia, familia FROM animal left join familia f
        using(id_familia) ORDER BY animal;");
        $linea->execute();
        $animales = $linea->fetchAll(PDO::FETCH_ASSOC);  
        return $animales;
    }
    public function readOne($id){
        $linea = $this->db->prepare("select * FROM animal where id_animal=:id_animal");
        $linea->bindParam(':id_animal', $id, PDO::PARAM_INT);
        $linea->execute();
        $animales = $linea->fetchAll(PDO::FETCH_ASSOC);  
        return $animales;
    }
    public function delete($id){
        try{
            $this->db->beginTransaction();
            $sql = "delete from animal_detalle where id_animal=:id_animal";
            $borrar = $this->db->prepare($sql);
            $borrar->bindParam(':id_animal', $id, PDO::PARAM_INT);
            $borrar->execute();
            $cuenta = $borrar->rowCount();

            $sql = "delete from animal_alimento where id_animal=:id_animal";
            $borrar = $this->db->prepare($sql);
            $borrar->bindParam(':id_animal', $id, PDO::PARAM_INT);
            $borrar->execute();
            $cuenta = $borrar->rowCount();

            $borrar = $this->db->prepare('delete from animal where id_animal=:id_animal');
            $borrar->bindParam(':id_animal', $id, PDO::PARAM_INT);
            $borrar->execute();
            $cuenta = $borrar->rowCount();
            $this->db->commit();
            return $cuenta;
        }catch(Exception $e){
            $this->db->rollback();
            return 0;
        }
        
        
    }
    public function create($data){
        $cuenta=null;
        try{
            $this->db->beginTransaction();
            $sql= "insert into animal(animal,id_familia) values (:animal, :id_familia)";
            $insertar = $this->db->prepare($sql);
            $insertar->bindParam(':animal', $data['animal'], PDO::PARAM_STR);
            $insertar->bindParam(':id_familia', $data['id_familia'], PDO::PARAM_INT);
            $insertar->execute();
            $cuenta = $insertar->rowCount();
            $sql="select id_animal from animal order by id_animal desc limit 1";
            $buscar = $this->db->prepare($sql);
            $buscar->execute();
            $animal = $buscar->fetchAll(PDO::FETCH_ASSOC);  
            if (isset($animal[0]['id_animal'])){
                $id_animal = $animal[0]['id_animal'];
                $susAlimentos = 
                isset($_POST['alimento'])?$_POST['alimento']:array();
                $sql = "insert into animal_alimento (id_animal, id_alimento)
                values (:id_animal, :id_alimento)";
                $insertar = $this->db->prepare($sql);
                foreach ($susAlimentos as $key => $alimento){
                    $insertar->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
                    $insertar->bindParam(':id_alimento', $key, PDO::PARAM_INT);
                    $insertar->execute();
                }
                $this->db->commit();
                return $cuenta;
            }else{
                $this->db->rollback();
                return 0;
            }
        }catch(Exception $e){
            $this->db->rollback();
            //echo 'Excepcion capturada: ', $e->getMessage(), "\n";
            return 0;
        }
    }
    public function update($id, $data){
        try{
            $this->db->beginTransaction();
            $sql="update animal set animal=:animal,
            id_familia=:id_familia where id_animal=:id_animal";
        
            $actualizar = $this->db->prepare($sql);
            $actualizar->bindParam(':animal', $data['animal'], PDO::PARAM_STR);
            $actualizar->bindParam(':id_animal', $id, PDO::PARAM_INT);
            $actualizar->bindParam(':id_familia', $data['id_familia'], PDO::PARAM_INT);
            $actualizar->execute();
            if (isset($id)){
                $id_animal = $id;
                $susAlimentos = 
                isset($_POST['alimento'])?$_POST['alimento']:array();
                $borrado = $this->delete_alimento($id_animal);
                $sql = "insert into animal_alimento (id_animal, id_alimento)
                values (:id_animal, :id_alimento)";
                $insertar = $this->db->prepare($sql);
                foreach ($susAlimentos as $key => $alimento){
                    $insertar->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
                    $insertar->bindParam(':id_alimento', $key, PDO::PARAM_INT);
                    $insertar->execute();
                }
                $this->db->commit();
                return $actualizar;
            }else{
                $this->db->rollback();
                return 0;
            }
            
        }catch (Exception $e){
            $this->db->rollback();
        }
    }
    
    public function read_alimento($id_animal){
        $linea = $this->db->prepare("SELECT *  FROM animal_alimento
        where id_animal=:id_animal");
        $linea->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
        $linea->execute();
        $animales_alimentos = $linea->fetchAll(PDO::FETCH_ASSOC);
        $alimentos = array();
        foreach($animales_alimentos as $animal_alimento){
            array_push($alimentos, $animal_alimento['id_alimento']);
        }  
        return $alimentos;
    }
    public function delete_alimento($id_animal){
        $borrar = $this->db->prepare('delete from animal_alimento
        where id_animal=:id_animal');
        $borrar->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }

    public function read_animal($id_animal){
        $sql= 'select * from animal_detalle where id_animal=:id_animal 
        order by nacimiento desc';
        $datos = $this->db->prepare($sql);
        $datos->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
        $datos->execute();
        $datos = $datos->fetchAll(PDO::FETCH_ASSOC);
        return $datos;
    }

    public function create_animal($data, $id_animal){
        $sql = 'insert into animal_detalle(id_animal,consecutivo, nacimiento,
        cantidad) VALUES (:id_animal,:consecutivo, :nacimiento, :cantidad);';
        $datos = $this->db->prepare($sql);
        $datos->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
        $consecutivo = $this->consecutivo($id_animal);
        $datos->bindParam(':consecutivo', $consecutivo, PDO::PARAM_INT);
        $datos->bindParam(':nacimiento', $data['nacimiento'], PDO::PARAM_STR);
        $datos->bindParam(':cantidad', $data['cantidad'], PDO::PARAM_INT);
        $datos->execute();
        $cuenta = $datos->rowCount();
        return $cuenta;
    }

    public function consecutivo($id_animal){
        $sql = 'select consecutivo+1 as consecutivo from animal_detalle
        WHERE id_animal=:id_animal ORDER BY 1 DESC LIMIT 1;';
        $datos = $this->db->prepare($sql);
        
        $datos->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
        $datos->execute();
        $datos = $datos->fetchAll(PDO::FETCH_ASSOC);
        
        if(isset($datos[0]['consecutivo'])){
            return $datos[0]['consecutivo'];
        }else{
            return 1;
        }
    }
    public function delete_Animal($id_animal, $consecutivo){
        $borrar = $this->db->prepare('delete from animal_detalle
        where id_animal=:id_animal and consecutivo=:consecutivo');
        $borrar->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
        $borrar->bindParam(':consecutivo', $consecutivo, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
}
$Animales = new Animales; 
$Animales->conexion();
?>
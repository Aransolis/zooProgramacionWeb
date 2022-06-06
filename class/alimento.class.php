<?php 
require_once('zoologico.class.php');
class Alimentos extends Zoologico {
    public function read(){
        $linea = $this->db->prepare("SELECT * FROM alimento");
        $linea->execute();
        $alimento = $linea->fetchAll(PDO::FETCH_ASSOC);  
        return $alimento;
    }
    public function readOne($id){
        $linea = $this->db->prepare("SELECT * FROM alimento where id_alimento=:id_alimento");
        $linea->bindParam(':id_alimento', $id, PDO::PARAM_INT);
        $linea->execute();
        $alimento = $linea->fetchAll(PDO::FETCH_ASSOC);  
        return $alimento;
    }
    public function delete($id){
        $borrar = $this->db->prepare('delete from alimento where id_alimento=:id_alimento');
        $borrar->bindParam(':id_alimento', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    public function create($data){
        $cuenta=null;
        $foto= $this->cargarImagen("atraccion"); 
            $sql= "insert into alimento(alimento) values (:alimento)";
            $insertar = $this->db->prepare($sql);
            $insertar->bindParam(':alimento', $data['alimento'], PDO::PARAM_STR);
            $insertar->execute();
            $cuenta = $insertar->rowCount();
        
        return $cuenta;
    }
    public function update($id, $data){
        $sql="update alimento set alimento=:alimento
        where id_alimento=:id_alimento"; 
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':alimento', $data['alimento'], PDO::PARAM_STR);
        $actualizar->bindParam(':id_alimento', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuenta = $actualizar->rowCount();
        
        return $cuenta;
    }
    
}
$Alimentos = new Alimentos; 
$Alimentos->conexion();
?>
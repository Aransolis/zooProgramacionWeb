<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="fw-bold mb-0">Restablecer contraseña</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form method='POST' action="login.php?accion=nueva&correo=<?php echo $correo;?>" class="">
                    <div class="form-floating mb-3">
                        <input name="contrasena" type="password" class="form-control rounded-4" id="floatingInput"
                            placeholder="name@example.com">
                        <input name="token" type="hidden" class="form-control rounded-4" id="floatingInput"
                            placeholder="name@example.com" value="<?php echo $token;?>">
                        <label for="floatingInput">Nueva contraseña </label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Actualizar contraseña</button>

                </form>
            </div>
        </div>
    </div>
</div>
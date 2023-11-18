<div class="card w-50 mt-5 mx-auto">
    <form class="card-body" method="post" action="<?php echo site_url("login_controller/login")?>">
        <div class="form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" name="user" >
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
    </form>
</div>
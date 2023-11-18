<div class ="container">
<div class="card">
    <h1>Detalles del Usuario <?php echo $user['id_user'] ?></h1>
        <h3>Nombre: <?php echo $user['user'] ?></h3>
        <h3>Salario: <?php echo $user['salary'] ?></h3>
        <h3>Antiguedad: <?php echo $user['antiquity'] ?></h3>

        <a class="btn btn-primary" href="<?php echo site_url('users_controller/index')?>">Regresar</a>
</div>
</div>
     

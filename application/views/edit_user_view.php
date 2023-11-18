<div class = "container">
<br>
<form class="card" method="post" action=<?php echo site_url('users_controller/update/'.$users['id_user'])?>>
    <h5 class="card-header">Editar usuario</h5>
    <div class="card-body form-row">
        <div class="col-5">
            <input type="text" name="user" class="form-control" placeholder="Usuario" value=<?php echo $users['user']; ?>>
        </div>
        <div class="col-4">
            <input type="text" name="salary" class="form-control" placeholder="Salario" value=<?php echo $users['salary']; ?>>
        </div>
        <div class="col">
            <input type="text" name="antiquity" class="form-control" placeholder="Antiguedad" value=<?php echo $users['antiquity']; ?>>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>
</form>
</div>
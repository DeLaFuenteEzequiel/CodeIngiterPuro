<div class="container">
<div class="card">

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Usuario</th>
        <th scope="col">Salario</th>
        <th scope="col">Antiguedad</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $u){ ?>
            <tr>
                    <td scope="row"><?php echo $u["id_user"]?></td>
                    <td><?php echo $u["user"]?></td>
                    <td><?php echo $u["salary"]?></td>
                    <td><?php echo $u["antiquity"]?></td>
                    <td>
                    <a class="btn btn-success" href="<?php echo site_url('users_controller/show/'.$u["id_user"])?>"><i class="bi bi-eye-fill"></i></i></a>
                    <a class="btn btn-warning" href="<?php echo site_url('users_controller/edit/'.$u["id_user"])?>"><i class="bi bi-pencil"></i></a>
                    <a class="btn btn-danger" href="<?php echo site_url('users_controller/delete/'.$u["id_user"])?>"><i class="bi bi-trash-fill"></i></a>
                    </td>
            </tr>

        <?php } ?>
    </tbody>
    </table>

</div>
</div>
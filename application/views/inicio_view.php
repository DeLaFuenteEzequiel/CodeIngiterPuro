<div class="card">

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Objeto</th>
        <th scope="col">Compartir</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($objects as $o){ ?>
            <tr>
                    <td scope="row"><?php echo $o["object_id"]?></td>
                    <td><?php echo $o["object"]?></td>
                    <td>
                        <?php if($o["status"]==1){ ?>
                            <a class="btn btn-success" target="_blank" href="<?php echo site_url('inicio_controller/show/'.$o["object_id"])?>"><i class="bi bi-share-fill"></i></a></td>
                        <?php } ?>
                    <td>
                        <a class="btn btn-warning" href="<?php echo site_url('inicio_controller/status/'.$o["object_id"].'/'.$o["status"])?>"><i class="bi bi-eye-fill"></i></a>
                        <a class="btn btn-danger" href="<?php echo site_url('inicio_controller/delete/'.$o["object_id"])?>"><i class="bi bi-trash-fill"></i></a>
                    </td>
            </tr>

        <?php } ?>
    </tbody>
    </table>

</div>
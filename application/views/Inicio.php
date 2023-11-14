<div class="container">
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Antiguedad</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td scope="row"><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['user']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['antiquity']; ?></td>
                        <td><?php echo $user['salary']; ?></td>
                        <td>
                            <!-- Acciones aquí -->
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<div class="container">

    <div class="row mt-3">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- Botones aquí -->
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultados</h5>
                    <p>Promedio: <span class="font-weight-bold">-</span></p>
                    <p>Total: <span class="font-weight-bold">-</span></p>
                    <p>Menor Sueldo: <span class="font-weight-bold">-</span></p>
                    <p>Mayor Sueldo: <span class="font-weight-bold">-</span></p>
                </div>
            </div>
        </div>

    </div>

</div>

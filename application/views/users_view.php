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

    <a class="btn btn-primary" href="<?php echo site_url('inicio_controller/index')?>">Regresar</a>

</div>
</div>

<div class = "container">

    <div class="row mt-3">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary" id="btnCalcularPromedio">Calcular Promedio de Sueldos</button>
                    <button class="btn btn-success" id="btnCalcularTotal">Calcular Total de Sueldos</button>
                    <button class="btn btn-warning" id="btnMenorSueldo">Menor Sueldo</button>
                    <button class="btn btn-danger" id="btnMayorSueldo">Mayor Sueldo</button>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultados</h5>
                    <p id="resultadoPromedio">Promedio: <span class="font-weight-bold">-</span></p>
                    <p id="resultadoTotal">Total: <span class="font-weight-bold">-</span></p>
                    <p id="resultadoMenorSueldo">Menor Sueldo: <span class="font-weight-bold">-</span></p>
                    <p id="resultadoMayorSueldo">Mayor Sueldo: <span class="font-weight-bold">-</span></p>
                </div>
            </div>
        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function () {

    
    var salarios = <?php echo json_encode(array_map('floatval', array_column($users, 'salary'))); ?>;

    $("#btnCalcularPromedio").click(function () {
        var promedio = calcularPromedio(salarios);
        $("#resultadoPromedio span").text(promedio);
    });

    $("#btnCalcularTotal").click(function () {
        var total = calcularTotal(salarios);
        $("#resultadoTotal span").text(total);
    });
 
    $("#btnMenorSueldo").click(function () {
        var menorSueldo = encontrarMenorSueldo(salarios);
        $("#resultadoMenorSueldo span").text(menorSueldo);
    });
   
    $("#btnMayorSueldo").click(function () {
        var mayorSueldo = encontrarMayorSueldo(salarios);
        $("#resultadoMayorSueldo span").text(mayorSueldo);
    });

    function calcularPromedio(array) {
        var sum = array.reduce(function (a, b) { return a + b; }, 0);
        return (sum / array.length).toFixed(2);
    }

    function calcularTotal(array) {
        return array.reduce(function (a, b) { return a + b; }, 0);
    }

    function encontrarMenorSueldo(array) {
        return Math.min.apply(null, array);
    }

    function encontrarMayorSueldo(array) {
        return Math.max.apply(null, array);
    }

});
</script>

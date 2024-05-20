<?php include_once '../templates/header.php'; ?>







<h1 class="text-center">Formulario de productos</h1>



<div class="row justify-content-center">
    <form action="/controladores/persona/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="per_nombre">Nombre de la persona</label>
                <input type="text" name="per_nombre" id="per_nombre" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="per_nombre">procedencia</label>
                <input type="text" name="per_procedencia" id="per_procedencia" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="per_nombre">Fecha y hora de ingresp</label>
                <input type="text" name="per_fechain" id="per_fechain" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="per_nombre">fecha y hora de salida</label>
                <input type="text" name="per_fechasal" id="per_fechasal" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="per_nombre">Razon de ingreso</label>
                <input type="text" name="per_razon" id="per_razon" class="form-control" required>
            </div>
        </div>


        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </div>
    </form>
</div>





<?php include_once '../templates/footer.php'; ?>
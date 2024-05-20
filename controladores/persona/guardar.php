<?php 
    // ini_set('display_errors', '1');
    // ini_set('display_startup_errors', '1');
    // error_reporting(E_ALL);
    require '../../modelos/personas.php';
    
    $mensaje = '';
 
    // VALIDAR INFORMACION
    $_POST['per_nombre'] = htmlspecialchars( $_POST['per_nombre']);
    $_POST['per_apellido'] = htmlspecialchars( $_POST['per_apellido']);
    $_POST['per_procedencia'] = htmlspecialchars( $_POST['per_precedencia']);
    $_POST['per_fechain'] = htmlspecialchars( $_POST['per_fechain']);
    $_POST['per_fechasal'] = htmlspecialchars( $_POST['per_fechasal']);
    $_POST['per_razon'] = htmlspecialchars( $_POST['per_razon']);


    
    if($_POST['per_nombre'] == '' || $_POST['per_apellido'] == '' || $_POST['per_procedencia'] == '' || $_POST['per_fechain'] == '' || $_POST['per_fechasal'] == '' || $_POST['per_razon'] == '' ){
        // ALERTA PARA VALIDAR DATOS
        $resultado = [
            'mensaje' => 'DEBE VALIDAR LOS DATOS',
            'codigo' => 2
        ];
    }else{
        try {
            // REALIZAR CONSULTA
            $persona = new Persona($_POST);
            $guardar = $persona->guardar();
            $resultado = [
                'mensaje' => 'PERSONA INSERTADO CORRECTAMENTE',
                'codigo' => 1
            ];
            
        } catch (PDOException $pe){
            $resultado = [
                'mensaje' => 'OCURRIO UN ERROR INSERTANDO A LA BD',
                'detalle' => $pe->getMessage(),
                'codigo' => 0
            ];
        } catch (Exception $e) {
            $resultado = [
                'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
                'detalle' => $e->getMessage(),
                'codigo' => 0
            ];
        }
        
    }




    $alertas = ['danger', 'success', 'warning'];

    
    include_once '../../vistas/templates/header.php'; ?>

    <div class="row justify-content-center">
        <div class="col-lg-6 alert alert-<?=$alertas[$resultado['codigo']] ?>" role="alert">
            <?= $resultado['mensaje'] ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <a href="../../vistas/persona/index.php" class="btn btn-primary w-100">Volver al formulario</a>
        </div>
    </div>


<?php include_once '../../vistas/templates/footer.php'; ?>  
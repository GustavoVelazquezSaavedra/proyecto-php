<?php 

// mostrar errores
function mostrarErrores($errrores, $campo){
    $alerta = '';
    if(isset($errrores[$campo]) && !empty($campo)){
        $alerta = '<div class="alerta alerta-error">'.$errrores[$campo].'</div>';
    }
    return $alerta;
}

function borrarErrores(){
    $borrado = false;
    if(isset($_SESSION['errores'])){
        //$_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }
    if(isset( $_SESSION['completado'])){
        //$_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }
    return $borrado;
}

?>
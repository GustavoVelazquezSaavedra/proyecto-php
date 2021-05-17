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
    $_SESSION['errores'] = null;
    unset($_SESSION['errores']);

    //return $borrado;
}

?>
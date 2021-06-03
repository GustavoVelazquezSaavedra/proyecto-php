<?php 

// mostrar errores
function mostrarErrores($errrores, $campo){
    $alerta = '';
    if(isset($errrores[$campo]) && !empty($campo)){
        $alerta = '<div class="alerta alerta-error">'.$errrores[$campo].'</div>';
    }
    return $alerta;
}
// borrar errores
function borrarErrores(){
    $borrado = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $borrado=true;
    }
    if(isset( $_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $borrado=true;
    }
    if(isset( $_SESSION['Errores_entrada'])){
        $_SESSION['Errores_entrada'] = null;
        $borrado = true;
        
    }
    return $borrado;
}

// conseguir categorias

function conseguirCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql);

    $result = array();
    if($categorias && mysqli_num_rows($categorias) >= 1){
        $result = $categorias;
    }
    return $result;
}

function conseguirUltimasEntradas($conexion){
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id ORDER BY e.id DESC LIMIT 4";
    $entradas = mysqli_query($conexion,$sql);

    $result = array();

    if($entradas && mysqli_num_rows($entradas) >= 1){
        $result = $entradas;
    }

    return $result;
}

?>
<?php require_once 'conexion.php' ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Blog Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>

<body>
    <!--CABECERA-->
    <header id="header">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>

        <!--MENU-->

        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php 
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)): 
                    while ($categoria = mysqli_fetch_assoc($categorias)) : 
                ?>
                    <li>
                        <a href="categoria.php?id=<?=$categoria['id']?>"><?= $categoria['nombre'] ?></a>
                    </li>
                <?php 
                    endwhile;
                    endif;
                ?>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <div id="container">
        <!--BARRA LATERAL-->
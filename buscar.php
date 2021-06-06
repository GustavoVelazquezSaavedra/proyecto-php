<?php 
        if(!isset($_POST['busqueda'])){
            header("Location: index.php");
        }
?>

<?php require_once './includes/header.php'; ?>
<?php require_once './includes/aside.php'; ?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    
    <h1>Busqueda:  <?=$_POST['busqueda']?></h1>
    <?php
    $entradas= conseguirEntradas($db,null, null,$_POST['busqueda']); 
    if (!empty($entradas) && mysqli_num_rows($entradas)>0) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :
    ?>

            <article class="tickets">
                <a href="entrada.php?id=<?=$entrada['id']?>">
                    <h2><?=$entrada['titulo']?></h2>
                    <span class="date" ><?=$entrada['categoria']. ' | '.$entrada['fecha']?></span>
                    <p>
                        <?=substr($entrada['descripcion'], 0, 180)."..."?>
                    </p>
                </a>
            </article>

    <?php
        endwhile;
    else:
    ?>
    <div class="alerta">
        No hay Entradas en esta categoría
    </div>
    <?php endif; ?>
</div>
<!--FIN PRINCIPAL-->

<!--PIE DE PAGINA-->
<?php require_once './includes/footer.php' ?>
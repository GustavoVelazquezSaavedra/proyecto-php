<?php require_once './includes/redireccion.php' ?>
<?php require_once './includes/conexion.php'; ?>
<?php require_once './includes/helpers.php'; ?>
<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);

if (!isset($entrada_actual['id'])) {
    header("Location: index.php");
}
?>

<?php require_once './includes/header.php'; ?>
<?php require_once './includes/aside.php'; ?>

<div id="principal">
    <h1>Editar entrada</h1>
    <p>
        Edita tu entrada <strong>"<?=$entrada_actual['titulo']?>"</strong>
    </p>
    <br/>
   <form action="guardar_entradas.php?editar=<?=$entrada_actual['id']?>" method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>"/>
        <?php echo isset($_SESSION['Errores_entrada']) ? mostrarErrores($_SESSION['Errores_entrada'], 'titulo') : ''; ?>

        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion"  id="descripcion" cols="30" rows="10"><?=$entrada_actual['descripcion']?></textarea>
        <?php echo isset($_SESSION['Errores_entrada']) ? mostrarErrores($_SESSION['Errores_entrada'], 'descripcion') : ''; ?>
        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria">
            <?php 
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <option value="<?=$categoria['id']?>"<?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : ''?>>
                    <?= $categoria['nombre']?>
            </option>
            <?php 
                    endwhile;
                endif;
            ?>
            
        </select>
        <?php echo isset($_SESSION['Errores_entrada']) ? mostrarErrores($_SESSION['Errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" value="Guardar"/>
   </form>
   <?php borrarErrores()?>

</div>
<!--FIN PRINCIPAL-->

<!--PIE DE PAGINA-->
<?php require_once './includes/footer.php' ?>
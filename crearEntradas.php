<?php require_once './includes/redireccion.php' ?>
<?php require_once './includes/header.php' ?>
<?php require_once './includes/aside.php' ?>



<div id="principal">
    <h1>Crear entradas</h1>
    <p>
        Añade nuevas entradas  al blog para que los usuarios puedan leerlas y disfrutar de nuestro contenidos
    </p>
    <br/>
   <form action="guardar_entradas.php" method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" />

        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>

        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria">
            <?php 
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <option value="<?=$categoria['id']?>">
                    <?= $categoria['nombre']?>
            </option>
            <?php 
                    endwhile;
                endif;
            ?>
            
        </select>

        <input type="submit" value="Guardar"/>
   </form>

</div>
<!--FIN PRINCIPAL-->

<!--PIE DE PAGINA-->
<?php require_once './includes/footer.php' ?>
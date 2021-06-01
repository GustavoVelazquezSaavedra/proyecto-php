<?php require_once './includes/redireccion.php' ?>
<?php require_once './includes/header.php' ?>
<?php require_once './includes/aside.php' ?>

<div id="principal">
    <h1>Mis datos</h1>
    <?php if (isset($_SESSION['completado'])) : ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['completado'] ?>
        </div>
    <?php endif;  ?>
    <?php if (isset($_SESSION['errores']['general'])) : ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php endif; ?>
    <form action="actualizar_usuario.php" method="POST">
        <label for="nombres">Nombre/s: </label>
        <input type="text" name="nombres" id="nombres" value="<?= $_SESSION['usuario']['nombre']?>" />
        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombres') : ''; ?>
        <label for="apellidos">Apellido/s: </label>
        <input type="text" name="apellidos" id="apellidos" value="<?= $_SESSION['usuario']['apellido']?>"/>
        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidos') : ''; ?>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $_SESSION['usuario']['email']?>" />
        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : ''; ?>
        <input type="submit" name="submit" value="Modificar" />
    </form>
    <?php borrarErrores(); ?>
</div>
<!--FIN PRINCIPAL-->

<!--PIE DE PAGINA-->
<?php require_once './includes/footer.php' ?>
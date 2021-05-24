<?php require_once 'includes/helpers.php'; ?>
<aside id="sidebar">
    <?php if (isset($_SESSION['usuario'])) : ?>
        <div id="user-logged" class="block-aside">
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellido']; ?></h3>
            <!-- buttons -->
            <a href="./cerrar.php" class="boton boton-verde">Crear Entrada</a>
            <a href="./cerrar.php" class="boton">Crear Categoría</a>
            <a href="./cerrar.php" class="boton boton-naranja">Mis Datos</a>
            <a href="./cerrar.php" class="boton boton-rojo">Cerrar Sesión</a>
        </div>
    <?php endif; ?>
    <div id="login" class="block-aside">
        <h3>Identificarse</h3>

        <?php if (isset($_SESSION['error_login'])) : ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['error_login']; ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" />
            <input type="submit" value="Entrar" />
        </form>
    </div>
    <div id="register" class="block-aside">
        <h3>Registrarse</h3>
        <!-- MOSTRAR ERRORES -->
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
        <form action="register.php" method="POST">
            <label for="nombres">Nombre/s: </label>
            <input type="text" name="nombres" id="nombres" />
            <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombres') : ''; ?>
            <label for="apellidos">Apellido/s: </label>
            <input type="text" name="apellidos" id="apellidos" />
            <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidos') : ''; ?>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />
            <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : ''; ?>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" />
            <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'password') : ''; ?>
            <input type="submit" name="submit" value="Registrarse" />
        </form>
        <?php borrarErrores(); ?>
    </div>
</aside>
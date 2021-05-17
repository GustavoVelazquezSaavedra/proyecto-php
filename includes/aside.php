
    <aside id="sidebar">
        <div id="login" class="block-aside">
            <h3>Identificarse</h3>
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
            <form action="register.php" method="POST">
                <label for="nombres">Nombre/s: </label>
                <input type="text" name="nombres" id="nombres" />
                <label for="apellidos">Apellido/s: </label>
                <input type="text" name="apellidos" id="apellidos" />
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" />
                <input type="submit" name="submit" value="Registrarse" />
            </form>
        </div>
    </aside>
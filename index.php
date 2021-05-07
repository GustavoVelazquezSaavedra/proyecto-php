<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Blog Videojuegos</title>

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
                  <li>
                      <a href="index.php">Categoria 1</a>
                  </li>
                  <li>
                      <a href="index.php">Categoria 2</a>
                  </li>
                  <li>
                      <a href="index.php">Categoria 3</a>
                  </li>
                  <li>
                      <a href="index.php">Categoria 4</a>
                  </li>
                  <li>
                      <a href="index.php">Sobre mi</a>
                  </li>
                  <li>
                      <a href="index.php">Contacto</a>
                  </li>
              </ul>
          </nav>
        </header>
        <div id="container">
            <!--BARRA LATERAL-->
            <aside id="sidebar">
                <div id="login" class="block-aside">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"/>
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password"/>
                        <input type="submit" value="Entrar" />
                    </form>
                </div>
                <div id="register" class="block-aside">
                    <h3>Registrate</h3>
                    <form action="register.php" method="POST">
                        <label for="nombres">Nombre/s: </label>
                        <input type="text" name="nombres" id="nombres"/>
                        <label for="apellidos">Apellido/s: </label>
                        <input type="text" name="apellidos" id="apellidos"/>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"/>
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password"/>
                        <input type="submit" value="Registrarse" />
                    </form>
                </div>
            </aside>
            <!--CAJA PRINCIPAL-->
            <div id="principal">
                <h1>Ultimas Entradas</h1>
                <article class="tickets">
                    <h2>Título de mi entrada</h2>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                        mollit anim id est laborum."
                    </p>
                </article>
                
                <article class="tickets">
                    <h2>Título de mi entrada</h2>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                        mollit anim id est laborum."
                    </p>
                </article>
                
                <article class="tickets">
                    <h2>Título de mi entrada</h2>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                        mollit anim id est laborum."
                    </p>
                </article>
                
            </div>
        </div>
       

        

        <!--PIE DE PAGINA-->
        <footer id="footer">
            <p>Desarrollado por: Gustavo Velazquez &COPY; 2020</p>
        </footer>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ENTRY WISE!</title>
    <link rel="stylesheet" href="Vista/css/login.css" />
  </head>
  <body>
    <header>
      <div class="logo">
        <a class="navbar-brand" href="#">
          <img src="Vista/Imagenes/logo1.jpg" alt="" />
          <span> ENTRY-WISE</span>
        </a>
        <div class="container">
          <nav>
            <a href="Index.html">Inicio</a>
            <a href="">Programacion</a>
            <a href="">Carnet Digital</a>
            <a href="Dashboard.html">Registro de Equipos</a>
            <a href="login.php">Aprendiz</a>
            <a href="login.php">Instructor</a>
          </nav>
        </div>
      </div>
    </header>

    <section id="formulario">
      <div class="container">
        <div class="container-form">
          <form class="sign-in" action="verificar_login.php" method="POST">
            <h2>Iniciar Sesión</h2>
            <div class="social-networks">
              <ion-icon name="logo-twitch"></ion-icon>
              <ion-icon name="logo-twitter"></ion-icon>
              <ion-icon name="logo-instagram"></ion-icon>
              <ion-icon name="logo-tiktok"></ion-icon>
            </div>
            <span>Use su Correo y Contraseña</span>
            <div class="container-input">
              <ion-icon name="mail-outline"></ion-icon>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="container-input">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input type="password" name="password" placeholder="Contraseña" required />
            </div>
            <a href="#">¿Olvidaste tu contraseña?</a>
            <button class="button" type="submit">INICIAR SESIÓN</button>
          </form>
        </div>
        <div class="container-form">
          <form class="sign-up" action="registrar_usuario.php" method="POST">
            <h2>Registrarse</h2>
            <div class="social-networks">
              <ion-icon name="logo-twitch"></ion-icon>
              <ion-icon name="logo-twitter"></ion-icon>
              <ion-icon name="logo-instagram"></ion-icon>
              <ion-icon name="logo-tiktok"></ion-icon>
            </div>
            <span>Use su Correo Electrónico para Registrarse</span>
            <div class="container-input">
              <ion-icon name="person-outline"></ion-icon>
              <input type="text" name="nombre" placeholder="Nombre" required />
            </div>
            <div class="container-input">
              <ion-icon name="mail-outline"></ion-icon>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="container-input">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input type="password" name="password" placeholder="Contraseña" required />
            </div>
            <button class="button" type="submit">REGISTRARSE</button>
          </form>
        </div>
        <div class="container-welcome">
          <div class="welcome-sing-up welcome">
            <h3>¡Bienvenido!</h3>
            <p>
              Ingresa tus datos personales para usar todas las funciones de
              Check-In
            </p>
            <button class="button" id="btn-sign-up">Registrarse</button>
          </div>
          <div class="welcome-sing-in welcome">
            <h3>¡Hola!</h3>
            <p>
              Registra tus datos personales para disfrutar todas las funciones
              de Check-In
            </p>
            <button class="button" id="btn-sign-in">Iniciar Sesión</button>
          </div>
        </div>
      </div>
    </section>

    <script src="Vista/js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>

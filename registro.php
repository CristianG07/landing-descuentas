<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- LINKS CSS -->
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/registro.css">


  <title>Descuenta$</title>
</head>
<body>
  <header class="header">
    <nav class="container nav">
      <a href="./index.php" class="logo">DESCUENTA$</a>
    </nav>
  </header>
  <main>
    <section class="container_form">
      <div class="content_form">
        <div class="bg--black info_registro">
          <h5 class="title_registro">
            ¡Pronto estaremos lanzando <span>Descuentas</span> en Argentina! <br> <br>
            y podrás empezar a recibir los mejores descuentos y reintegros en efectivo por
            tus compras. <br> <br>
            Regístrate para usarlo
          </h5>
        </div>
        <div>
          <form action="formulario.php" method="GET" class="form_registro">
            <div class="inputs_registro">
              <div class="input1">
                <label for="text">Nombre</label> 
                <input  type="text" name="usuario" required>
              </div>
              <div class="input2">
                <label for="email">Correo electrónico</label>
                <input  type="email" name="correo" required>
              </div>
            </div>
            <div class="content_btn">
              <button type='submit' class='btn_nav'>REGISTRARME</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- LINKS CSS -->
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/formulario.css" />

    <title>Descuenta$</title>
  </head>
  <body>
    <header class="header">
      <nav class="container nav">
        <a href="../index.html" class="logo">DESCUENTA$</a>
      </nav>
    </header>

    <main class="main">
      <section class="container_form">
        <div class="content_form">
          <div class="bg--black info_formulario">
            <div class="title">
              <h5 class="title_formulario">
                <span class="bg--yellow">¡GRACIAS POR TU REGISTRO!</span>
                ESTAMOS TRABAJANDO PARA TI <br />
                <br />
                AYÚDANOS A CONOCERTE <br />
                COMPLETANDO ESTE CUESTIONARIO
              </h5>
            </div>
          </div>

          <div class="content_formulario">
            <form class="form_formulario" method="POST">
              <div class="inputs_formulario">
                <div class="content1 form">
                  <label>¿Qué descuentos te interesan más?</label>
                  <select></select>
                </div>
                <div class="content2 form">
                  <label>¿En cuál de las siguientes soluciones estás más interesado?</label>
                  <select></select>
                </div>
                <div class="content3 form">
                  <label>¿Qué medios de pago usas para tus compras?</label>
                  <select></select>
                </div>
                <div class="content4 form">
                  <label>¿Con qué frecuencia compras a través de Internet?</label>
                  <select></select>
                </div>
                <div class="selects_form">
                  <div class="content5 form">
                    <label>Año de nacimiento</label>
                    <select></select>
                  </div>
                  <div class="content6 form">
                    <label for="tarjeta_bancaria">¿Tienes tarjeta bancaria?</label>
                    <select class="select_form" name="tarjeta_bancaria">
                      <option value="si">Si</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>
                <div class="content7 form">
                  <label>¿Tienes clubes de beneficios como Club Personal o Club La Nación?</label>
                  <select></select>
                </div>
                <div class="content_btn">
                  <button type="submit" name="submit" class="btn_nav"
                    >ENVIAR FORMULARIO</button
                  >
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>



<?php

include 'connection.php';

if(isset($_POST['submit'])) {
  //hacemos llamado al imput de formuario
  $usuario = $_GET["usuario"];
  $correo = $_GET["correo"];
  $tarjeta_bancaria = $_POST["tarjeta_bancaria"] ;
  
  //insertamos datos de registro a la base de datos
  $instruccion_SQL = "INSERT INTO `registro` (`id`, `usuario`, `correo`, `tarjeta_bancaria`) VALUES (NULL, '$usuario', '$correo', '$tarjeta_bancaria')";
                             
  $resultado = mysqli_query($connec,$instruccion_SQL);
  
  if ($resultado) {
    
    ?>
    <script>  
      swal({
        title: "Success",
        text: "Data insertd",
        icon: "success",
      })
      .then((value) => {
        location.href = "../index.html";
      });
  
    </script>

    <?php
  
  } else {
  
    ?>
  
    <script>
  
      swal({
        title: "Failed",
        text: "Data not insertd",
        icon: "error",
      });
  
    </script>

    <?php
  }
}
// header( header: 'Location: ../index.html' );

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- LINKS CSS -->
    <link rel="stylesheet" href="./css/multi-select-tag.css">
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/formulario.css" />

    <title>Descuenta$</title>
  </head>
  <body>
    <header class="header">
      <nav class="container nav">
        <a href="./index.php" class="logo">DESCUENTA$</a>
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
                <div class="form">
                  <label>¿Qué descuentos te interesan más?</label>
                  <select name="descuentos_que_mas_interesan[]" id="descuentos_que_mas_interesan" multiple>
                    <option value="Cupones">Cupones</option>
                    <option value="Reintegros">Reintegros</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Reintegros en cripto">Reintegros en cripto</option>
                    <option value="Ver mis promos bancarias">Ver mis promos bancarias</option>
                  </select>
                </div>
                <div class="form">
                  <label>¿Para que rubros te gustaría que consiguiéramos más descuentos?</label>
                  <select name="rubros_con_descuentos[]" id="rubros_con_descuentos" multiple>
                    <option value="Supermercado">Supermercado</option>
                    <option value="Tecnología y electrodomésticos">Tecnología y electrodomésticos</option>
                    <option value="Hogar y muebles">Hogar y muebles</option>
                    <option value="Herramientas">herramientas</option>
                    <option value="Ropa y calzado">ropa y calzado</option>
                    <option value="Cine y entretenimiento">Cine y entretenimiento</option>
                    <option value="Maquillaje y cuidado personal">Maquillaje y cuidado personal</option>
                    <option value="Deporte y aire libre">deporte y aire libre</option>
                    <option value="Bebés y mamás">bebés y mamás</option>
                    <option value="Mascotas">mascotas</option>
                    <option value="Comidas y restaurantes">Comidas y restaurantes</option>
                    <option value="Librerías">librerías</option>
                  </select>
                </div>
                <div class="form">
                  <label>¿En cuál de las siguientes soluciones estás más interesado?</label>
                  <select name="soluciones_mas_interesadas" id="soluciones_mas_interesadas" multiple>
                    <option value="sitio web">sitio web</option>
                    <option value="aplicación movil">aplicación movil</option>
                    <option value="extensión de chrome para la computadora">extensión de chrome para la computadora</option>
                    <option value="consultas de descuento via whatsapp">consultas de descuento via whatsapp</option>
                  </select>
                </div>
                <div class="form">
                  <label>¿Qué medios de pago usas para tus compras?</label>
                  <select name="medio_de_pago[]" id="medio_de_pago" multiple>
                    <option value="Tarjetas">Tarjetas</option>
                    <option value="transferencias bancarias">transferencias bancarias</option>
                    <option value="saldo en billetera electrónica (mercadopago, modo)">saldo en billetera electrónica (mercadopago, modo)</option>
                    <option value="rapipago/pagofacil">rapipago/pagofacil</option>
                  </select>
                </div>
                <div class="content4 form">
                  <label>¿Con qué frecuencia compras a través de Internet?</label>
                  <select name="compras_por_internet" id="compras_por_internet" multiple>
                    <option value="No compro online">No compro online</option>
                    <option value="1 o 2 veces por año">1 o 2 veces por año</option>
                    <option value="Cada 2 o 3 meses">Cada 2 o 3 meses</option>
                    <option value="1 o 2 veces al mes">1 o 2 veces al mes</option>
                    <option value="3 a 5 veces al mes">3 a 5 veces al mes</option>
                    <option value="más de 5 veces al mes">más de 5 veces al mes</option>
                  </select>
                </div>
                <div class="selects_form">
                  <div class="content5 form">
                    <label>Año de nacimiento</label>
                    <select name="año_de_nacimiento" id="año_de_nacimiento" multiple>
                      <?php 
                        for($i = 2023; $i >= 1940; $i--) {
                          printf("<option value=".$i.">".$i."</option>");
                        }
                      ?>
                    </select>
                  </div>
                  <div class="content6 form">
                    <label for="tarjeta_bancaria">¿Tienes tarjeta bancaria?</label>
                    <select name="tarjeta_bancaria" id="tarjeta_bancaria" multiple>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>
                <div class="content7 form">
                  <label>¿usas los descuentos que te ofrecen?</label>
                  <select name="uso_de_descuentos" id="uso_de_descuentos" multiple>
                    <option value="NO">No</option>
                    <option value="Poco">Poco</option>
                    <option value="De vez en cuando">De vez en cuando</option>
                    <option value="Frecuentemente">Frecuentemente</option>
                  </select>
                </div>
                <div class="content7 form">
                  <label>¿Tienes clubes de beneficios como Club Personal o Club La Nación?</label>
                  <select name="club_de_beneficio" id="club_de_beneficio" multiple>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                  </select>
                </div>
                <div class="content_btn">
                  <button type="submit" name="submit" class="btn_form"
                    >ENVIAR FORMULARIO</button
                  >
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
    <section class="container container_footer">
      <div>
        <a href="#" class="logo logo_footer">DESCUENTA$</a>
      </div>
      <div class="content">
        <div class="btn">
          <a class="btn_nav" href="./index.php">INSTALAR GRATIS</a>
        </div>
        <div class="info_social">
          <div class="info_footer">
            <div>
              <h5 class="title_footer">SÍGUENOS</h5>
            </div>
            <div class="socials">
              <a href="#">
                <svg class="social" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path></svg>
              </a>
  
              <a href="#">
                <svg class="social" xmlns="http://www.w3.org/2000/svg" style="margin-left: 15px;" width="24" height="24" viewBox="0 0 24 24"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg>
              </a>
  
              <a href="#">
                <svg class="social" xmlns="http://www.w3.org/2000/svg" style="margin-left: 15px;" width="24" height="24" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path></svg>
              </a>
  
              <a href="#">
                <svg class="social" xmlns="http://www.w3.org/2000/svg" style="margin-left: 15px;" width="24" height="24" viewBox="0 0 24 24"><path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
    <script src="./js/multi-select-tag.js"></script>
    <script>
      new MultiSelectTag('tarjeta_bancaria')
      new MultiSelectTag('descuentos_que_mas_interesan')
      new MultiSelectTag('rubros_con_descuentos')
      new MultiSelectTag('soluciones_mas_interesadas')
      new MultiSelectTag('medio_de_pago')
      new MultiSelectTag('compras_por_internet')
      new MultiSelectTag('año_de_nacimiento')
      new MultiSelectTag('uso_de_descuentos')
      new MultiSelectTag('club_de_beneficio')
    </script>
  </body>
</html>



<?php

include('connection.php');

if(isset($_POST['submit'])) {
  //hacemos llamado al imput de formuario
  $usuario = $_GET["usuario"];
  $correo = $_GET["correo"];
  $tarjeta_bancaria = $_POST["tarjeta_bancaria"];
  $descuentos_que_mas_interesan = implode(", ",$_POST["descuentos_que_mas_interesan"]);
  $rubros_con_descuentos = implode(", ",$_POST["rubros_con_descuentos"]);
  $soluciones_mas_interesadas = $_POST["soluciones_mas_interesadas"];
  $medio_de_pago = implode(", ",$_POST["medio_de_pago"]);
  $compras_por_internet = $_POST["compras_por_internet"];
  $año_de_nacimiento = $_POST["año_de_nacimiento"];
  $uso_de_descuentos = $_POST["uso_de_descuentos"];
  $club_de_beneficio = $_POST["club_de_beneficio"];


  // insertamos datos de registro a la base de datos
  $instruccion_SQL = "INSERT INTO `registro_descuentas` (`usuario`, `correo`, `tarjeta_bancaria`, `descuentos_que_mas_interesan`, `rubros_con_descuentos`, `soluciones_mas_interesadas`, `medio_de_pago`, `compras_por_internet`, `año_de_nacimiento`, `uso_de_descuentos`, `club_de_beneficio`) VALUES ('$usuario', '$correo', '$tarjeta_bancaria', '$descuentos_que_mas_interesan', '$rubros_con_descuentos', '$soluciones_mas_interesadas', '$medio_de_pago', '$compras_por_internet', '$año_de_nacimiento', '$uso_de_descuentos', '$club_de_beneficio');";

  
  $resultado = mysqli_query($connec, $instruccion_SQL);

  
  if ($resultado) {
    ?>

    <script>  
      swal({
        title: "Éxito",
        text: "Datos enviados",
        icon: "success",
      })
      .then((value) => {
        location.href = "./index.php";
      });
  
    </script>

    <?php
  
  } else {
    
    ?>
  
    <script>
  
      swal({
        title: "Error",
        text: "Datos no enviados",
        icon: "error",
      });
  
    </script>

    <?php
    echo "Error: " . mysqli_error($connec);
  }
  mysqli_close($connec);
}

?>

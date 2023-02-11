<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- LINKS CSS -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/formulario.css" />
    <link rel="stylesheet" href="./css/multi-select-tag.css">

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
                        for($i = 2023; $i >= 1995; $i--) {
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
                    <option value="Nunca">Nunca</option>
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

include 'connection.php';

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
  


  //insertamos datos de registro a la base de datos
  $instruccion_SQL = "INSERT INTO `registro` (`id`,`usuario`, `correo`, `tarjeta_bancaria`, `descuentos_que_mas_interesan`, `rubros_con_descuentos`, `soluciones_mas_interesadas`, `medio_de_pago`, `compras_por_internet`, `año_de_nacimiento`, `uso_de_descuentos`, `club_de_beneficio`) VALUES (NULL, '$usuario', '$correo', '$tarjeta_bancaria', '$descuentos_que_mas_interesan', '$rubros_con_descuentos', '$soluciones_mas_interesadas', '$medio_de_pago', '$compras_por_internet', '$año_de_nacimiento', '$uso_de_descuentos', '$club_de_beneficio')";
                             
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
        location.href = "./index.php";
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

?>

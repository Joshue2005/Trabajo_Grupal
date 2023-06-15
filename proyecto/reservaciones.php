<?php
  $servidor = "localhost";
  $usuario = "root";
  $clave = "";
  $baseDeDatos = "proyecto";

  $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);



?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Basic -->

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->

    <meta
      name="viewport"
      content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"
    />

    <!-- Metas site -->
    <title>Restaurante Instituto</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Iconos -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Sitio CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color -->
    <link
      id="changeable-colors"
      rel="stylesheet"
      href="css/colors/orange.css"
    />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
          <div class="row">
            <!--RESERVACION PHP CON SQL-->
            <div class="form-reservations-box">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div
                  class="wow fadeIn"
                  data-wow-duration="1s"
                  data-wow-delay="0.1s"
                >
                  <h2 class="block-title text-center">Reservaciones</h2>
                </div>
                <h4 class="form-title">FORMULARIO DE RESERVA</h4>
                <p>POR FAVOR LLENA TODOS LOS PARAMETROS REQUERIDOS, GRACIAS!</p>
                <form
                  id="contact-form"
                  method="post"
                  class="reservations-box"
                  name="contactform"
                  action="mail.php"
                >
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-box">
                      <input type="text" name="form_name" id="form_name" placeholder="Nombre" required="required" data-error="Nombre es requerido pa."/>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-box">
                      <input
                        type="email" name="email" id="email" placeholder="Correo" required="required" data-error="E-mail id is required."/>
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-box">
                      <input
                        type="text" name="phone" id="phone" placeholder="Numero de contacto"/>
                    </div>
                  </div>
  
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-box">
                      <select name="no_of_persons" id="no_of_persons" class="selectpicker">
                        <option selected disabled>Nro. Personas</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                  </div>
  
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-box">
                      <input type="text" name="date-picker" id="date-picker" placeholder="Fecha" required="required" data-error="Date is required." />
                    </div>
                  </div>
  
                  <!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-box">
                      <input
                        type="text"
                        name="time-picker"
                        id="time-picker"
                        placeholder="Hora"
                        required="required"
                        data-error="Time is required."
                      />
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="reserve-book-btn text-center">
                      <button
                        class="hvr-underline-from-center"
                        name="registro"
                        type="submit"
                        value="SEND"
                        id="submit"
                      >
                        Reservar mi mesa
                      </button>
                    </div>
                  </div>
                  <!-- end col -->
                </form>
                <!-- end form -->
              </div>
              <!-- end col -->
            </div>
            <!-- end reservations-box -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end reservations-main -->
</body>

<?php
if(isset($_POST['registro'])){

  
  $name = $_POST ['form_name'];
  $correo = $_POST ['email'];
  $contacto = $_POST ['phone'];
  $personas = $_POST ['no_of_persons'];
  $fecha = $_POST ['date-picker'];
  $hora = $_POST ['time-picker'];

  $insertarDatos = "INSERT INTO reservaciones VALUES('$name', $correo, '$contacto', ' $personas','$fecha','$hora', '')";

  $ejecutarSubmit = mysqli_query($enlace, $insertarDatos);
}
?>


</html>
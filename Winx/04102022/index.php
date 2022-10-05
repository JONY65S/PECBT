<!DOCTYPE html>


<html lang="es">
    <head>
        <title>Congreso de Matemáticas</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
         
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <!--
Encabezado de la página */
        */banner, menu, carrusel, cuadro iniciar, cuadro fechas, -->
        <!-- Baner -->
         <div id="wrapper" > <center> <img src="img/banpru.jpg" class="baner"/> </center>  </div>
         
       <!-- Barra de menu -->
         <div>
            <header>  
                <input type="checkbox" id="btn-menu"> 
                <label for="btn-menu"><img src="img/menuicono.png" alt=""> </label>
                <nav class="menu">
                    <ul>
                        <li> <a href="">Inicio</a></li>
                        <li> <a href="">Memorias</a></li>
                        <li> <a href="">Convocatoria</a></li> 
                        <li> <a href="">Inscripción</a></li>
                        <li> <a href="">Comité Organizador</a></li>
                        <li> <a href=""><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesión</a></li>
                    </ul>  
                </nav> 
            </header>
        </div>
       <!-- Carrusel -->
         
        
            <div align="center">
            <div class="slider">
              <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!--radio buttons end-->
                <!--slide images start-->
                <div class="slide first">
                  <img src="img/carruselimg1.jpg" alt="">
                </div>
                <div class="slide">
                  <img src="img/carruselimg2.jpg" alt="">
                </div>
                <div class="slide">
                  <img src="img/carruselimg3.jpg" alt="">
                </div>
              <!--  <div class="slide">
                  <img src="4.jpg" alt="">
                </div>-->
                <!--slide images end-->
                <!--automatic navigation start-->
                <div class="navigation-auto">
                  <div class="auto-btn1"></div>
                  <div class="auto-btn2"></div>
                  <div class="auto-btn3"></div>
                  <div class="auto-btn4"></div>
                </div>
                <!--automatic navigation end-->
              </div>
              <!--manual navigation start-->
              <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
              </div>
              <!--manual navigation end-->
            </div>
            </div>
       <br>
       <!-- Cuadritos, inicio sesión y calendario  -->
         <!-- Inicio sesión  -->
         <div class="box">
			<div class="loginBox">
				<img class="avatar" src="img/Recurso1.png" alt="user">
				<h1>Iniciar Sesión</h1>
				<form method="POST">
					<!******USERNAME*******>
					<label for="Username">Correo</label>
					<input type="text" placeholder="Ingresa Correo" name="user">

					<!******PASSWORD*******>
					<label for="Password">Contraseña</label>
					<input type="password" placeholder="Ingresa Contraseña" name="pass">

					<input type="submit" value="Iniciar Sesión">

					<a href="#">¿Olvidaste tu contraseña?</a>
					<br>
					<a href="registro.php">¿No tienes una cuenta?</a>
				</form>
			</div>
		</div>
         <div>  
 <?php
$conexion=pg_connect("host=localhost dbname=BDCongresoMate user=postgres password=");
session_start();
 if(isset($_POST["user"]) && isset($_POST["pass"])){
$usuario= $_POST["user"];
$clave= $_POST["pass"];
  $clave = hash('sha512', $clave);

 if($conexion){
                echo "CONEXIÓN EXITOSA <br>";
            }else{
                echo "CONEXIÓN FALLIDA";
            }
            
$query="SELECT usuario, contraseña FROM usuario WHERE usuario='$usuario' AND contraseña= '$clave' ";
 $consulta= pg_query($conexion,$query);
 $cantidad= pg_num_rows($consulta);
 
 $query2=("Select id_usuario from usuario where usuario='$usuario' ");
                            $conn2=pg_query($conexion,$query2);

                               if(!$conn2){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn2) > 0) {
                                          while($rowData = pg_fetch_array($conn2)){
                                       $conn3=intval($rowData["id_usuario"]);
                                                   }
                                             }
                                             
                           $query5=("Select permiso_id_rol from permisos where usuario_id='$conn3' ");
                            $conn5=pg_query($conexion,$query5);

                               if(!$conn5){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn5) > 0) {
                                          while($rowData = pg_fetch_array($conn5)){
                                       $conn4=$rowData["permiso_id_rol"];
                                                   }
                                             }
                                             
                                             
                        if ($conn4=="0"){
                                          
 if ($cantidad>0){
     echo '<script>alert("Sesión Iniciada")</script>';
     header ("location:perfilusuario.php");

 } else{
      echo '<script>alert("Datos incorrectos")</script>';
 }}else if ($conn4=="1"){
     if ($cantidad>0){
     echo '<script>alert("Sesión Iniciada")</script>';
     header ("location:perfilponente.php");

 } else{
      echo '<script>alert("Datos incorrectos")</script>';
 }
 
 }
 
 }
?>
   </div>
         
         <!-- calendario -->
         <div class="calendar">
             <h1 class="title" style="color:#2B307C">Fechas Importantes</h1>
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>
          
    <div class="calendar__week">
        <div class="calendar__day calendar__item">Lu.</div>
        <div class="calendar__day calendar__item">Ma.</div>
        <div class="calendar__day calendar__item">Mi.</div>
        <div class="calendar__day calendar__item">Ju.</div>
        <div class="calendar__day calendar__item">Vi.</div>
        <div class="calendar__day calendar__item">Sa.</div>
        <div class="calendar__day calendar__item">Do.</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</div>

<script src="js/scriptscal.js"></script>


    </body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start(); 
?>
<html lang="es">
    <head>
        <title>Registro de cuenta</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/estilosregistro.css">
        <script type="text/javascript" src="js/mostrar.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
              
           <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"> </script>
   <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" > </script> 
        
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <meta http-equiv="XX-UA-Compatible" content="ie=edge">
    </head>
    <body>
        <?php
    if (isset($_SESSION['sms']) && $_SESSION['sms'])
    {
      printf('<b>%s</b>', $_SESSION['sms']);
      unset($_SESSION['sms']);
    } 
  ?>
        
         <!-- Baner -->
         <div id="wrapper"> <center> <img src="img/banpru.jpg" /> </center>  </div>
       <!-- Barra de menu -->
         <div>
            <header>  
                <input type="checkbox" id="btn-menu"> 
                <label for="btn-menu"><img src="img/menuicono.png" alt=""> </label>
                <nav class="menu">
                    <ul>
                        <li> <a href="index.php">Inicio</a></li>
                        <li> <a href="">Memorias</a></li>
                        <li> <a href="">Convocatoria</a></li> 
                        <li> <a href="">Inscripci??n</a></li>
                        <li> <a href="">Comit?? Organizador</a></li>
                        <li> <a href=""><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesi??n</a></li>
                    </ul>  
                </nav> 
            </header>
        </div>
       <br> 
       <!-- comment -->
       <div class="register">
			<p class="Tema">Reg??strate</p>
                        <form  method="POST" enctype="multipart/form-data"   >

				<p class="temaCentral">Datos personales</p>
				

				<div class="datosP">
					
					<p class="temaSec">Introducir sus datos correctos, ya que ser??n utilizados para las contancias.</p>

					<div class="D1">
						<!--******DATOS PERSONALES*******-->
						
						<table>
							
							<tr>
								<td class="C1">
									<label for="Name">Nombre (S):</label>
								</td>
								<td class="C2">
									<input class="inputP" style="text-transform:uppercase;" type="text" name="nombre" placeholder="Ingresa Nombre(s)" required>
								</td>
							</tr>

							<tr>
								<td class="C1">
									<label for="Last">Apellido (S):</label>
								</td>
								<td class="C2">
									<input class="inputP" style="text-transform:uppercase;" type="text" name="apellido" placeholder="Ingresa Apellido(s)" required>
								</td>
							</tr>

							<tr>
								<td class="C1">
									<label for="Emails">Correo:</label>
								</td>
								<td class="C2">
									<input class="inputP" type="Email" name="Correo" placeholder="Ingresa Correo" required>
								</td>
							</tr>

							<tr>
								<td class="C1">
									<label for="Country">Pa??s:</label>
								</td>
								<td class="C2">
									<input class="inputP" type="text" list="countryS"name="pais" placeholder="Selecciona Pa??s" required>
								</td>
							</tr>

							<tr>
								<td class="C1">
									<label for="Phone">Tel??fono:</label>
								</td>
								<td class="C2">
                                                                 <!--   <label for="Lad" id="ladaT" class="ladaS"><input class="inputP" list="tel" type="text" name="tel" placeholder="Ingresa Tel??fono" required  minlength="12" maxlength="14" pattern="[0-9]" ></label>
									-->  
                                                                        <input id="phone" type="tel" name="phone" required pattern="+[0-9]{14}" maxlength="14" onkeypress="numfinal()" />
								
								
                                                                
                                                                </td>
							</tr>

							<tr>
								<td class="C1">
									<label for="Password">Contrase??a:</label>
								</td>
								<td class="C2">
									<input class="inputP" id="passwordV1" type="password"  name="contrase??a" placeholder="M??ximo 10 caracteres" required minlength="8" maxlength="10">
								<img src="img/icono_ojo.png"  id=M1 name="Q1" type="button" width:="22" height= "20" onclick="MostrarP1()" >	
                                                                 </td>
							</tr>

							<tr>
								<td class="C1">
									<label for="SPassword">Repetir Contrase??a:</label>
								</td>
								<td class="C2">
									<input class="inputP" id="passwordV2" type="password" name="contrase??a2" placeholder="M??ximo 10 caracteres" required minlength="8" maxlength="10">
                                                                <img src="img/icono_ojo.png"  id=M2 name="Q2" type="button" width:="22" height= "20" onclick="MostrarP2()" >        
                                                                </td>
							</tr>
											
						</table>
	
					</div> 

				</div>

				<p class="temaCentral">Trayectoria Acad??mica</p>

				<div class="datosP">

					<div class="D1">
						<table >
							<tr>
								<td class="C1">
									<label for="GradoA">Grado Ac??demico:</label>	
								</td>
								<td class="C2">
									<input class="inputP" list="gA" type="text" name="grado" placeholder="Selecciona Grado Ac??demico" required>	
								</td>
							</tr>
						</table>
					</div>	

					<!--******TRAYECTORIA ACADEMICA*******-->
					
					
					
				</div>

				<p class="temaCentral">Trayectoria Laboral</p>

				<div class="datosP">

					<!--******TRAYECTORIA LABORAL*******-->

					<div class="D1">

						<table>
							<tr>
								<td class="C1">
									<label for="Institucion">Instituci??n:</label>	
								</td>
								<td class="C2">
									<input class="inputP" list="iO" type="text" name="institucion" placeholder="Selecciona Instituci??n" required>	
								</td>
							</tr>
						</table>

					</div>	
				</div>

				<p class="temaCentral">Semblanza</p>

				<div class="datosP">

					<!--******SEMBLANZA*******-->

					
					<p class="temaTer">En una cuartilla formato PDF, en Arial 12 interlineado sencillo, destacando estudios, participaciones en congresos y publicaciones. El archivo deber?? ser nombrado de la siguiente manera: NombrePrimerapellido_semblanza, ejemplo: JuanHernandez_semblanza.pdf </p>

                                        <input type="file" name="uploadedFile" accept="application/pdf" required />

				</div>

				<div class="final">

					
					<p class="temaF"><input type="checkbox" name="File" required>"He le??do y Acepto" las <a href="#ex1" rel="modal:open">Pol??ticas de privacidad.</a></p>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
                                        <!-- jQuery Modal -->
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
                                        
                                     
                                        <div id="ex1" class="modal">
                                        <p><center> <h3>Aviso de Privacidad Integral</h3></center> <br>
La Facultad de Estudios Superiores Cuautitl??n, con domicilio Carretera Cuautitl??n-Teoloyucan Km. 2.5, San Sebasti??n Xhala, Cuautitl??n Izcalli, Edo. de M??x., con c??digo postal 54714, es el responsable del tratamiento de los datos personales que nos proporcione, los cuales ser??n protegidos conforme a lo dispuesto por la <b><i>Ley General De Transparencia Y Acceso A La Informaci??n P??blica de M??xico</i></b>, y dem??s normatividad que resulte aplicable.<br>

<h4>Finalidades del tratamiento</h4>
Esta es responsable del tratamiento de sus datos personales para el registro de usted en calidad de alumno, docente, personal de la entidad acad??mica, conferencista o invitado externo (nacional o extranjero), los cuales ser??n utilizados para las siguientes finalidades:<br>
<br><b>a)</b> Registrar su inscripci??n a conferencia, talleres, etc.<br> 
<b>b)</b> Generar listas de asistencias y validaci??n de las mismas.<br> 
<b>c)</b> Emisi??n de constancia de participaci??n o asistencia de acuerdo a la modalidad de que se trate.<br>
<b>d)</b> Establecer comunicaci??n para dar seguimiento de las ponencias, talleres y trabajos adem??s de aclaraci??n de dudas sobre sus datos, notificaci??n de cancelaci??n o cambio de horario, fecha o sede.<br>
Y <b>e)</b> Generar estad??sticas para informes obligatorios del Instituto ante otros organismos p??blicos o privados, Realizar estad??sticas y an??lisis para informes obligatorios del congreso para la planeaci??n y evaluaci??n.<br> 

<br>De manera adicional, utilizaremos su informaci??n personal para las siguientes finalidades que no son necesarias, pero que nos permiten y facilitan brindarle una mejor atenci??n:<br>

<br>??? Env??o de material de exposici??n o apoyo.<br>
??? Invitaciones a futuros congresos.<br>

<h4>Datos personales recabados</h4>
Para las finalidades antes se??aladas se solicitar??n los siguientes datos personales: nombre completo, lugar o instituci??n de procedencia, tel??fono y correo electr??nico.<br>
Se informa que no se recaban datos personales sensibles.<br>

<h4>Fundamento legal</h4>
El fundamento para el tratamiento de datos personales son los art??culos:<br>
<br><b>a)</b> Art??culo 13. En la generaci??n, publicaci??n y entrega de informaci??n se deber?? garantizar que ??sta sea accesible, confiable, verificable, veraz, oportuna y atender?? las necesidades del derecho de acceso a la informaci??n de toda persona.<br>
<b>b)</b> Los art??culos 6??, Base A y 16, segundo p??rrafo, de la Constituci??n Pol??tica de los Estados Unidos Mexicanos; el 3??, fracci??n XXXIII, 4??, 16, 17, 18, 20, 21, 22, 23, 26, 27 y 28 de la Ley General de Protecci??n de Datos Personales en Posesi??n de Sujetos Obligados, as?? como los numerales del 5 al 19 de los Lineamientos para la Protecci??n de Datos Personales en Posesi??n de la Universidad Nacional Aut??noma de M??xico, publicados en la Gaceta UNAM el 25 de febrero de 2019.<br>

<h4>Transferencia de datos personales</h4>
Se informa que no realizar??n transferencias que requieran su consentimiento, salvo aquellas que sean necesarias para atender requerimientos de informaci??n de una autoridad competente, debidamente fundados y motivados.<br>

<h4>Derechos ARCO</h4>
Usted tiene derecho a conocer qu?? datos personales se tienen de usted, para qu?? se utilizan y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la correcci??n de su informaci??n personal en caso de que est?? desactualizada, sea inexacta o incompleta (Rectificaci??n); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no est?? siendo utilizada conforme a los principios, deberes y obligaciones previstas en la ley (Cancelaci??n); as?? como oponerse al uso de sus datos personales para fines espec??ficos (Oposici??n). Estos derechos se conocen como derechos ARCO.<br>

<br>Para ejercer sus derechos de acceso, rectificaci??n, cancelaci??n y oposici??n lo podr?? hacer en la Unidad de Transparencia de la UNAM, o a trav??s de la Plataforma Nacional de Transparencia <i>(http://www.plataformadetransparencia.org.mx/)</i>.<br>

<br>La determinaci??n adoptada, se le comunicar?? en un plazo m??ximo de veinte d??as h??biles contados desde la fecha en que se recibi?? la solicitud, a efecto de que, si resulta procedente, haga efectiva la misma dentro de los quince d??as h??biles siguientes a que se comunique la respuesta.<br>
<br>Puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligaci??n legal requiramos seguir tratando sus datos personales. Asimismo, usted deber?? considerar que, para ciertos fines, la revocaci??n de su consentimiento implicar?? que no le podamos seguir prestando el servicio del sistema en l??nea que nos solicit??, o la conclusi??n de su relaci??n con nosotros.<br>


<h4>Modificaciones al Aviso de Privacidad</h4>
El presente aviso de privacidad puede sufrir modificaciones o actualizaciones. Dichas actualizaciones o modificaciones estar??n disponibles al p??blico, por lo que el Titular podr?? consultarlas en el sitio web ???insertar sitio web???, en la secci??n Aviso de Privacidad. Se recomienda y requiere al Titular consultar el Aviso de Privacidad, por lo menos semestralmente para estar actualizado de las condiciones y t??rminos de este.<br>
</p>
                                        <a href="#" rel="modal:close">Cerrar Ventana</a>
					
				</div>
                                <div class="g-recaptcha" data-sitekey="6Lef3iQiAAAAAAita50DKSAbufLdOP74h6_nGMpt" data-callback="correctCaptcha" required></div>
                           

                                <button name= "uploadBtn" class="enviarBtn" value="Enviar">Enviar</button>
				<!--******CAMPO 1*******-->
			</form>
		</div>	
        <div class="alert alert-info" style="display: none;"></div>
       <div>
           
        
        
           <?php
                   
      //  session_start();


$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Enviar')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
 
    // CON ENCRIPTACI??N
    $newFileName = time() . $fileName . '.' . $fileExtension;
   // $newFileName = hash('md5', $newFileNameSin). '.' . $fileExtension;
   
    $allowedfileExtensions = array('pdf');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      $uploadFileDir = '../semblanza/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='El archivo se carg?? con ??xito.';
        
        
         $conexion=pg_connect("host=localhost dbname=BDCongresoMate user=postgres password=");
       $fechaActual = date ( 'Y-m-d' );
     /*   echo $fechaActual;
               if($conexion){
                echo "CONEXI??N EXITOSA <br>";
            }else{
                echo "CONEXI??N FALLIDA";
            } */
               
                if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["Correo"]) && isset($_POST["pais"]) && isset($_POST["phone"]) && isset($_POST["grado"]) && isset($_POST["institucion"]) &&isset($_POST["contrase??a"]) &&isset($_POST["contrase??a2"]) ){  
                        $nombre = $_POST["nombre"];
            	        $apellido = $_POST["apellido"];
            	        $Correo = $_POST["Correo"];
                        $pais = $_POST["pais"];
                        $grado = $_POST["grado"];
                        $institucion = $_POST["institucion"];
            	        $contrase??a = $_POST["contrase??a"];
                         $contrase??a = hash('sha512', $contrase??a);
                         $contrase??a2= $_POST["contrase??a2"];
                         $contrase??a2 = hash('sha512', $contrase??a2);
                    $semblanza =  strval($newFileName);
                        
                         $tel = $_POST["phone"];
                         
                         $query="SELECT email, telefono FROM contacto WHERE email='$Correo' AND telefono= '$tel' ";
                         $consultaR= pg_query($conexion,$query);
                         $cantidad= pg_num_rows($consultaR);
                         if ($cantidad>0){
                             echo"Ya existe un usuario registrado con el mismo email y telefono. Verifica tus datos e intenta nuevamente";
                                                   } else{
                        
                         
                         
                         
                         if ($contrase??a == $contrase??a2){



                        
                        $query=("INSERT INTO usuario (nombre_usuario, apellido_usuario, pais_usuario, usuario, contrase??a, fecha_registro)
                          VALUES('$nombre','$apellido', '$pais', '$Correo', '$contrase??a', '$fechaActual')");
                        $consulta1=pg_query($conexion,$query);
                       
                        $query2=("Select id_usuario from usuario where usuario='$Correo' ");
                            $conn2=pg_query($conexion,$query2);

                               if(!$conn2){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn2) > 0) {
                                          while($rowData = pg_fetch_array($conn2)){
                                       $conn3=intval($rowData["id_usuario"]);
                                                   }
                                             }
                       $query3=("INSERT INTO contacto (email, telefono, usuario_id) 
                          VALUES('$Correo', '$tel', '$conn3')");
                        $consulta2=pg_query($conexion,$query3);
                        
                      
                       $query4=("INSERT INTO trayectoria (semblanza_pdf, usuario_id) 
                          VALUES('$semblanza', '$conn3')");
                        $consulta4=pg_query($conexion,$query4); 
                        
                        $query5=("Select id_trayectoria from trayectoria where usuario_id='$conn3' ");
                            $conn5=pg_query($conexion,$query5);

                               if(!$conn5){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn5) > 0) {
                                          while($rowData = pg_fetch_array($conn5)){
                                       $conn4=intval($rowData["id_trayectoria"]);
                                                   }
                                             }
                        
                        
                         $query6=("Select id_grado from grado_academico where titulo= '$grado' ");
                       $conn6=pg_query($conexion,$query6);

                               if(!$conn6){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn6) > 0) {
                                          while($rowData = pg_fetch_array($conn6)){
                                       $conn66=intval($rowData["id_grado"]);
                                                   }
                                             }
                        
                        
                        $query7=("INSERT INTO grado_trayectoria (grado_id, trayectoria_id) 
                          VALUES('$conn66', '$conn4')");
                        $consulta7=pg_query($conexion,$query7); 
                        
                        
                        $query8=("Select id_institucion from institucion where nombre_institucion= '$institucion' ");
                          $conn8=pg_query($conexion,$query8);

                               if(!$conn8){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn8) > 0) {
                                          while($rowData = pg_fetch_array($conn8)){
                                       $conn88=intval($rowData["id_institucion"]);
                                                   }
                                             }
                        
                         $query9=("INSERT INTO trayectoria_institucion (trayectoria_id, institucion_id) 
                          VALUES('$conn4', '$conn88')");
                        $consulta9=pg_query($conexion,$query9); 
                        
                        if($conn66==1){
                             $query10=("INSERT INTO permisos (permiso_id_rol, usuario_id, estado) 
                          VALUES('0', '$conn3', '1')");
                        $consulta10=pg_query($conexion,$query10); 
                        }else if($conn66>=2){
                            $query10=("INSERT INTO permisos (permiso_id_rol, usuario_id, estado) 
                          VALUES('1', '$conn3', '1')");
                        $consulta10=pg_query($conexion,$query10); 
                        }           
                         
               }else{
                           echo"<script>alert('Las contrase??as no coinciden. El Registro no se Pudo Realizar. Intenta nuevamente!!');</script>";
                          return false;
                      }
                      
                }

        
        
     
                } 
        
        
        
      }
      else 
      {
        $message = 'Hubo un error al mover el archivo al directorio de carga. Aseg??rese de que el servidor web pueda escribir en el directorio de carga.';
      }
    }
    else
    {
      $message = 'Subida fallida. Tipos de archivo permitidos: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'Hay alg??n error en la carga del archivo. Por favor revise el siguiente error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
$_SESSION['sms'] = $message;?>
           
       </div>
       
       
       
	</body>
        
        
        <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
       preferredCountries: ["mx"],
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", autoHideDialCode:false,
    nationalMode: false,
   } );
      </script>

  
        
 
	<footer >
	</footer>


	<datalist id="countryS">
		
		<option label=	Afganist??n	value=	Afganist??n	>
		<option label=	Albania	value=	Albania	>
		<option label=	Alemania	value=	Alemania	>
		<option label=	Algeria	value=	Algeria	>
		<option label=	Andorra	value=	Andorra	>
		<option label=	Angola	value=	Angola	>
		<option label=	Anguila	value=	Anguila	>
		<option label=	Ant??rtida	value=	Ant??rtida	>
		<option label=	Antigua y Barbuda	value=	Antigua y Barbuda	>
		<option label=	Antillas Neerlandesas	value=	Antillas Neerlandesas	>
		<option label=	Arabia Saudita	value=	Arabia Saudita	>
		<option label=	Argentina	value=	Argentina	>
		<option label=	Armenia	value=	Armenia	>
		<option label=	Aruba	value=	Aruba	>
		<option label=	Australia	value=	Australia	>
		<option label=	Austria	value=	Austria	>
		<option label=	Azerbay??n	value=	Azerbay??n	>
		<option label=	B??lgica	value=	B??lgica	>
		<option label=	Bahamas	value=	Bahamas	>
		<option label=	Bahrein	value=	Bahrein	>
		<option label=	Bangladesh	value=	Bangladesh	>
		<option label=	Barbados	value=	Barbados	>
		<option label=	Belice	value=	Belice	>
		<option label=	Ben??n	value=	Ben??n	>
		<option label=	Bhut??n	value=	Bhut??n	>
		<option label=	Bielorrusia	value=	Bielorrusia	>
		<option label=	Birmania	value=	Birmania	>
		<option label=	Bolivia	value=	Bolivia	>
		<option label=	Bosnia y Herzegovina	value=	Bosnia y Herzegovina	>
		<option label=	Botsuana	value=	Botsuana	>
		<option label=	Brasil	value=	Brasil	>
		<option label=	Brun??i	value=	Brun??i	>
		<option label=	Bulgaria	value=	Bulgaria	>
		<option label=	Burkina Faso	value=	Burkina Faso	>
		<option label=	Burundi	value=	Burundi	>
		<option label=	Cabo Verde	value=	Cabo Verde	>
		<option label=	Camboya	value=	Camboya	>
		<option label=	Camer??n	value=	Camer??n	>
		<option label=	Canad??	value=	Canad??	>
		<option label=	Chad	value=	Chad	>
		<option label=	Chile	value=	Chile	>
		<option label=	China	value=	China	>
		<option label=	Chipre	value=	Chipre	>
		<option label=	Ciudad del Vaticano	value=	Ciudad del Vaticano	>
		<option label=	Colombia	value=	Colombia	>
		<option label=	Comoras	value=	Comoras	>
		<option label=	Congo	value=	Congo	>
		<option label=	Congo	value=	Congo	>
		<option label=	Corea del Norte	value=	Corea del Norte	>
		<option label=	Corea del Sur	value=	Corea del Sur	>
		<option label=	Costa de Marfil	value=	Costa de Marfil	>
		<option label=	Costa Rica	value=	Costa Rica	>
		<option label=	Croacia	value=	Croacia	>
		<option label=	Cuba	value=	Cuba	>
		<option label=	Dinamarca	value=	Dinamarca	>
		<option label=	Dominica	value=	Dominica	>
		<option label=	Ecuador	value=	Ecuador	>
		<option label=	Egipto	value=	Egipto	>
		<option label=	El Salvador	value=	El Salvador	>
		<option label=	Emiratos ??rabes Unidos	value=	Emiratos ??rabes Unidos	>
		<option label=	Eritrea	value=	Eritrea	>
		<option label=	Eslovaquia	value=	Eslovaquia	>
		<option label=	Eslovenia	value=	Eslovenia	>
		<option label=	Espa??a	value=	Espa??a	>
		<option label=	Estados Unidos de Am??rica	value=	Estados Unidos de Am??rica	>
		<option label=	Estonia	value=	Estonia	>
		<option label=	Etiop??a	value=	Etiop??a	>
		<option label=	Filipinas	value=	Filipinas	>
		<option label=	Finlandia	value=	Finlandia	>
		<option label=	Fiyi	value=	Fiyi	>
		<option label=	Francia	value=	Francia	>
		<option label=	Gab??n	value=	Gab??n	>
		<option label=	Gambia	value=	Gambia	>
		<option label=	Georgia	value=	Georgia	>
		<option label=	Ghana	value=	Ghana	>
		<option label=	Gibraltar	value=	Gibraltar	>
		<option label=	Granada	value=	Granada	>
		<option label=	Grecia	value=	Grecia	>
		<option label=	Groenlandia	value=	Groenlandia	>
		<option label=	Guadalupe	value=	Guadalupe	>
		<option label=	Guam	value=	Guam	>
		<option label=	Guatemala	value=	Guatemala	>
		<option label=	Guayana Francesa	value=	Guayana Francesa	>
		<option label=	Guernsey	value=	Guernsey	>
		<option label=	Guinea	value=	Guinea	>
		<option label=	Guinea Ecuatorial	value=	Guinea Ecuatorial	>
		<option label=	Guinea-Bissau	value=	Guinea-Bissau	>
		<option label=	Guyana	value=	Guyana	>
		<option label=	Hait??	value=	Hait??	>
		<option label=	Honduras	value=	Honduras	>
		<option label=	Hong kong	value=	Hong kong	>
		<option label=	Hungr??a	value=	Hungr??a	>
		<option label=	India	value=	India	>
		<option label=	Indonesia	value=	Indonesia	>
		<option label=	Ir??n	value=	Ir??n	>
		<option label=	Irak	value=	Irak	>
		<option label=	Irlanda	value=	Irlanda	>
		<option label=	Isla Bouvet	value=	Isla Bouvet	>
		<option label=	Isla de Man	value=	Isla de Man	>
		<option label=	Isla de Navidad	value=	Isla de Navidad	>
		<option label=	Isla Norfolk	value=	Isla Norfolk	>
		<option label=	Islandia	value=	Islandia	>
		<option label=	Islas Bermudas	value=	Islas Bermudas	>
		<option label=	Islas Caim??n	value=	Islas Caim??n	>
		<option label=	Islas Cocos (Keeling)	value=	Islas Cocos (Keeling)	>
		<option label=	Islas Cook	value=	Islas Cook	>
		<option label=	Islas de ??land	value=	Islas de ??land	>
		<option label=	Islas Feroe	value=	Islas Feroe	>
		<option label=	Islas Georgias del Sur y Sandwich del Sur	value=	Islas Georgias del Sur y Sandwich del Sur	>
		<option label=	Islas Heard y McDonald	value=	Islas Heard y McDonald	>
		<option label=	Islas Maldivas	value=	Islas Maldivas	>
		<option label=	Islas Malvinas	value=	Islas Malvinas	>
		<option label=	Islas Marianas del Norte	value=	Islas Marianas del Norte	>
		<option label=	Islas Marshall	value=	Islas Marshall	>
		<option label=	Islas Pitcairn	value=	Islas Pitcairn	>
		<option label=	Islas Salom??n	value=	Islas Salom??n	>
		<option label=	Islas Turcas y Caicos	value=	Islas Turcas y Caicos	>
		<option label=	Islas Ultramarinas Menores de Estados Unidos	value=	Islas Ultramarinas Menores de Estados Unidos	>
		<option label=	Islas V??rgenes Brit??nicas	value=	Islas V??rgenes Brit??nicas	>
		<option label=	Islas V??rgenes de los Estados Unidos	value=	Islas V??rgenes de los Estados Unidos	>
		<option label=	Israel	value=	Israel	>
		<option label=	Italia	value=	Italia	>
		<option label=	Jamaica	value=	Jamaica	>
		<option label=	Jap??n	value=	Jap??n	>
		<option label=	Jersey	value=	Jersey	>
		<option label=	Jordania	value=	Jordania	>
		<option label=	Kazajist??n	value=	Kazajist??n	>
		<option label=	Kenia	value=	Kenia	>
		<option label=	Kirgizst??n	value=	Kirgizst??n	>
		<option label=	Kiribati	value=	Kiribati	>
		<option label=	Kuwait	value=	Kuwait	>
		<option label=	L??bano	value=	L??bano	>
		<option label=	Laos	value=	Laos	>
		<option label=	Lesoto	value=	Lesoto	>
		<option label=	Letonia	value=	Letonia	>
		<option label=	Liberia	value=	Liberia	>
		<option label=	Libia	value=	Libia	>
		<option label=	Liechtenstein	value=	Liechtenstein	>
		<option label=	Lituania	value=	Lituania	>
		<option label=	Luxemburgo	value=	Luxemburgo	>
		<option label=	M??xico	value=	M??xico	>
		<option label=	M??naco	value=	M??naco	>
		<option label=	Macao	value=	Macao	>
		<option label=	Maced??nia	value=	Maced??nia	>
		<option label=	Madagascar	value=	Madagascar	>
		<option label=	Malasia	value=	Malasia	>
		<option label=	Malawi	value=	Malawi	>
		<option label=	Mali	value=	Mali	>
		<option label=	Malta	value=	Malta	>
		<option label=	Marruecos	value=	Marruecos	>
		<option label=	Martinica	value=	Martinica	>
		<option label=	Mauricio	value=	Mauricio	>
		<option label=	Mauritania	value=	Mauritania	>
		<option label=	Mayotte	value=	Mayotte	>
		<option label=	Micronesia	value=	Micronesia	>
		<option label=	Moldavia	value=	Moldavia	>
		<option label=	Mongolia	value=	Mongolia	>
		<option label=	Montenegro	value=	Montenegro	>
		<option label=	Montserrat	value=	Montserrat	>
		<option label=	Mozambique	value=	Mozambique	>
		<option label=	Namibia	value=	Namibia	>
		<option label=	Nauru	value=	Nauru	>
		<option label=	Nepal	value=	Nepal	>
		<option label=	Nicaragua	value=	Nicaragua	>
		<option label=	Niger	value=	Niger	>
		<option label=	Nigeria	value=	Nigeria	>
		<option label=	Niue	value=	Niue	>
		<option label=	Noruega	value=	Noruega	>
		<option label=	Nueva Caledonia	value=	Nueva Caledonia	>
		<option label=	Nueva Zelanda	value=	Nueva Zelanda	>
		<option label=	Om??n	value=	Om??n	>
		<option label=	Pa??ses Bajos	value=	Pa??ses Bajos	>
		<option label=	Pakist??n	value=	Pakist??n	>
		<option label=	Palau	value=	Palau	>
		<option label=	Palestina	value=	Palestina	>
		<option label=	Panam??	value=	Panam??	>
		<option label=	Pap??a Nueva Guinea	value=	Pap??a Nueva Guinea	>
		<option label=	Paraguay	value=	Paraguay	>
		<option label=	Per??	value=	Per??	>
		<option label=	Polinesia Francesa	value=	Polinesia Francesa	>
		<option label=	Polonia	value=	Polonia	>
		<option label=	Portugal	value=	Portugal	>
		<option label=	Puerto Rico	value=	Puerto Rico	>
		<option label=	Qatar	value=	Qatar	>
		<option label=	Reino Unido	value=	Reino Unido	>
		<option label=	Rep??blica Centroafricana	value=	Rep??blica Centroafricana	>
		<option label=	Rep??blica Checa	value=	Rep??blica Checa	>
		<option label=	Rep??blica Dominicana	value=	Rep??blica Dominicana	>
		<option label=	Reuni??n	value=	Reuni??n	>
		<option label=	Ruanda	value=	Ruanda	>
		<option label=	Ruman??a	value=	Ruman??a	>
		<option label=	Rusia	value=	Rusia	>
		<option label=	Sahara Occidental	value=	Sahara Occidental	>
		<option label=	Samoa	value=	Samoa	>
		<option label=	Samoa Americana	value=	Samoa Americana	>
		<option label=	San Bartolom??	value=	San Bartolom??	>
		<option label=	San Crist??bal y Nieves	value=	San Crist??bal y Nieves	>
		<option label=	San Marino	value=	San Marino	>
		<option label=	San Mart??n (Francia)	value=	San Mart??n (Francia)	>
		<option label=	San Pedro y Miquel??n	value=	San Pedro y Miquel??n	>
		<option label=	San Vicente y las Granadinas	value=	San Vicente y las Granadinas	>
		<option label=	Santa Elena	value=	Santa Elena	>
		<option label=	Santa Luc??a	value=	Santa Luc??a	>
		<option label=	Santo Tom?? y Pr??ncipe	value=	Santo Tom?? y Pr??ncipe	>
		<option label=	Senegal	value=	Senegal	>
		<option label=	Serbia	value=	Serbia	>
		<option label=	Seychelles	value=	Seychelles	>
		<option label=	Sierra Leona	value=	Sierra Leona	>
		<option label=	Singapur	value=	Singapur	>
		<option label=	Siria	value=	Siria	>
		<option label=	Somalia	value=	Somalia	>
		<option label=	Sri lanka	value=	Sri lanka	>
		<option label=	Sud??frica	value=	Sud??frica	>
		<option label=	Sud??n	value=	Sud??n	>
		<option label=	Suecia	value=	Suecia	>
		<option label=	Suiza	value=	Suiza	>
		<option label=	Surin??m	value=	Surin??m	>
		<option label=	Svalbard y Jan Mayen	value=	Svalbard y Jan Mayen	>
		<option label=	Swazilandia	value=	Swazilandia	>
		<option label=	Tadjikist??n	value=	Tadjikist??n	>
		<option label=	Tailandia	value=	Tailandia	>
		<option label=	Taiw??n	value=	Taiw??n	>
		<option label=	Tanzania	value=	Tanzania	>
		<option label=	Territorio Brit??nico del Oc??ano ??ndico	value=	Territorio Brit??nico del Oc??ano ??ndico	>
		<option label=	Territorios Australes y Ant??rticas Franceses	value=	Territorios Australes y Ant??rticas Franceses	>
		<option label=	Timor Oriental	value=	Timor Oriental	>
		<option label=	Togo	value=	Togo	>
		<option label=	Tokelau	value=	Tokelau	>
		<option label=	Tonga	value=	Tonga	>
		<option label=	Trinidad y Tobago	value=	Trinidad y Tobago	>
		<option label=	Tunez	value=	Tunez	>
		<option label=	Turkmenist??n	value=	Turkmenist??n	>
		<option label=	Turqu??a	value=	Turqu??a	>
		<option label=	Tuvalu	value=	Tuvalu	>
		<option label=	Ucrania	value=	Ucrania	>
		<option label=	Uganda	value=	Uganda	>
		<option label=	Uruguay	value=	Uruguay	>
		<option label=	Uzbekist??n	value=	Uzbekist??n	>
		<option label=	Vanuatu	value=	Vanuatu	>
		<option label=	Venezuela	value=	Venezuela	>
		<option label=	Vietnam	value=	Vietnam	>
		<option label=	Wallis y Futuna	value=	Wallis y Futuna	>
		<option label=	Yemen	value=	Yemen	>
		<option label=	Yibuti	value=	Yibuti	>
		<option label=	Zambia	value=	Zambia	>
		<option label=	Zimbabue	value=	Zimbabue	>
	</datalist>

	<datalist id="iO">
		<option label=	"Facultad de Arquitectura"						value=	"Facultad de Arquitectura"	>
		<option label=	"Facultad de Artes y Dise??o"					value=	"Facultad de Artes y Dise??o"	>
		<option label=	"Facultad de Ciencias"							value=	"Facultad de Ciencias"	>
		<option label=	"Facultad de Ciencias Pol??ticas y Sociales"		value=	"Facultad de Ciencias Pol??ticas y Sociales"	>
		<option label=	"Facultad de Contadur??a y Administraci??n"		value=	"Facultad de Contadur??a y Administraci??n"	>
		<option label=	"Facultad de Derecho"							value=	"Facultad de Derecho"	>
		<option label=	"Facultad de Econom??a"							value=	"Facultad de Econom??a"	>
		<option label=	"Facultad de Filosof??a y Letras"				value=	"Facultad de Filosof??a y Letras"	>
		<option label=	"Facultad de Ingenier??a"						value=	"Facultad de Ingenier??a"	>
		<option label=	"Facultad de Medicina"							value=	"Facultad de Medicina"	>
		<option label=	"Facultad de Medicina Veterinaria y Zootecnia"	value=	"Facultad de Medicina Veterinaria y Zootecnia"	>
		<option label=	"Facultad de M??sica"							value=	"Facultad de M??sica"	>
		<option label=	"Facultad de Odontolog??a"						value=	"Facultad de Odontolog??a"	>
		<option label=	"Facultad de Psicolog??a"						value=	"Facultad de Psicolog??a"	>
		<option label=	"Facultad de Qu??mica"							value=	"Facultad de Qu??mica"	>

		<option label=	"FES Acatl??n"		value=	"FES Acatl??n"	>
		<option label=	"FES Arag??n"		value=	"FES Arag??n"	>
		<option label=	"FES Cuautitl??n"	value=	"FES Cuautitl??n"	>
		<option label=	"FES Iztacala"		value=	"FES Iztacala"	>
		<option label=	"FES Zaragoza"		value=	"FES Zaragoza"	>

		<option label=	"ENAC"	value=	"ENAC"	>
		<option label=	"ENCiT"	value=	"ENCiT"	>
		<option label=	"ENEO"	value=	"ENEO"	>

		<option label=	"ENES Juriquilla" 	value=	"ENES Juriquilla"	>
		<option label=	"ENES Le??n" 		value=	"ENES Le??n" 	>
		<option label=	"ENES M??rida" 		value=	"ENES M??rida" 	>
		<option label=	"ENES Morelia" 		value=	"ENES Morelia" 	>

		<option label=	"ENALLT"	value=	"ENALLT"	>

		<option label=	"Escuela Nacional de Trabajo Social"	value=	"Escuela Nacional de Trabajo Social"	>

		<option label=	"ENP 1 Gabino Barreda"				value=	"ENP 1 Gabino Barreda"	>
		<option label=	"ENP 2 Erasmo Castellanos" Quinto	value=	"ENP 2 Erasmo Castellanos Quinto"	>
		<option label=	"ENP 3 Justo Sierra"				value=	"ENP 3 Justo Sierra"	>
		<option label=	"ENP 4 Vidal Casta??eda y N??jera"	value=	"ENP 4 Vidal Casta??eda y N??jera"	>
		<option label=	"ENP 5 Jos?? Vasconcelos"			value=	"ENP 5 Jos?? Vasconcelos"	>
		<option label=	"ENP 6 Antonio Caso"				value=	"ENP 6 Antonio Caso"	>
		<option label=	"ENP 7 Ezequiel A. Ch??vez"			value=	"ENP 7 Ezequiel A. Ch??vez"	>
		<option label=	"ENP 8 Miguel E. Schulz"			value=	"ENP 8 Miguel E. Schulz"	>
		<option label=	"ENP 9 Pedro de Alba" 				value=	"ENP 9 Pedro de Alba">

		<option label=	"CCH Azcapotzalco"	value=	"CCH Azcapotzalco"	>
		<option label=	"CCH Naucalpan"		value=	"CCH Naucalpan"	>
		<option label=	"CCH Oriente"		value=	"CCH Oriente"	>
		<option label=	"CCH Sur"			value=	"CCH Sur"	>
		<option label=	"CCH Vallejo"		value=	"CCH Vallejo"	>

		<option label=	"UNAM Campus Morelos"	value=	"UNAM Campus Morelos"	>

		<option label=	"Coordinaci??n de Estudios de Posgrado"	value=	"Coordinaci??n de Estudios de Posgrado"	>

	</datalist>

	<datalist id="gA">
		<option label=	Doctorado	value=	Doctorado	>
		<option label=	Maestr??a	value=	Maestr??a	>
		<option label=	Licenciatura	value=	Licenciatura	>
		<option label=	Estudiante	value=	Estudiante	>
	</datalist>

</html>

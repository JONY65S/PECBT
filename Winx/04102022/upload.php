<?php
session_start();


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
 
    // CON ENCRIPTACIÓN
    $newFileName = time() . $fileName . '.' . $fileExtension;
   // $newFileName = hash('md5', $newFileNameSin). '.' . $fileExtension;
   
    $allowedfileExtensions = array('pdf');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      $uploadFileDir = '../semblanza/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='El archivo se cargó con éxito.';
        
        
         $conexion=pg_connect("host=localhost dbname=BDCongresoMate user=postgres password=");
       $fechaActual = date ( 'Y-m-d' );
     /*   echo $fechaActual;
               if($conexion){
                echo "CONEXIÓN EXITOSA <br>";
            }else{
                echo "CONEXIÓN FALLIDA";
            } */
               
                if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["Correo"]) && isset($_POST["pais"]) && isset($_POST["phone"]) && isset($_POST["grado"]) && isset($_POST["institucion"]) &&isset($_POST["contraseña"]) &&isset($_POST["contraseña2"]) ){  
                        $nombre = $_POST["nombre"];
            	        $apellido = $_POST["apellido"];
            	        $Correo = $_POST["Correo"];
                        $pais = $_POST["pais"];
                        $grado = $_POST["grado"];
                        $institucion = $_POST["institucion"];
            	        $contraseña = $_POST["contraseña"];
                         $contraseña = hash('sha512', $contraseña);
                         $contraseña2= $_POST["contraseña2"];
                         $contraseña2 = hash('sha512', $contraseña2);

                        
                         $tel = $_POST["phone"];
                         
                         
                         $query="SELECT email, telefono FROM contacto WHERE email='$Correo' AND telefono= '$tel' ";
                         $consulta= pg_query($conexion,$query);
                         $cantidad= pg_num_rows($consulta);
                         if ($cantidad<0){
                             if ($contraseña == $contraseña2){


                        
                        $query=("INSERT INTO usuario (nombre_usuario, apellido_usuario, pais_usuario, usuario, contraseña, fecha_registro)
                          VALUES('$nombre','$apellido', '$pais', '$Correo', '$contraseña', '$fechaActual')");
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
                        
                      
                       $query4=("INSERT INTO trayectoria (usuario_id) 
                          VALUES('$conn3')");
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
                           echo"<script>alert('Las contraseñas no coinciden. El Registro no se Pudo Realizar. Intenta nuevamente!!');</script>";
                          return false;
                      }
                      
                      } else{
                        echo '<script>alert( "Ya existe un usuario registrado con el mismo email y telefono. Verifica tus datos e intenta nuevamente")</script>'; 
                         
                                }

        
        
     
                } 
        
        
        
      }
      else 
      {
        $message = 'Hubo un error al mover el archivo al directorio de carga. Asegúrese de que el servidor web pueda escribir en el directorio de carga.';
      }
    }
    else
    {
      $message = 'Subida fallida. Tipos de archivo permitidos: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'Hay algún error en la carga del archivo. Por favor revise el siguiente error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
$_SESSION['sms'] = $message;
//header("Location: registro.php");


 
header("Location: registro.php"); 


<?php

include ("db/conexion.php");


//inicio sesion 
  session_start(); 

 
// Recibir los datos y almacenarlos en variables
// $id = $_POST['id'];  
$usuario = $_POST['usuario'];
$password = $_POST['password'];



//Validar
 $consulta = "SELECT * FROM administrador  WHERE usuario = '$usuario' and password= '$password' " ;

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

//traer datos de la base de datos
$row= mysqli_fetch_array($resultado);

//Condicion
 $usuarioypassword= mysqli_num_rows($resultado);

if ($usuarioypassword>0){
	$_SESSION['usuario'] = $row['usuario'];
    header('Location: ../views/admin/inicio.php');
  //almacena en variables de sesion
    

}
  else {
    
    echo '<script>
        alert("usuario o contraseña invalidos");
         location.href="../index.php";
        </script>';
    
    
    exit;  
}

//Cerrar conexion
mysqli_free_result($resultado);
mysqli_close($conexion);


?>
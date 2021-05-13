<?php

include_once('../../../controllers/db/conexion.php');
 
session_start();


//Restringir acceso sin haberse logueado
if (isset($_SESSION['usuario'])) {
} else {
    
   echo '<SCRIPT LANGUAJE="javascript">
          location.href = "../../index.php";
</script>';
   exit;
 }
include_once('../../../controllers/db/variables-sesion.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registro Cliente</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style2.css">
    <link rel="stylesheet" href="../../../assets/css/sweet-alert.css">
    <link rel="stylesheet" href="../../../assets/css/ionicons.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    

</head>
<body >
    
      
           
          <nav class="navbar navbar-expand-lg navbar-light " style=" border-radius: 1em; background: #C5BA90" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
               
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active"><img src="../../../assets/imgs/img/holi.png" style="border-radius: 1em; height: 60px; width: 150px;"></li>
                <li class="nav-item active">
                  <a class="nav-link" href="../inicio.php"> 
                    <img src="../../../assets/imgs/icons/home.png"  style=" height: 50px; width:60px;"><span >inicio</span>
                  </a>
                </li>
                
               </ul>
              
                <ul class="navbar-nav  mt-6 mt-lg-0" style="float: right;">

                <li class="nav-item active">
                  <a class="nav-link" href="#"> 
                    <img src="../../../assets/imgs/img/consultor.png"  style="border-radius: 1em; height: 40px; width:90px;">
                   <center> <span class="nav-link" style="margin-top: -12px; height: 1px; " ><?php echo $usuario; ?></span></center>
                  </a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="../../../controllers/cerrar-sesion.php" > 
                    <img src="../../../assets/imgs/img/salida.png"  style="border-radius: 1em; height: 40px; width:60px;">
                   <span class="nav-link" style="margin-top: -12px; height: 1px; "> Cerrar Sesion</span>
                  </a>
                </li>
               </ul>
            </div>
          </nav>


        


      <?php require_once('../../../routing.php'); ?>




  
</body>

    
    
    


</html>
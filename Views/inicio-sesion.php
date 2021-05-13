

<body class="full-cover-background" style="background: #806B39;">
    <div class="form-container"  style ="border:5px solid #F1EEE7;border-radius: 10%; background-color:#C5BA90; ">
               
                 <figure >
                 	<center>
                    <img  class="logoSession" 
                    src="assets/imgs/img/logo.jpeg" height="200" width="200px">
                    </center>
                </figure>
                <br>
      <form id="login-form" action="Controllers/validar_sesion.php" method="post">
            <!-- Llamado a el router para llamar al metodo -->
            <!-- USUARIO -->
            <input type="hidden" name="solicitud" value="login">
            <div class="group-material-login">
              <input name="usuario" type="text" class="material-login-control" required="" maxlength="15">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario</label>
            </div>
            <br>
            <!-- CONTRASEÑA  -->
            <div class="group-material-login">
              <input name="password" type="password" class="material-login-control" required="" maxlength="30">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            
            <button class="btn-ingresar"  type="submit">INGRESAR </button>
           
        </form>
         <br>
      </div>

      <div class="pie-container">
        <br>
         <footer>
               </footer>
      </div>
</body>

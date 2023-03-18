<?php 
session_start();
if (isset($_SESSION['login'])) {
   header( "location:index.php" );
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style1/style.css" />
    <title>Masuk dan Daftar</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="../crud/login.php" method="post" class="sign-in-form">
            <h2 class="title">Masuk</h2>
            <div class="input-field">
              <i class="fas fa-file"></i>
              <input name="nama" type="text" placeholder="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="password" type="password" placeholder="Nama" />
            </div>
            <input type="submit" name="Login" class="btn solid" value="Masuk" />
          </form>
          
        </div>
      </div>
      
      <div class="panels-container">
    
          <div class="panel left-panel">
          <div class="content">
            <h3>Selamat Datang di dasboard cosbo</h3>
            <br>
          </div>
          <img src="img/Chat.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Punya Akun ?</h3>
            <p>
              Klik disini !
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Masuk
            </button>
          </div>
          <img src="img/Mobile.png" class="image" alt="" />
        </div>
        
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>

<?php 

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
              <input name="nik" type="text" placeholder="NIK" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
            <input type="submit" name="Login" class="btn solid" value="Masuk" />
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="../crud/register.php" method="POST" class="sign-up-form">
            <h2 class="title">Daftar</h2>
            <div class="input-field">
              <i class="fas fa-file"></i>
              <input type="text" name="nama" placeholder="Nama" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nik" placeholder="NIK" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Daftar" />
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
      
      <div class="panels-container">
      <?php if (!isset($_SESSION['regist'])) {?>
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum Daftar ?</h3>
            <p>
              Klik disini !
            </p>
            <br>
            <button class="btn transparent" id="sign-up-btn">
              Daftar
            </button>
          </div>
          <img src="img/Chat.png" class="image" alt="" />
        </div>
        <?php }else{ ?>
          <div class="panel left-panel">
          <div class="content">
            <h3>Selamat Datang Peduli Diri</h3>
            <br>
          </div>
          <img src="img/Chat.png" class="image" alt="" />
        </div>
        <?php } ?>
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

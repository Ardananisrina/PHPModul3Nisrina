<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style media="screen">
    body{
      margin: 0;
      padding: 0;
      background-image: url("img2.jpg");
      background-repeat: no-repeat;
      background-size: 100% 675px;
      font-family: sans-serif;
    }
    .bayangan{
      width: 100%;
      height: 675px;
      background: #000;
      opacity: 0.8;
    }
    .box{
      width: 280px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateX(-50%)translateY(-50%);
      color: white;
    }
    .box h1{
      color: white;
      text-align: center;
      font-size: 40px;
      border-bottom: 6px solid #fff;
      padding: 13px 0;
    }
    .text-box{
      width: 100%;
      overflow: hidden;
      padding: 8px 0;
      margin: 8px 0;
      font-size: 15px;
      border-bottom: 1px solid white;
    }
    .text-box input{
      border: none;
      outline: none;
      background: none;
      color: white;
      font-size: 18px;
      width: 80%;
      float: left;
      margin: 0 10px;
    }
    .button{
      width: 100%;
      background: none;
      border: 2px solid white;
      color: white;
      padding: 5px;
      font-size: 18px;
      cursor: pointer;
      margin: 12px 0;
    }
    .reset a{
      color: white;
    }
    </style>
  </head>
  <body>
    <div class="bayangan"></div>
      <div class="box">
          <h1>Login</h1>
          <form action="" method="post">
            <div class="text-box">
              <input type="text" name="nama" placeholder="Username/Email">
            </div>
            <div class="text-box">
              <input type="password" name="password" placeholder="Password">
            </div>
            <input class="button" type="submit" name="submit" value="LOGIN"><br>
          </form>
          <?php
          if(isset ($_POST['submit'])) {
            $nama = $_POST['nama'];
            $password = $_POST['password'];
          if($nama == "" || $password == ""){
            echo "Username dan Password harus diisi!";
          }  else if($nama == "Nisrina@gmail.com" && $password == "sparrowchamsae"){
            echo "Login Berhasil";
          } else{
            echo "Data yang dimasukkan salah";
          }}
          ?>
          <div class="reset">
            <br>
            <a href="#">Lupa Password?</a>
          </div>
      </div>
    </div>
  </body>
</html>

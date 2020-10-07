<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>styles.css">
  </head>
  <body>
    <form class="" action="<?php echo base_url('login/aksi_login'); ?>" method="post">


<div class="login-box">
  <h1 style="color: black"></h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Nama User">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Kata Sandi">
  </div>

  <input style="color: black" type="button" class="btn" value="Login">
  <a href="<?=base_url('home/dashboard')?>">langsung masuk</a>
    </form>
</div>
  </body>
</html>

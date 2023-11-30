<!DOCTYPE html>
<html>

<head>
   <title>Login | SISKAPEDES</title>
   <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <script src="<?php echo base_url(); ?>assets/js/a81368914c.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
   <div class="container">
      <div class="img">
         <img src="<?php echo base_url(); ?>assets/img/login.svg">
      </div>
      <div class="login-content">
         <form class="user" method="POST" action="<?php echo base_url('login') ?>">
            <img src="<?php echo base_url(); ?>assets/img/purbalingga.png">
            <h2 class="title">
               SISKAPEDES
            </h2>
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Nomor Induk Kependudukan</h5>
                  <input type="text" class="input" name="nik">
               </div>
            </div>
            <?php echo form_error('nik') ?>
            <div class="input-div">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">

                  <h5>Password</h5>
                  <input type="password" class="input" name="password">
               </div>
            </div>
            <?php echo form_error('password') ?>
            <input type="submit" class="btn" value="Login">
         </form>
      </div>
   </div>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
   <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
   <script>
      $(".alert").fadeTo(3000, 500).slideUp(500, function() {
         $(".alert").slideUp(500);
         $(".alert").remove();
      });
   </script>
</body>

</html>
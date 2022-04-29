<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Bootstrap -->
  <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image:url(bg1.jpg);
      background-size: 100% 100%;
      height: 100%;

  /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .row {
      margin:100px auto;
      width:300px;
      text-align:center;
    }
    .login {
      background-color:#  ;
      padding:20px;
      margin-top:20px;
    }
    .btn {
      background-color: cadetblue;
      border:solid cadetblue;
    }
  </style>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<?php echo form_open('login/cekLogin') ?>
    <div class="col-sm-4">
      <div class="row">
        <h1><b><font face = "century gothic" color = "black">LOGIN</font></b></h1>
        <div class="login">
          <form role="form" action="" method="post">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
            </div>
            <div class="form-group">
              <input type="submit" name="login" class="btn btn-primary btn-block" value="Buat Masukin Kamu" />
            </div>
          </form>
        </div>
          <p>CopyRight@AflahRM</p>
      </div>
    </div>
          <div class="col-sm-8">
          <img src="<?php echo base_url(); ?>assets/images/bg1.png" class="img-responsive center-block" width="450" height="450"></a>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
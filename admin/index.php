<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="style/mv.png">
  <link rel="icon" type="image/png" href="../images/ico.png">
  <title>Kawasaki</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="./../css/bootstrap.min.css">
  <link rel="stylesheet" href="./../css/AdminLTE.min.css">
  <link rel="stylesheet" href="./../css/square/blue.css">
  <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="plugins/sweetalert/jquery-2.1.3.min.js"></script>
    <script src="plugins/sweetalert/sweetalert.min.js"></script>        
    <script src="plugins/sweetalert/sweetalert-dev.js"></script>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Kawasaki</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Consumable</p>
    <form action="login.php" method="post" name="form_login">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" required placeholder="Username">
        <span class="form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" required placeholder="Password">
        <span class="form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
          </div>
         
        </div>
        <div class="col-xs-4">
          <button type="submit" name="submit" id="btnLogin" value="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>
    <div>
      <p style="margin-bottom: 0;font-size: 12px;
    position: absolute;
    z-index: 99999;
    color: white;
    margin-top: 7px;
    background: transparent;">Copyright © 2016 &nbsp;Prehanto</a></p>
    </div>

  </div>
   <hr style="border-top: 25px solid #333;;margin-bottom:0;margin-top:-18px">
   <hr style="border-top: 2px solid #5aab26;;margin-bottom:0;margin-top:0px">
   <hr style="border-top: 2px solid #333;margin-bottom:0;margin-top: 0px">
    <hr style="border-top: 3px solid #5aab26;margin-bottom:0;margin-top: 0px">
    <hr style="border-top: 4px solid #333;margin-bottom:0;margin-top: 0px">
    <hr style="border-top: 8px solid #5aab26;margin-bottom:0;margin-top: 0px"> 
</div>

<script src="./../js/jquery-1.11.1.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="./../js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="./../js/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

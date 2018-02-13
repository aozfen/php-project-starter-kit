<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ahmetozfen.com | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <meta name="theme-color" content="#2b9af3">
    <meta name="msapplication-navbutton-color" content="#2b9af3">
    <meta name="apple-mobile-web-app-status-bar-style" content="#2b9af3">


  <link rel="shortcut icon" href="<?=admin_asset_url('img/meta/logo-mins.png')?>" type="image/x-icon" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=admin_asset_url('bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=admin_asset_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=admin_asset_url('dist/css/AdminLTE.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=admin_asset_url('plugins/iCheck/square/blue.css')?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
  html, body {
    height: 0%;
}
 .login-logo a{
   text-shadow: 1px 1px #000
 }

</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=admin_url()?>"><b>Yönetim</b> Paneli</a>
  </div>
  <!-- /.login-logo -->
  <div class="box login-box-body">
    <div class="overlay" style="display:none">
         <i class="fa fa-refresh fa-spin"></i>
    </div>
    <p class="login-box-msg">Oturumu açmak için giriş yapınız</p>
    <div class="alert alert-danger alert-dismissible" style="display:none">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h4><i class="icon fa fa-ban"></i> Hata!</h4>
         <span id="alertError"></span>
    </div>
    <div class="alert alert-success alert-dismissible" style="display:none">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h4><i class="icon fa fa-check"></i> Başarılı!</h4>
         <span id="alertSuccess"></span>
    </div>
    <form action="<?=admin_ajax_url('login')?>" id="frmAdminLogin" name='form' role="form" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Kullanıcı adı">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Beni Hatırla
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" value="1" name="submit" class="btn btn-primary btn-block btn-flat">Giriş Yap</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   

    <a href="<?=site_url()?>">Ana Sayfaya Dön</a><br>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script>
 var admin_url = '<?php echo admin_url(); ?>'
</script>
<script src="<?=admin_asset_url('plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<script src="<?=admin_asset_url('js/jquery.form.min.js')?>"></script>
<script src="<?=admin_asset_url('js/main.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=admin_asset_url('bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?=admin_asset_url('plugins/iCheck/icheck.min.js')?>"></script>

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

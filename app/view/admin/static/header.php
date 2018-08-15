

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yönetim Paneli</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



  <link rel="shortcut icon" href="<?=admin_asset_url('img/meta/logo-mins.png')?>" type="image/x-icon" />

  <?php
  
   foreach ($admin['files']['css'] as $key => $value) {
      echo $value;
   }
  
  ?>






  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=admin_url()?>" class="logo">
      <span class="logo-mini"><b>A</b>Ö</span>
      <span class="logo-lg"><b>Ahmet</b> ÖZFEN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
             <?php if ($num_gelen > 0) {
                    echo "<span class=\"label label-success pull-right\">".$num_gelen."</span>";
                  } ?>
            </a>
            <ul class="dropdown-menu">
              <li class="header">
              <?php if ($num_gelen > 0) {
                    echo $num_gelen." yeni mesajınız var";
                  } ?></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <?php 
                $query_header_posta= $db->query("Select * from tbl_iletisim where durum = 1 order by tarih desc", PDO::FETCH_ASSOC);
                if ( $query_header_posta->rowCount() ){
                     foreach( $query_header_posta as $row_header_posta ){
                          print $row['kulanici_adi']."<br />";
                    

                   ?>
                   <li><!-- start message -->
                    <a href="?page=mail&islem=oku&okundu=true&url=<?php echo $row_header_posta['id']?>">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <?=$row_header_posta['konu'];?>
                        <small><i class="fa fa-clock-o"></i><?=timeAgo($row_header_posta['tarih']);?></small>
                      </h4>
                      <p><?php $mesaj = substr($row_header_posta['mesaj'], 0, 40); echo $mesaj."...";?></p>
                    </a>
                  </li>
                  <!-- end message -->
                <?php  } } else { ?> 
                
                <span style="margin:40px">Yeni mesajınız bulunamamktadır</span>
                
                <?php } ?>
                  
                  
                </ul>
              </li>
              <li class="footer"><a href="?page=mail">Tüm Mesajları Göster</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=asset_url() . session('user_image')?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=session('username')?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=asset_url() . session('user_image')?>" class="img-circle" alt="User Image">

                <p>
                  <?=session('username') . ' - ' . session('user_mevki')?> 
                  <!--<small>Member since Nov. 2017</small>-->
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="<?=admin_url('logout')?>" class="btn btn-default btn-flat">Çıkış Yap</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>

  <?php require 'side-bar.php'; ?>
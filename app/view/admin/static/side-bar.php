<?php 
  $query_makale = $db->query("Select id from tbl_posts", PDO::FETCH_ASSOC);
  $makale_num = $query_makale->rowCount();

 $query_onaylanmayan_yorum =  $db->query("SELECT onay FROM tbl_yorumlar where onay = 0"); 
 $num_onaylanmayan_yorum = $query_onaylanmayan_yorum->rowCount();

 $query_spam_yorum = $db->query("SELECT onay FROM tbl_yorumlar where onay = 2");  
 $num_spam_yorum = $query_spam_yorum->rowCount();

$gelen_sayi_query = $db->query("SELECT id from tbl_iletisim where durum = 1");
$num_gelen = $gelen_sayi_query->rowCount();
 ?>
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=asset_url() . session('user_image')?>" class="img-circle" alt="User Image" style="max-height:45px">
        </div>
        <div class="pull-left info">
          <p>Ahmet Özfen</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENÜ</li>

        <?php foreach($admin['menu'] as $key => $menu):?>
          <?php
            $isActive = url(1) == $key;
            if(!$isActive && isset($menu['submenu']) && isset($menu['submenu'][url(1)])){
              $isActive = true;
            }
          ?>
          <li class="<?=$isActive ? 'active' : null?>">
            <a href="<?=admin_url($key)?>">
              <i class="fa <?=$menu['icon']?>"></i> <span><?=$menu['title']?></span>

              <?php if(isset($menu['submenu'])): ?>

                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>

              <?php endif; ?>

            </a>

            <?php if(isset($menu['submenu'])): ?>
             <ul class="treeview-menu">

              <?php foreach($menu['submenu'] as $subKey => $subMenu): ?>
                  
                  <li class="<?=url(1) == $subKey ? 'active' : null?>"><a href="<?=admin_url($subKey)?>"><i class="fa fa-circle-o"></i><?=$subMenu['title']?></a></li>

              <?php endforeach; ?>
              
             </ul>
            <?php endif;?>

          </li>
        <?php endforeach; ?>




         
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
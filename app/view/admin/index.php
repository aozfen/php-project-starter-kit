<?php require view('admin/static/header') ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Kontrol Paneli</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$makale_num;?></h3>

              <p>İlan</p>
            </div>
            <div class="icon">
              <i class="fa fa-road"></i>
            </div>
            <a href="?page=makale-listesi" class="small-box-footer">Devamını gör <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$yorum_num;?><sup style="font-size: 20px"></sup></h3>

              <p>Üye</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="?page=uye-listesi" class="small-box-footer">Devamını gör <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?=$okunma_array;?><sup style="font-size: 20px"></sup></h3>

              <p>Topam Hit</p>
            </div>
            <div class="icon">
              <i class="fa fa-eye"></i>
            </div>
            <a href="#" class="small-box-footer"> &nbsp;</a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?=7;?></h3>

              <p>Proje</p>
            </div>
            <div class="icon">
              <i class="fa fa-building-o"></i>
            </div>
            <a href="?page=mail" class="small-box-footer">Devamını gör <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$mail_num;?></h3>

              <p>Mesaj</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope-o"></i>
            </div>
            <a href="?page=mail" class="small-box-footer">Devamını gör <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       
      

      </div>
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kısayollar</h3>
            </div>
            <div class="box-body">
             
              <a href="?page=makale-ekle" class="btn btn-app">
                <i class="fa fa-edit"></i> Yeni Makele
              </a>
              <a href="?page=kategori-ekle" class="btn btn-app">
                <i class="fa fa-pencil"></i> Kategori Ekle
              </a>
              <a class="btn btn-app">
                <i class="fa fa-camera"></i> Galeri
              </a>

              <a href="?page=yorum-listesi" class="btn btn-app">
                <!--<span class="badge bg-purple">891</span>-->
                <i class="fa fa-users"></i> Yorum Listesi
              </a>  
              <a href="?page=mail" class="btn btn-app">
                <i class="fa fa-envelope"></i> Mailler
              </a>
              <a class="btn btn-app">
                <span class="badge bg-red">531</span>
                <i class="fa fa-heart-o"></i> Likes
              </a>
              <a class="btn btn-app">
                <i class="fa fa-cogs"></i> Site Ayarları
              </a>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
         <!-- left col (We are only adding the ID to make the widgets sortable)-->
         <section class="col-lg-6 connectedSortable ui-sortable">

            <!-- quick email widget -->
            <div class="box box-info">
              <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Direct Mail</h3></br>
                <small>Mail gönderebilmeniz için genel ayarlar bölümünden SMTP ayarlarını yapmış olmanız gereklidir. <a href="javascript:;">SMTP ayarlarını yapılandır</a></small>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body">
                <form action="#" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="emailto" placeholder="Gönderilecek Email ">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Konu">
                  </div>
                  <div>
                    <textarea class="textarea" placeholder="Mesajınız" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </form>
              </div>
              <div class="box-footer clearfix">
                <button type="button" class="pull-right btn btn-default" id="sendEmail">Gönder
                  <i class="fa fa-arrow-circle-right"></i></button>
              </div>
            </div>

        </section>
        <!-- right col -->
        <!-- right col -->
        <section class="col-lg-6 connectedSortable">
        <style>
          .chat-disabled{
            display:none;
            background-color: rgba(0,0,0,0.3);
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0px;
            top: 0px;
            z-index:99;
            border-radius: 0px 0px 3px 3px;
            text-align:center;
          }
          .chat-disabled h4{
            color:#fff;
            margin-top:200px;
            font-size: 30px;
            font-family:arial;
            text-shadow: 1px 1px #454545;
          }
        </style>
           <!-- Chat box -->
          <div class="box box-success">
              <div class="chat-disabled" >
                  <h4>Genel sohbet alanı aktif değil</h4>
              </div>
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

             
         

              <h3 class="box-title">Sohbet</h3></br>
             
              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="loader" style="display:none; text-align: center;margin: 20px 0px">
                    <img src="<?=asset_url('img/message-load.gif')?>" width="24" />
            </div>
            <div class="box-body chat" id="chat-box">
           
              <!-- chat item -->
                <?php
    

             /*   $data = array();
                $query = $db->query("Select
                tbl_message.id,
                tbl_message.gonderen_id,
                tbl_message.message,
                tbl_message.tarih,
                tbl_users.profil_resmi,
                tbl_users.username
              From
                tbl_message Inner Join
                tbl_users
                  On tbl_message.gonderen_id = tbl_users.id
              Order By
                tbl_message.id Desc
              Limit 10", PDO::FETCH_ASSOC);
                if ( $query->rowCount() ){
                 
                     foreach( $query as $row ){
                      $temp = array();
                      $temp['id'] = $row['id'];
                      $temp['username'] = $row['username'];
                      $temp['image'] = $row['profil_resmi'];
                      $temp['message'] = $row['message'];
                      $temp['tarih'] = $row['tarih'];
                      array_push($data, $temp);
                     }
                     sort($data);
                     foreach($data as $r){  
                ?>
                        <!-- chat item -->
                        <div class="item" id="<?=$r['id']?>">
                          <img src="<?=asset_url(''.$r['image'].'')?>" alt="user image" class="">

                          <p class="message">
                            <a href="#" class="name">
                              <small class="text-muted pull-right"><i class="fa fa-clock-o"></i><?=$r['tarih']?></small>
                              <?=$r['username']?>
                            </a>
                            <?=$r['id'] . ' - ' . $r['message']?>
                          </p>
                        </div>
                        <!-- /.item -->
                <?php
                        }
                }*/
                ?>
                
          
            </div>
            <!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" name="message" placeholder="Mesajınız...">

                <div class="input-group-btn">
                  <button type="button" id="chat-send" class="btn btn-success"><i class="fa fa-send"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box (chat box) -->

      </section>
        <!-- /.Left col -->
       
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <audio id="music">
    <source src="<?=admin_asset_url('music/pmsound.mp3')?>">
  </audio>
<?php require view('admin/static/footer') ?>
<?php require view('admin/static/header') ?>

<div class="content-wrapper">
<section class="content-header">
  <h1>
    Footer Linkleri
    <small>Ekle/Düzenle</small>
  </h1>
</section>
<section class="content">
    
        <div class="col-md-12">
       

        <div class="row">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Footer Kutuları</a></li>
                <li><a href="#tab_2" data-toggle="tab">Footer İçerikleri</a></li>
                
                </ul>
                <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
              
                       
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                        <button type="button" class="btn btn-primary" data-toggle="modal" onClick="newFooterBox()" style="width:100px; margin-bottom:10px" ><i class="fa fa-plus-square" aria-hidden="true" style="margin-right:10px;"></i>Yeni ekle</button>
                     
                            <table class="table table-striped" id="tblFooterBox">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Başlık</th>
                                    <th>Tip</th>
                                    <th>Sıra</th>
                                    <th>Durum</th>
                                    <th style="width: 60px">İşlemler</th>
                                </tr>
                                
                                <?php 
                                    if ( $query_footer_box->rowCount() ){
                                        foreach($query_footer_box as $row_box):  ?>
                                    <tr>
                                        <td><?=$row_box['id']?></td>
                                        <td><?=$row_box['title'] == "" ? 'NULL' : $row_box['title']?></td>
                                        <td><?=$row_box['type'] == "link" ? 'Link' : 'Yazı/Resim'?></td>
                                        <td><?=$row_box['ranking']?></td>
                                        <!--<td><?=$row_box['statu'] == "1" ? '<span id="spn'. $row_box['id'] . '" style="color:#00a65a;font-weight:bold">Aktif</span>' : '<span id="spn'. $row_box['id'] . '" style="color:#ff6961;font-weight:bold">Pasif</span>' ?></td>-->
                                        <td><input type="checkbox" data-toggle="toggle" data-on="Aktif" data-off="Pasif"></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li id="<?=$row_box['id']?>" class="footerBoxUpdate"><a href="#">Güncelle</a></li>
                                                    <li id="<?=$row_box['id']?>" class="<?=$row_box['statu'] == '1' ? 'footerBoxPassive' : 'footerBoxActive'?>"><a href="#"><?=$row_box['statu'] == '1' ? 'Pasif et' : 'Aktif et'?></a></li>
                                                    <li id="<?=$row_box['id']?>" class="footerBoxDelete"><a href="#">Sil</a></li>
                                                </ul>
                                            </div>
                                        </td>

                                  </tr>
                                <?php endforeach; }else { ?>
                                    Görüntülenecek veri yok
                                <?php } ?>

                            </table>
                        </div>
                    <!-- /.box-body -->
                   
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    Footer içerikleri
                </div>
               
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
           

            </div>
            
        
</section>
</div>
    <div class="modal fade" id="newFooterBoxModal" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Yeni footer kutusu</h4>
        </div>
            <form action="<?=admin_ajax_url('footer.newbox')?>" id="frmFooterBoxSave" name='form' role="form" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="control-label">Başlık:</label>
                        <input type="text" class="form-control" name="title" >
                    </div>
                    <div class="form-group">
                        <label>Kutu tipi</label>
                        <select class="form-control" id="type" name="type">
                            <option value="link">Link</option>
                            <option value="text">Yazı/Resim</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>
                        <input type="radio" name="rbStatu" class="minimal" value="1" checked>  Aktif
                        </label>
                        &nbsp; &nbsp;
                        <label>
                        <input type="radio" name="rbStatu" class="minimal" value="2">  Pasif
                        </label>
                    
                    </div>
                    <div class="form-group">
                        <label for="ranking" class="control-label">Sıra:</label>
                        <input type="text" class="form-control" name="ranking">
                        <small>Footer da kaçıncı sırada olduğunu belirler. Boş bırakırsanız default olarak 1 değeri kayıt edilir</small>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <img src="<?=asset_url('img/meta/load.gif')?>" class="overlay" width="26" style="float:left;display:none" alt="">
                    <button type="button" class="btn btn-default" data-dismiss="modal">İptal</button>
                    <button type="submit" value="1" type="button" class="btn btn-primary">Kaydet</button>
                </div>
                
            </form>
           
        </div>
    </div>
    </div>
    <script>
        function newFooterBox(){
            $('#newFooterBoxModal').modal('show');
        }

    </script>
<?php require view('admin/static/footer') ?>
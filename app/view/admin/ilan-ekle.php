<?php require view('admin/static/header') ?>

<div class="content-wrapper">
<section class="content-header">
  <h1>
    Yorum Listesi
    <small>Yorumlar</small>
  </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Yorum</h3>
                </div>
                 <div class="box" style="border:none">
        
        <!-- /.box-header -->
      <div class="box-body">
          <table id="list" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Bağlantılı Makale</th>
              <th>Kullanıcı Adı</th>
              <th>Yorum</th>
              <th>Mail</th>
              <th>Tarih</th>
              <th>Onay</th>
            </tr>
            </thead>
            <tbody>
          
              
                  <tr>
                    <td>1</td>
                    <td>
                    <a href="?page=makale-ekle&url=>">asdasd</a></td>
                    <td>asd</td>
                    <td>sad</td>
                    <td>sad</td>
                    <td>asd</td>
                    <td> asdad</td>
                   </tr>


            </tbody>
            <tfoot>
            <tr>
              <th>#</th>
              <th>Bağlantılı Makale</th>
              <th>Kullanıcı Adı</th>
              <th>Yorum</th>
              <th>Mail</th>
              <th>Tarih</th>
              <th>Onay</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
                
            </div>





        </div>
        
    </div>
</section>
</div>

<?php require view('admin/static/footer') ?>
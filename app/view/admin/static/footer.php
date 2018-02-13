<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.11
    </div>
    <p>Made in <i class="flag-icon flag-icon-tr"></i> with <i class="fa fa-heart" id="heart-icon" style="color: #cc2e38"></i> <strong> Copyright &copy; 2017 <a href="http://ahmetozfen.com">Ahmet Özfen</a>.</strong> All rights
    reserved.
  </footer>
<!-- jQuery 2.2.3 -->
<script src="<?=admin_asset_url('plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
  var admin_ajax_url = '<?php echo admin_ajax_url() ?>';
  var session_id = '<?php echo session('user_id') ?>';
  var chat_active = false;
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=admin_asset_url('bootstrap/js/bootstrap.min.js')?>"></script>

<script src="<?=admin_asset_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<script src="<?=admin_asset_url('plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<script src="<?=admin_asset_url('js/jquery.form.min.js')?>"></script>
<script src="<?=admin_asset_url('js/main.js')?>"></script>
<script src="<?=admin_asset_url('plugins/fastclick/fastclick.js')?>"></script>



<script src="<?=admin_asset_url('dist/js/pages/dashboard.js')?>"></script>
<script src="<?=admin_asset_url('dist/js/app.min.js')?>"></script>

<script src="<?=admin_asset_url('plugins/ckeditor/ckeditor.js')?>"></script>
<script src="<?=admin_asset_url('plugins/iCheck/icheck.min.js')?>"></script>
<script src="<?=admin_asset_url('plugins/select2/select2.full.min.js')?>"></script>
<script src="<?=admin_asset_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=admin_asset_url('plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>






<script >


    $(".select2").select2();
     
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

   
    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    

    $("#list").DataTable();
    $("#cop").DataTable();
  </script>
</body>
</html>
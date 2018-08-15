<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.11
    </div>
    <p>Made in <i class="flag-icon flag-icon-tr"></i> with <i class="fa fa-heart" id="heart-icon" style="color: #cc2e38"></i> <strong> Copyright &copy; 2017 <a href="http://ahmetozfen.com">Ahmet Özfen</a>.</strong> All rights
    reserved.
  </footer>
<script>
  var admin_ajax_url = '<?php echo admin_ajax_url() ?>';
  var session_id = '<?php echo session('user_id') ?>';
  var chat_active = false;
</script>

<?php
  
  foreach ($admin['files']['js'] as $key => $value) {
     echo $value;
  }
 
 ?>



<script >
  $.widget.bridge('uibutton', $.ui.button);


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
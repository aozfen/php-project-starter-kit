<?php
 $query_footer_box = $db->query("SELECT * FROM tbl_footer_box order by ranking ", PDO::FETCH_ASSOC);
 
require view('admin/footer-linkleri');
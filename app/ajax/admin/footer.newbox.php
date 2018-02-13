<?php
require 'include.config.php';
if(session('login')){
    $ranking = post('ranking');
    if (!is_numeric($ranking))
        $ranking = 1;
    
            
        $query = $db->prepare("INSERT INTO tbl_footer_box SET
        title = ?,   
        type = ?,
        statu = ?,
        ranking = ?
        ");
        $insert = $query->execute(array(
             post('title'), post('type'), post('rbStatu'), $ranking
        ));
        if ( $insert ){
            $snc['type']= 'success';
        }else{
            $snc['type']= 'error';
           
        }
       
}



echo json_encode($snc);
<?php
require 'include.config.php';
if(session('login')){
    if(!post('id')){
        echo 'NON';
    }else{
        $status = post('status');
        if(isset($status)){
            $setStatu = 0;
            if($status == 'passive')  $setStatu = 2;
            else if ($status == 'active')  $setStatu = 1;
            else   $setStatu = 1;

            $query = $db->prepare("UPDATE tbl_footer_box SET
            statu = :setStatu
            WHERE id = :id");
            $update = $query->execute(array(
                 "setStatu" => $setStatu,
                 "id" => post('id')
            ));
            if ( $update ) echo 'success';
            else echo 'error';
            
        }  
    }
}


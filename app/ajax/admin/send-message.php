<?php
require 'include.config.php';
if(session('login')){
    if(post('userID') || post('message')){
        $tarih = date("d.m.Y");
        $query = $db->prepare("INSERT INTO tbl_message SET
        gonderen_id = ?,   
        message = ?,
        tarih = ?
        ");
        $insert = $query->execute(array(
             post('userID'), post('message'), $tarih
        ));
        if ( $insert ){
            echo "success";
        }else{
            echo "error";
        }
    }
}
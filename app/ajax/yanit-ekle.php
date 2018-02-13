<?php

require '../system/config.php';
require '../classes/class.basicdb.php';
$db = new basicdb($config['db']['host'],$config['db']['name'],$config['db']['user'],$config['db']['pass']);
$_postId   = htmlspecialchars($_POST['postId']);
$_yorumId  = htmlspecialchars($_POST['yorumId']);
$_yorum    = htmlspecialchars(trim($_POST['txtYorum']));
$_ad       = htmlspecialchars($_POST['txtAd']);
$_mail     = htmlspecialchars($_POST['txtMail']);
$_website  = htmlspecialchars($_POST['txtWebSite']);
$_cinsiyet = htmlspecialchars($_POST['cinsiyet']);



if(isset($_POST) && $_SERVER["REQUEST_METHOD"] == 'POST'){
    if(empty($_yorum)){
        $snc['id'] = $_yorumId;
        $snc['yorum']= true;
        $snc['info']= "Bu alan boş geçilemez";
    }else{
        if (empty($_ad)) {
            $snc['ad']= true;
            $snc['info']= "Bu alan boş geçilemez";
        }else{
            if(empty($_mail)){
                $snc['mail']= true;
                $snc['info']= "Bu alan boş geçilemez"; 
            }else{
                if(filter_var($_mail, FILTER_VALIDATE_EMAIL)){
                    if($_cinsiyet == 'e'){
                            $random = array(
                                "assets/img/avatars/avatar1.png",
                                "assets/img/avatars/avatar3.png",
                                "assets/img/avatars/avatar5.png",
                                "assets/img/avatars/avatar7.png",
                                "assets/img/avatars/avatar9.png",
                                "assets/img/avatars/avatar11.png",
                                "assets/img/avatars/avatar13.png",
                                "assets/img/avatars/avatar15.png",
                                "assets/img/avatars/avatar17.png"
                                );
                            $_avatar = $random[rand(0,8)];
                    }else if($_cinsiyet == 'k'){
                            $random = array(
                                "assets/img/avatars/avatar2.png",
                                "assets/img/avatars/avatar4.png",
                                "assets/img/avatars/avatar6.png",
                                "assets/img/avatars/avatar8.png",
                                "assets/img/avatars/avatar10.png",
                                "assets/img/avatars/avatar12.png",
                                "assets/img/avatars/avatar14.png",
                                "assets/img/avatars/avatar16.png",
                                "assets/img/avatars/avatar18.png"
                                );
                            $_avatar = $random[rand(0,8)];
                    }

                    date_default_timezone_set('Europe/Istanbul');
                    $_tarih = date("Y-m-d H:i:s");

                    if(@$_SESSION['login'])
                        $_kullanici_id = $_SESSION['id'];
                    else 
                        $_kullanici_id = 0;

                    $query = $db->insert('tbl_yorumlar')
                        ->set(array(
                             'post_id'       => $_postId,
                             'yorum_id'      => $_yorumId,
                             'kullanici_adi' => $_ad,
                             'yorum'         => $_yorum,
                             'mail'          => $_mail,
                             'web_site'      => $_website,
                             'resim'         => $_avatar,
                             'tarih'         => $_tarih,
                             'onay'          => 0  

                         ));
       
                    if ( $query ){
                     $snc['success']= true;
                     $snc['info'] = "Yorum eklenmiştir, admin tarafından onaylanınca görüntülenecektir.";
                    }else{
                     $snc['error']= true;
                     $snc['info'] = "Yorum geçici bir nedenden dolayı eklenememiştir.";
                    }
                   
                }else{
                    $snc['mail']= true;
                    $snc['info']= "Uygun bir e-mail giriniz";    
                }
            }
        }
    }


 
	}else{
       $snc['error']= true;
       $snc['info'] = "Yorum geçici bir nedenden dolayı eklenememiştir.";
	}

echo json_encode($snc);
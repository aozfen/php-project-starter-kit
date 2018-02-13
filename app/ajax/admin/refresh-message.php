<?php
require 'include.config.php';
$data['error'] = null;
if(session('login')){
    if(!post('id')){
        echo 'NON';
       }else{
           $SonID = post('id');
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
             On tbl_message.gonderen_id = tbl_users.id where tbl_message.id > $SonID order by tbl_message.id asc", PDO::FETCH_ASSOC);
           if ( $query->rowCount() ){
                foreach($query as $r){
                    $data['music'] = 'true';
                    if($r['gonderen_id'] == session('user_id')){
                        $data['music'] = 'false';
                    }

                     $data['success'] = 'true';
                     $data['data'] = '<div class="item" id="'.$r['id'].'">
                       <img src="'. asset_url(''.$r['profil_resmi'].'') . '" alt="user image" >
           
                       <p class="message">
                           <a href="#" class="name">
                               <small class="text-muted pull-right"><i class="fa fa-clock-o"></i>' . $r['tarih'] . '</small>
                               '.$r['username'].'
                           </a>
                           ' . $r['id'] . ' - ' . $r['message'] . '
                       </p>
                   </div>';
                }
               
           }
       }
       
}else{
    $data['error'] = 'Burayı kullanma yetkiniz yok !'; 
}
    echo json_encode($data);



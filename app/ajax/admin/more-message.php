<?php
require 'include.config.php';
sleep(2);
if(session('login')){
    if(!post('id')){
        echo 'NON';
    }else{
    
        $SonID = post('id');
        $data = array();
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
          On tbl_message.gonderen_id = tbl_users.id  WHERE tbl_message.id < '$SonID' order by tbl_message.id desc LIMIT 10", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
             foreach( $query as $row ){
                $temp = array();
                $temp['id'] = $row['id'];
                $temp['username'] = $row['username'];
                $temp['image'] = $row['profil_resmi'];
                $temp['message'] = $row['message'];
                $temp['tarih'] = $row['tarih'];
                array_push($data, $temp);
             }
             sort($data);
             foreach($data as $r){
                  echo '<div class="item" id="'.$r['id'].'">
                    <img src="'. asset_url(''.$r['image'].'') . '" alt="user image" >
        
                    <p class="message">
                        <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i>' . $r['tarih'] . '</small>
                            ' . $r['username'] . '
                        </a>
                        ' . $r['id'] . ' - ' . $r['message'] . '
                    </p>
                </div>';
             }
            
        }else{
            echo 'bos';
        }
    
    }
}


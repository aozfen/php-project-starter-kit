<?php
require 'include.config.php';
if(session('login')){
    if(!post('id')){
        echo 'NON';
    }else{
    
      
      
        $query = $db->query("SELECT * FROM tbl_footer_box ORDER BY id DESC LIMIT 1", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
             foreach( $query as $row ){ ?>
               <tr>
                                        <td><?=$row['id']?></td>
                                        <td><?=$row['title'] == "" ? 'NULL' : $row['title']?></td>
                                        <td><?=$row['type'] == "link" ? 'Link' : 'Yazı/Resim'?></td>
                                        <td><?=$row['ranking']?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li id="<?=$row['id']?>" class="guncelle"><a href="#">Güncelle</a></li>
                                                    <li id="<?=$row['id']?>"><a href="#">Pasif et</a></li>
                                                    <li id="<?=$row['id']?>"><a href="#">Sil</a></li>
                                                </ul>
                                            </div>
                                        </td>

                 </tr>
         <?php    }
        }else{
            echo 'bos';
        }
    
    }
}


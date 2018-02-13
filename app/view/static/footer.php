    
    <footer class="col-12">
        <div class=" col-9 middle">
        <?php
            $query = $db->query("SELECT * FROM tbl_footer_box where statu = 1 order by ranking  ", PDO::FETCH_ASSOC);
            if ( $query->rowCount() ):
                 foreach( $query as $row ): ?>
                      <ul class="col-2">
                        <span><?=$row['title']?></span>
                        <?php 
                            $query_footer_content = $db->query("SELECT * FROM tbl_footer_content where footer_box_id = '". $row['id'] ."' ");
                            if($query_footer_content->rowCount()):
                                foreach($query_footer_content as $row_content): 
                                  if($row['type'] == "text"){ ?>

                                    <a class="img-a" href="<?=$row_content['url']?>">
                                        <img src="<?=asset_url('img/' . $row_content['image'])?>" alt="<?=$row_content['title']?>" width="120">
                                    </a>
                                    <small><?=$row_content['small_text']?></small>
                                    <p><?=$row_content['medium_text']?></p>

                                  <?php } else { ?>

                                    <li><a href="<?=$row_content['url']?>"><?=$row_content['title']?></a></li>

                                  <?php  } ?>
                                
                                
                          <?php endforeach;
                            endif; ?>
                      </ul>
           <?php endforeach; 
            endif;  ?>

        
        </div>  
    </footer>

    <script type="text/javascript" src="<?=asset_url('scripts/jquery-1.8.0.min.js');?>" ></script>
	<script type="text/javascript" src="<?=asset_url('scripts/main.js');?>" ></script>
	<script type="text/javascript" src="<?=asset_url('scripts/newWaterfall.js');?>"></script>
    <script type="text/javascript" src="<?=asset_url('scripts/preloader.js');?>"></script>
</body>
</html>
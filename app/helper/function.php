<?php

function seoUrlControl($url){
  $query = $db->query("SELECT * FROM tbl_footer_content where url='". $url ."' LIMIT 1", PDO::FETCH_ASSOC);
  if ( $query->rowCount() ){
    return 1;
  }
}

function guvenlik($s){
   //$s = htmlspecialchars(trim($s));
   return $s;
}

function timeAgo( $zaman ){
  date_default_timezone_set('Europe/Istanbul');
   //$zaman = time() - 60 * 60;
   $zaman =  strtotime($zaman);
   $zaman_farki = time() - $zaman;
   $saniye = $zaman_farki;
   $dakika = round($zaman_farki/60);
   $saat = round($zaman_farki/3600);
   $gun = round($zaman_farki/86400);
   $hafta = round($zaman_farki/604800);
   $ay = round($zaman_farki/2419200);
   $yil = round($zaman_farki/29030400);
   if( $saniye < 60 ){
      if ($saniye == 0){
         return "az önce";
      } else {
         return $saniye .' saniye önce';
      }
   } else if ( $dakika < 60 ){
      return $dakika .' dakika önce';
   } else if ( $saat < 24 ){
      return $saat.' saat önce';
   } else if ( $gun < 7 ){
      return $gun .' gün önce';
   } else if ( $hafta < 4 ){
      return $hafta.' hafta önce';
   } else if ( $ay < 12 ){
      return $ay .' ay önce';
   } else {
      return $yil.' yıl  önce';
   }
}

function dateConvert($d,$bool = true){
    

    $d   = explode ("-",$d,4);
   
    $yil = $d[0];
    $ay  = $d[1];
    $gun = $d[2];

   
    if($ay == 1)        $ay  = __('ocak');
    else if($ay == 2)   $ay  = __('subat');
    else if($ay == 3)   $ay  = __('mart');
    else if($ay == 4)   $ay  = __('nisan');
    else if($ay == 5)   $ay  = __('mayis');
    else if($ay == 6)   $ay  = __('haziran');
    else if($ay == 7)   $ay  = __('temmuz');
    else if($ay == 8)   $ay  = __('agustos');
    else if($ay == 9)   $ay  = __('eylul');
    else if($ay == 10)  $ay  = __('ekim');
    else if($ay == 11)  $ay  = __('kasim');
    else if($ay == 12)  $ay  = __('aralik');

    if($gun == 1)       $gun = 1;
    else if ($gun == 2) $gun = 2;
    else if ($gun == 3) $gun = 3;
    else if ($gun == 4) $gun = 4;
    else if ($gun == 5) $gun = 5;
    else if ($gun == 6) $gun = 6;
    else if ($gun == 7) $gun = 7;
    else if ($gun == 8) $gun = 8;
    else if ($gun == 9) $gun = 9;
    
    if($bool)
      return $ay . " " . $gun . ", " . $yil;
    else 
      return $ay . "-" . $gun;


}
<?php 


require 'include.config.php';

if(!$_SERVER['REQUEST_METHOD']=='POST'){
    $snc['type']= 'error';
    $snc['text']= 'Geçersiz method !'; 
}else{
    if(!post('username') || !post('password')){
        $snc['type']= 'error';
        $snc['text']= 'Lütfen tüm alanları doldurup tekrar deneyin'; 
    }else{
        $username = post('username');
        $password = post('password');

        $password = md5(md5($password));
        $row = $db -> select('tbl_users')
            ->where('username', $username)
            ->where('password', $password)
            ->where('rank', 1)
            ->run(true);

        if($row){
            session('login', true);
            session('username', $row['username']);
            session('user_id', $row['id']);
            session('user_image', $row['profil_resmi']);
            session('user_mevki', $row['meslek']);

           
            $snc['type']= 'success';
            $snc['text']= 'Giriş işlemi onaylandı. Yönlendiriliyorsunuz...';
    
        }else{
            $snc['type']= 'error';
            $snc['text']= 'Giriş yapamıyorsunuz. Kullanıcı adı veya şifre hatalı';
        }
    }
}





echo json_encode($snc);

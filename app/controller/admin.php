<?php

if(!url(1)){
    $_url[1] = 'index';
}

if(!file_exists(controller('admin/' . url(1)))){
    $_url[1] = 'index';
}

if(!session('login')){
    $_url[1] = 'login';
}

$admin['menu'] = [
    'index' => [
        'title' => 'Ana sayfa',
        'icon'  => 'fa-tachometer'
    ],
    '#ilan-yonetimi' => [
        'title' => 'İlan yönetimi',
        'icon'  => 'fa-road',
        'submenu' => [
            'ilan-ekle' => [
                'title' => 'İlan ekle'
            ],
            'ilan-listesi' => [
                'title' => 'İlan listesi'
            ]
        ]
    ],
    '#ayarlar' => [
        'title' => 'Site yönetimi',
        'icon'  => 'fa-cog',
        'submenu' => [
            'genel-ayarlar' => [
                'title' => 'Genel Ayarlar'
            ],
            'footer-linkleri' => [
                'title' => 'Footer linkleri'
            ]
        ]
    ]
];

require controller('admin/' . url(1));
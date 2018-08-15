<?php

class CSS_JS_FILELOADER{
    private $admin;
    private $site;
   
    public function __construct()
    {
       $this->SiteFileArrays();
       $this->AdminFileArrays();
    }

    private function CSSLink($type, $source, $pathFunction)
    {
        if($type == 'local')
            return '<link rel="stylesheet" href="' . $pathFunction($source) . '">';
        else if($type == 'remote')
            return '<link rel="stylesheet" href="' . $source . '">';
    }

    private function JSLink($type, $source, $pathFunction)
    {
        if($type == 'local')
            return '<script src="' . $pathFunction($source) . '"></script>';
        else if($type == 'remote')
            return '<script src="' . $source . '"></script>';
    }

    /**
     * @param $val => İmport edilecek dosya yolları
     * @param $fileType => CSS veya JS olduğunu belirtir
     * @param $page => İstekde bulunan sayfayı belirtir
     * @param $region => Dosyaların hangi yoldan erişileceğini belirler
     */
    public function Generator($val, $fileType, $page, $region)
    {
        if($region == 'admin') $pathFunction = 'admin_asset_url';
        else if($region == 'site') $pathFunction = 'asset_url';
        $i = 0;
        foreach ($val[$fileType] as $key => $value) {
            foreach ($value['pages'] as $keyPages => $valuePages) {
                if($valuePages == $page)
                    if($fileType == "css") $data[$i] = $this->CSSLink($value['type'], $value['source'], $pathFunction);
                    else if($fileType == "js") $data[$i] = $this->JSLink($value['type'], $value['source'], $pathFunction);
            }
            $i++;
        }
        return $data;
    }

    private function SiteGenerator($page)
    {
        $data['css'] = $this->Generator($this->site, "css", $page, 'site');
        $data['js'] = $this->Generator($this->site, "js", $page, 'site');

        return $data;
    }
    
    private function AdminGenerator($page)
    {
        $data['css'] = $this->Generator($this->admin, "css", $page, 'admin');
        $data['js'] = $this->Generator($this->admin, "js", $page, 'admin');

        return $data;
    }

	public function SiteLoad($page)
    {
        return $this->SiteGenerator($page);
    }

    public function AdminLoad($page)
    {
       return $this->AdminGenerator($page);
    }



    public function SiteFileArrays()
    {
        $this->site['css'] = [
            [
                "type" => "local",
                "source" => "dist/style.css",
                "pages" => [
                    "index"
                ]
            ],
            [
                "type" => "local",
                "source" => "dist/fonts.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "fonts/font-awesome-4.7.0/css/font-awesome.min.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "dist/preloader.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ]
        
        ];

        $this->site['js'] = [ 
            [
                "type" => "local",
                "source" => "scripts/jquery-1.8.0.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "scripts/main.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "scripts/newWaterfall.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "scripts/preloader.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
        
        ];
    }

    private function AdminFileArrays()
    {
        $this->admin['css'] = [
            [
                "type" => "local",
                "source" => "bootstrap/css/bootstrap.min.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/datatables/dataTables.bootstrap.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "fonts/font-awesome-4.7.0/css/font-awesome.min.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "remote",
                "source" => "https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "remote",
                "source" => "https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "dist/css/AdminLTE.min.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "dist/css/skins/_all-skins.min.css",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/iCheck/all.css",
                "pages" => [
                    "index"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/select2/select2.min.css",
                "pages" => [
                    "index"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/morris/morris.css",
                "pages" => [
                    "index"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/jvectormap/jquery-jvectormap-1.2.2.css",
                "pages" => [
                    "index"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/datepicker/datepicker3.css",
                "pages" => [
                    "index"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/daterangepicker/daterangepicker.css",
                "pages" => [
                    "index"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css",
                "pages" => [
                    "index"
                ]
            ],
            [
                "type" => "remote",
                "source" => "https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css",
                "pages" => [
                    "index"
                ]
            ],
         
        
        ];
           
        $this->admin['js'] = [ 
            [
                "type" => "local",
                "source" => "plugins/jQuery/jquery-2.2.3.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "remote",
                "source" => "https://code.jquery.com/ui/1.11.4/jquery-ui.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "bootstrap/js/bootstrap.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/slimScroll/jquery.slimscroll.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "js/jquery.form.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "js/main.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/fastclick/fastclick.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "dist/js/pages/dashboard.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "dist/js/app.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/ckeditor/ckeditor.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/iCheck/icheck.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/select2/select2.full.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/datatables/jquery.dataTables.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "local",
                "source" => "plugins/datatables/dataTables.bootstrap.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
            [
                "type" => "remote",
                "source" => "https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js",
                "pages" => [
                    "index",
                    "ilan-ekle"
                ]
            ],
         
        
        ];
    }
}
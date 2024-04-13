<?php

class Controller
{
    /////////////////////// Função GET
    /////////////////////// Função SET
    /////////////////////// Função Publicas
    
    function ConfigurationViewMaintenance() {
        $Maintenance = false;
        $result = $Maintenance;
        return $result;
    }
    public function Viewer(){
        $callback = '404/404';
        $header = 'component/header';
        $footer = 'component/footer';
        $loader = 'component/loader';
        $Mutant = [
            'darkMode' => [
                'url'=>'component/darkMode',
            ],
            'menuDefout' => [
                'url' => 'component/menuDefout'
            ]
        ];
        $pageDefoult = 'home';    
        $ObjetoViewer = new Viewer;
        $ObjetoViewer->viewerConfiguratrion($header,$callback,$footer,$loader,$pageDefoult,$Mutant);
    }
    public function ConfigurationHomeImage() {
        $perfil = 'image/perfil/perfil.jpg';
        $about = 'image/perfil/about.jpg';
        $portfolio = 'image/portfolio/default.png';
        $coockie = 'image/data/coockie.png';
        $loading = 'image/loading/loading.gif';
        $maintenance = 'image/maintenance/manutencao.gif';
        $result = [
            'perfil'        =>      $perfil,
            'about'         =>      $about,
            'portfolio'     =>      $portfolio,
            'coockie'       =>      $coockie,
            'loading'       =>      $loading,
            'maintenance'   =>      $maintenance,
        ];
        return $result;
    }
}
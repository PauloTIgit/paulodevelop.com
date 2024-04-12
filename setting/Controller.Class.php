<?php

class Controller
{
    /////////////////////// Função GET
    /////////////////////// Função SET
    /////////////////////// Função Publicas
    public function Viewer(){
        $callback = '404/404';
        $header = 'component/header';
        $footer = 'component/footer';
        $loader = 'component/loader';
        $pageDefoult = 'home';    
        $ObjetoViewer = new Viewer;
        $ObjetoViewer->viewerConfiguratrion($header,$callback,$footer,$loader,$pageDefoult);
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

    function ConfigurationViewMaintenance() {
        $Maintenance = false;
        $result = $Maintenance;
        return $result;
    }
}
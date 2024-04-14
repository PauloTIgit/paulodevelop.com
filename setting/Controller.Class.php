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
        $callback = 'error/404';
        $header = 'component/header';
        $footer = 'component/footer';
        $loader = 'component/loader';
        $pageDefoult = 'home';
        $mutant = [
            // 'component/darkMode.View.php', 
        ];
        $ObjetoViewer = new Viewer;
        $ObjetoViewer->viewerSettings($header,$callback,$footer,$loader,$pageDefoult,$mutant);

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
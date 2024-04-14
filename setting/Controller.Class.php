<?php

class Controller
{
    private $server;
    private $port;
    private $maintenance;
    private $header;
    private $callback;
    private $footer;
    private $loader;
    private $pageDefoult;
    /////////////////////// FUNCTION GET
        private function getServer()
        {
            return $this->server;
        }
        private function getPort()
        {
            return $this->port;
        }
        public function getMaintenance()
        {
            return $this->maintenance;
        }
        public function getHeader(){
            return $this->header;
        }
        public function getCallback()
        {
            return $this->callback;
        }
        public function getFooter(){
            return $this->footer;
        }
        public function getLoader(){
            return $this->loader;
        }
        public  function getPageDefoult()
        {
            return $this->pageDefoult;
        }
    /////////////////////// Função SET
        private function setServer($server)
        {   
            $this->server = $server;
        }
        private function setProt($port)
        {
            $this->port = $port;
        }
        public function setMaintenance($maintenance)
        {
            $this->maintenance = $maintenance;
        }
        public function setHeader($header)
        {
            $this->header = $header;
        }
        public function setCallback($callback)
        {
            $this->callback = $callback;
        }
        public function setFooter($footer)
        {
            $this->footer = $footer;
        }
        public function setLoader($loader){
            $this->loader = $loader;
        }
        public  function setPageDefoult($pageDefoult)
        {
            $this->pageDefoult = $pageDefoult;
        }
    /////////////////////// METHOD = SETTINGS
        /////////////////////// SETTINGS
            public function settingServer($server, $port, $maintenance)
            {
                $this->setServer($server);
                $this->setProt($port);
                $this->setMaintenance($maintenance);
            }
            public function settingPages(
                $callback,
                $header,
                $footer,
                $loader,
                $pageDefoult 
            ){
                $this->callback = $callback;
                $this->header = $header;
                $this->footer = $footer;
                $this->loader = $loader;
                $this->pageDefoult = $pageDefoult;                
            }
            public function settingMaintenance() {
                $Maintenance = $this->getMaintenance();
                $result = $Maintenance;
                return $result;
            }
            public function settingImage() {
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
        /////////////////////// METHOD
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

            public function cleanCockiesServer()
            {   
                $server = $this->getServer();
                $port = $this->getPort();
                $ObjCockieServer  = new ClearCacheServer($server,$port);
                $ClearCacheServer = $ObjCockieServer->clearCache();
                return $ClearCacheServer;
            }
}
<?php

class Controller
{
    private $server;
    private $port;

    /////////////////////// FUNCTION GET
        private function getServer()
        {
            return $this->server;
        }
        private function getPort()
        {
            return $this->port;
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
    /////////////////////// METHOD = SETTINGS
        /////////////////////// SETTING
            public function settingViewers($dataSettings)
            {
                $ObjViewer = new Viewer;
                $ObjViewer->ControllerViewer($dataSettings);
            }
            public function settingServer($server, $port, $maintenance)
            {
                $this->setServer($server);
                $this->setProt($port);
                $this->setMaintenance($maintenance);
            }
            public function settingMaintenance() 
            {
                $Maintenance = $this->getMaintenance();
                $result = $Maintenance;
                return $result;
            }
            public function settingImage() 
            {
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
            public function gerarLog($result,$local, $mensagem) 
            {
                if($result != '200'){
                    $logMessage =  "Error 403: " . $local . " - ". date("Y-m-d H:i:s") . "\n" . $mensagem ."\n" ;
                    $logPath = "log/controller/error_log_". $local . date("Y-m-d") . ".txt";
                    file_put_contents($logPath, $logMessage, FILE_APPEND);
                    echo 'Verifique o log';
                    die();
                }
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
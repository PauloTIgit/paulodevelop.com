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
                $portfolio = 'image/portfolio/makeflix.png';
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
            public function settingEmail($nome,$email,$celular,$orcamento,$assunto,$headerEmail)
            {
                try {
                    $nome = $nome;
                    $email = $email;
                    $celular = $celular;
                    $orcamento = $orcamento;
                    $assunto = $assunto;
                    $headerEmail = $headerEmail;
                    $to =  'pauloferreira@paulodevelop.com.br';

                    $mensagemEmail = "
                        <html>
                            <head>
                                <title>Contato do Portfolio</title>
                            </head>
                            <body>
                                <p><b>Nome:</b> $nome</p>
                                <p><b>E-mail:</b> $email</p>
                                <p><b>Celular:</b> $celular</p>
                                <p><b>Orçamento:</b> $orcamento</p>
                                <p><b>Assunto:</b> $assunto</p>
                                <p><b>Mensagem:</b></p>
                                <p>$headerEmail</p>
                            </body>
                        </html>
                    ";
                    
                    $headers ="MIME-Version: 1.0" . "\r\n";
                    $headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .='From: <pauloferreiradevs@gmail.com>' . "\r\n";

                    if(mail($to, $assunto, $mensagemEmail, $headers)){
                        $result = '200';
                    }else{
                        $result = '500';
                    }
                    
                } catch (\Throwable $th) {
                    $result = '403';
                }
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
        /////////////////////// CONTROLLERS
            // public function ControllerEmail()
            // {
                
            // }
            
}
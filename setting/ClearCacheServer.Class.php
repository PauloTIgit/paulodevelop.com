<?php

class ClearCacheServer {
    protected $serverAddress;
    protected $serverPort;

    /////////////////////// GET
        private function getServerAddress($serverAddress)
        {
            return $this->serverAddress;
        }
        private function getServerPort($serverPort)
        {
            return $this->serverPort;
        }
    /////////////////////// SET
        private function setServerAddress($serverAddress)
        {   
            $this->serverAddress = $serverAddress;
        }
        private function setServerPort($serverPort)
        {
            $this->serverPort = $serverPort;
        }


    public function __construct($address, $port) {
        $this->setServerAddress($address);
        $this->setServerPort($port);
    }

    public function clearCache() {
        if(!extension_loaded('sockets')){
            echo " 
                    <section class='pfWeb-erro' id='view'>
                        <p class='infErro405'></p>
                        <p class='message405'></p>
                    </section>
                ";
            
        }
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($socket === false) {
            // Tratar erro de criação do socket
            return false;
        }

        $result = socket_connect($socket, $this->serverAddress, $this->serverPort);
        if ($result === false) {
            // Tratar erro de conexão
            socket_close($socket);
            return false;
        }

        // Envia comando para limpar o cache
        $command = "flush_all\r\n";
        socket_write($socket, $command, strlen($command));

        // Fecha a conexão
        socket_close($socket);

        return true;
    }
}

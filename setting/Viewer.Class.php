<?php

/*******************************
 * ...............................
 * |       SITEMA DE VIEW        |
 * |            V.1              |
 * |.............................|
 * autor - Paulo Fernando Ferreira Pires
 * creation - 11/04/2024 at 20:59
 * 
 * Este sistem foi pensado em fornecer de maneira rapida as tela e paginas do projeto,
 * usando as rotas na url.
 * 
 * Como usar o objeto em 3 passos:
 *  1. Adcione esse arquivo a seu projeto, recomendo usado um outoload, pois existem
 *      outros aquivos para incluir, ficara mais facil de usar.
 *  2. Chame o metodo no index do projeto, Ex.: $ObjViewer = new Viewer();
 *  3. Aa chamar o Objeto informe as configurações iniciais, informando o cabeçalho,
 *      corpo inicial, tela de erro 404, rodapé, e uma tela de caregamento.
 *  
 * Pronto a rota esta funcionando.
 * 
 * */

class Viewer
{
    public $header;
    public $veiw;
    public $callback;
    public $footer;
    public $loader;
    public $viewerMutant;
    public $pageDefoult;
    /////////////////////// FUNCTION GET
        public function getHeader(){
            return $this->header;
        }
        public function getVeiw()
        {
            return $this->veiw;
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
        public function getViewerMutant() {
            return $this->viewerMutant;
        }
        public  function getPageDefoult()
        {
            return $this->pageDefoult;
        }
    /////////////////////// FUNCTION SET
        public function setHeader($header)
        {
            $this->header = $header;
        }
        public function setVeiw($veiw)
        {
            $this->veiw = $veiw;
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
        public function setViewerMutant($viewerMutant){
            $string = '';
            foreach ($viewerMutant as $key => $value) {
                if (is_array($value)) {
                    $string .= "$key: " . implode(", ", $value) . ", ";
                } else {
                    $string .= "$key: $value, ";
                }
            }

            $viewerMutant = rtrim($string, ", ");
            $this->viewerMutant = $viewerMutant;
        }
        public function setPageDefoult($pageDefoult)
        {
            $this->pageDefoult = $pageDefoult;
        }
    /////////////////////// METHOD = FUNCTION
        public function viewerScreen(){
            if (strpos($_SERVER["REQUEST_URI"], '?') !== false){
                $param_parts = explode('=', explode('?', $_SERVER["REQUEST_URI"])[1]);
                $callPage = $param_parts[0];// Atribuir o valor da chamada a page
                $page = $param_parts[1];// Atribui o valor da page
                if(file_exists('view/'.$callPage."/".$page.".View.php")){
                    $view = $this->setVeiw($callPage.'/'.$page);
                    $this->setCallback('404/404');
                    $this->viewerWeb();
                }else
                {
                    echo 'Não existe pagina em view/'.$callPage.'/'.$page.'.View.php';
                }
                
            }
            if(strpos($_SERVER['REQUEST_URI'], '?') == false){
                $this->setVeiw($this->getPageDefoult());
                $this->viewerWeb();
            }
        }
        public function viewerConfiguratrion($header,$callback,$footer,$loader,$pageDefoult,$Mutant)
        {
            $this->setLoader($loader);
            $this->setCallback($callback);
            $this->setPageDefoult($pageDefoult);
            $this->setHeader($header);
            $this->setFooter($footer);
            $this->viewerScreen();
            $this->setViewerMutant($Mutant);
        }
        public function viewerMutant(){
            $Mutant = $this->getViewerMutant();
            $string = "theMutantView: 1, darkMode: mutantVewer: component/darkMode";
            $parts = explode(", ", $string);// Divide a string
            $reversedArray = [];
            foreach ($parts as $part) {
                $pair = explode(": ", $part, 2);// Divide cada parte em chave
                if (count($pair) === 2) {
                    $key = trim($pair[0]);// Remove espaços em branco
                    $value = trim($pair[1]);
                    if (is_numeric($value)) {
                        $value = (int)$value;// Verifica se o valor é numérico e converte-o se necessário
                    }
                    $reversedArray[$key] = $value;// Adiciona o par chave-valor ao array resultante
                }// Verifica se o par chave-valor está no formato correto
            }
            print_r($reversedArray);
            die();
            if ($Mutant['theMutantView']) {
                $countMutant = count($Mutant);
                $Mutant = $countMutant;
                $result = $Mutant;
            }
            return $result;
        }
        public function viewerWeb() {
        // Page Defouts
            $header = $this->getHeader().'.View.php';
            $view = $this->getVeiw().'.View.php';
            $footer = $this->getFooter().'.View.php';
            $loader = $this->getLoader().'.View.php';
            $maintenance = 'component/maintenance'.'.View.php';
            $Controller = new Controller;
            $controllerConfigurationMaintenance = $Controller->ConfigurationViewMaintenance();;
        // Pages Mutants
            $Mutant = $this->viewerMutant();

        // Pages Sinkers
            $menuDesktop = 'component/menuDesktop';
            $menuMobile = 'component/menuMobile';

            
            if($controllerConfigurationMaintenance == true){
                include 'view/'.$header;
                include 'view/'.$maintenance;
                die();
            }
            die();
            include 'view/'.$loader;
            include 'view/'.$header;
            include 'view/'.$menuDesktop;
            // for ($i=0; $i <  ; $i++) { 
                
            // }
            include 'view/'.$view;
            include 'view/'.$menuMobile;
            include 'view/'.$footer;
    }
}

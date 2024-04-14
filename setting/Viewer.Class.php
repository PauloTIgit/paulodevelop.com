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

class Viewer extends Controller
{
    private $veiw;
    private $callback;
    private $footer;
    private $loader;
    private $mutant;
    private $pageDefoult;
    /////////////////////// FUNCTION GET
        private function getVeiw()
        {
            return $this->veiw;
        }
        private function getMutant() {
            return $this->mutant;
        }
    /////////////////////// FUNCTION SET
        private function setVeiw($veiw)
        {
            $this->veiw = $veiw;
        }
        private function setMutant($mutant){
            $string = '';
            if($mutant == []){
                $mutant = false;
            }
            if ($mutant != []) {
                foreach ($mutant as $key => $value) {
                    if (is_array($value)) {
                        $string .= "$key: " . implode(", ", $value) . ", ";
                    } else {
                        $string .= "$key: $value, ";
                    }
                }
                $mutant = rtrim($string, ", ");
            }
            $this->mutant = $mutant;
        }
    /////////////////////// METHOD = FUNCTION
        public function viewerScreen(){
            if (strpos($_SERVER["REQUEST_URI"], '?') !== false){
                $param_parts = explode('=', explode('?', $_SERVER["REQUEST_URI"])[1]);
                $callPage = $param_parts[0];// Atribuir o valor da chamada a page
                $page = $param_parts[1];// Atribui o valor da page
                $this->setVeiw($callPage.'/'.$page);
                $this->setCallback('404/404');
                $this->viewerWeb();   
            }
            if(strpos($_SERVER['REQUEST_URI'], '?') == false){
                $this->setVeiw($this->getPageDefoult());
                $this->viewerWeb();
            }
        }
        public function viewerSettings($header,$callback,$footer,$loader,$pageDefoult,$mutant)
        {
            $this->setLoader($loader);
            $this->setCallback($callback);
            $this->setPageDefoult($pageDefoult);
            $this->setHeader($header);
            $this->setFooter($footer);
            if($mutant != []){
                $this->setMutant($mutant);
            }else {
                $this->setMutant(false);
            }
            $this->viewerScreen();
        }
        public function viewerMutant(){
            $mutant = $this->getMutant();
            if ($mutant != '' && $mutant != null){
                if ($mutant == false) {
                    $mutant = false;
                }
                if($mutant){
                    $string = $mutant;
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
                        $mutant = $reversedArray;
                    }
                }
            }
            return $mutant;
        }
        public function viewerWeb() {
            // Page Defouts
                $header = $this->getHeader().'.View.php';
                $view = $this->getVeiw().'.View.php';
                $footer = $this->getFooter().'.View.php';
                $loader = $this->getLoader().'.View.php';
                $maintenance = $this->settingMaintenance();
            // Pages Mutants
                $mutant = $this->viewerMutant();
            // Pages Sinkers
                $menuDesktop = 'component/menuDesktop.View.php';
                $menuMobile = 'component/menuMobile.View.php';
                
                if($maintenance == true){
                    include 'view/'.$header;
                    include 'view/'.$maintenance;
                    die();
                }
                include 'view/'.$loader;
                include 'view/'.$header;
                include 'view/'.$menuDesktop;
                if(!file_exists('view/'.$view)){
                    $veiw = getCallback();
                }
                include 'view/'.$view;
                if(is_array($mutant)){
                    $arrayMutant = count($mutant);
                    for ($i=0; $i < $arrayMutant ; $i++) { 
                        $viewerUrl = 'view/'.$mutant[$i];
                        if(file_exists($viewerUrl)){
                            include $viewerUrl;
                        }else{
                            echo " 
                                <section class='pfWeb-erro' id='view'>
                                    <p class='infErro500'></p>
                                    <p>O Visualizador <span>".$mutant[$i]."'</span>, não foi encontrado na <span>./view/<span>!</p>
                                </section>
                            ";
                        }
                    }
                }
                include 'view/'.$menuMobile;
                include 'view/'.$footer;
                die();
        }
}

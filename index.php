<?php

/*******************************
 * ...............................
 * |         SITEMA PfWeb        |
 * |            V.1              |
 * |.............................|
 * autor - Paulo Fernando Ferreira Pires
 * creation - 11/04/2024 at 21:22
 * 
 * 
 * O sistema e criado para pessoas que trabalham ou estuda programação e quer
 *  conquistar sua primeira vou fazer um projeto web ficado em portfolios 
 *  apresentações e muito mais.
 * Pormais que seja para iniciantes e importante você ter a base do php e uma 
 *  boa logica de programação para entender e conseguir usar tudo que o sistema tem a
 *  oferecer.
 * 
 *  Para usar o sistema precisa ter no minimo o XAMP ou LAMP ou WAMP uma
 *   IDE
 * 
 * Para começar no terminal, confira para que realmente esteja no projeto PfWeb rode 
 *  o seginte comando: php -S localhost:1456 agora vai no seu navegado e acesse o link
 *  http://localhost:1456 pronto agora só correr pro abraço.
 * 
 */


date_default_timezone_set('America/Sao_Paulo');
    include 'autoload.Class.php';
    
    // Objeto para configu
    // $ObjViewer = new Viewer('header','home','footer','404/404','loader');
    $Controller = new Controller();
    $Controller->Viewer();

    
    
    
    
    

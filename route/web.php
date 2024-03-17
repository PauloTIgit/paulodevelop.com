<?php
    ########################################
    ######### SISTEMA DE ROTAS WEB #########
    ########################################
//versão = 1.0

if(isset($_GET['pagina'])):
    $web = trim(strip_tags(filter_input(INPUT_GET , 'pagina', FILTER_SANITIZE_URL))); // Seguranção para SQL Inject
else:
    $web = 'home';
endif;

function RouteWeb($web) {
    if(isset($web)){
        if(isset($_GET['pagina'])){
            $web = trim(strip_tags(filter_input(INPUT_GET, 'pagina',FILTER_SANITIZE_URL)));
        }
        if(!file_exists('view/'.$web.'.php')){
            $web = '404/404';
        }
    }

    include'view/component/header.php';
    // include'view/component/loading.php';
    include'view/component/menu.php';
    include'view/'    .$web.    '.php';
    include'view/component/footer.php';
}
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-F9Q76Z61G1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-F9Q76Z61G1');
        </script>
        <title>Paulo Ferreira</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="src/app.css" rel="stylesheet"> <!-- ROOT -->
        <link href="src/modeThemes.css" rel="stylesheet"> <!-- DARKMODE -->
        <link href="src/goUp.css" rel="stylesheet"> <!-- Go UP -->
        <link href="src/pfweb.css" rel="stylesheet"> <!-- PFWEB -->
        <link rel="stylesheet" href="view/css/home.css">
        <link rel="stylesheet" href="view/css/about.css">
        <link rel="stylesheet" href="view/css/process.css">
        <link rel="stylesheet" href="view/css/portfolio.css">
        <link rel="stylesheet" href="view/css/call.css">
        <link rel="stylesheet" href="view/css/blog.css">
        <link rel="stylesheet" href="view/css/services.css">
        <link rel="stylesheet" href="view/css/contact.css">
        <link rel="stylesheet" href="view/css/footer.css">
        <link rel="stylesheet" href="src/mobile.css"> <!-- Resposividade -->
    </head>
    <body>
        <script src="https://kit.fontawesome.com/0b3e36b549.js" crossorigin="anonymous"></script><!-- ICON -->
        <section class="container-mode" id="container_mode">
            <button onclick="setDarkMode()" id='btnMode' class="default">
                <i class="fa" aria-hidden="true" id='iconMode'></i></button>
        </section>
        <script src="src/modeThemes.btn.js"></script>
        <section class="container-btnUp" id="container_btnUp">
            <button onclick="goTop()" class="btnUp" id="btnUp">
                <i class="fa fa-angle-up" aria-hidden="true" id="angle_up"></i>
            </button>
        </section>
        <script src="src/goUp.btn.js"></script>
<style>
    .container-menu-mobile {
        z-index: 1;
        height: 100vh;
        position: absolute;
        width: 10rem;
    }
    
    nav .navbar-menu-mobile{
        position: fixed;
        background-color: #ffffff; /* Cor de fundo do menu */
        box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1); /* Sombra para destacar o menu da tela */
    }
    .navbar-menu-mobile {
        display: flex;
        justify-content: space-around; /* Distribui os itens igualmente na linha */
        padding: 10px 0; /* Espaçamento interno do menu */
    }

    .navbar-menu-mobile li {
        list-style: none; /* Remove os pontos padrão da lista */
    }

    .navbar-menu-mobile li a {
        display: block;
        text-align: center;
        text-decoration: none;
        color: #000000; /* Cor dos ícones */
        padding: 5px; /* Espaçamento interno dos ícones */
    }

    .navbar-menu-mobile li a:hover {
        color: #ff0000; /* Cor dos ícones ao passar o mouse */
    }
</style>
<section class="container-menu-mobile" id="menu-mobile">
    <nav>
        <ul class="navbar-menu-mobile">
            <li>
                <a class="link" href="#home">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="link" href="#about">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="link" href="#process">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="link" href="#my-project">
                    <i class="fa fa-book" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="link" href="#services">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="link" href="#contact">
                    <i class="fa fa-id-badge" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </nav>
</section>
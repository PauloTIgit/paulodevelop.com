<!------------------------------------------------ FOOTER -->
<style>
    .container-footer{
        width: 100%;
        background: var(--cor-qua-800);
        height: 280px;
        display: flex;
        justify-content: center;
    }

    .container-footer .content-footer{
        width: 80%;
        height: 80%;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        justify-content: space-between;
    }

    .content-footer .logo-footer .logo{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .logo-footer .logo img{
        width: 46px;
        padding-bottom: 15px;
    }

    .logo-footer .logo p{
        display: flex;
        justify-content: center;
        align-items: center;
        padding-left: .5rem;
        font-family: var(--font-montserra);
        font-size: 1rem;
        color: var(--cor-grafit-50);

    }

    .links-footer .menu-footer .navbar{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .links-footer .menu-footer .navbar .link{
        color: #fff;
        border-radius: 0;
        border-bottom: solid 2px #ffffff00;
        transition: border-bottom 0.3s ease;
    }

    .links-footer .menu-footer .navbar .link:hover{
        background: none;
        border-bottom: solid 2px var(--cor-pry-800);
    }

    .copyright-footer{
        font-family: var(--font-montserra);
        font-size: .9rem;
        font-weight: 400;
        color: #fff;
        text-align: center;
    }
</style>
<section class="container-footer" id="footer">
    <div class="content-footer">
        <div class="logo-footer">
            <div class="logo">
                <img src="image/icon/logo.png" alt="logo do site">
                <p>Paulo Ferreira</p>
            </div>
        </div>
        <div class="links-footer">
            <nav class="menu-footer">
                <ul class="navbar">
                    <li><a class="link" href="#home">lar</a></li>
                    <li><a class="link" href="#about">sobre</a></li>
                    <li><a class="link" href="#process">processo</a></li>
                    <li><a class="link" href="#my-project">portfólio</a></li>
                    <!-- <li><a class="link" href="#blog">blog</a></li> -->
                    <li><a class="link" href="#services">serviço</a></li>
                    <li><a class="link" href="#contact">contato</a></li>
                </ul>
            </nav>
        </div>
        <div class="copyright-footer">
            <p>Copyright © <?php echo date('Y') ?> Paulo Ferreira.</p> 
            <p>Todos os direitos reservados.</p>
        </div>
    </div>
</section>

    </body>
    <script src="src/app.js"></script>
    <script src="https://kit.fontawesome.com/0b3e36b549.js" crossorigin="anonymous"></script><!-- ICON -->
</html>

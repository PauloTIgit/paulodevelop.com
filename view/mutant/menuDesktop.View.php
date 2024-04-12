<style>
    .container-menu{
        z-index: 1;
        position: fixed;
        display: flex;
        flex-direction: row;
        justify-content:space-around;
        height: 105px;
        width: 100%;
        background: #ffffff;
    }
    .container-logo{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
    .imagen{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    
    .imagen img{
        width: 46px;
        border-radius: 6px;
        padding: .4rem .6rem ;
        background: var(--cor-qua-800);
    }

    .slogan{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .slogan p{
        font-family: "Montserrat Alternates",sans-serif ;
        font-weight: 600;
        font-size: 1.5rem;
        padding-left: 12px;
        color: var(--cor-grafit-800);
    }

    .content-menu , .container-menu ul{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .navbar {
        list-style: none;
    }
    
    .navbar a{
        display: block;
        padding: 1rem;
        text-decoration: none;
        font-family: var(--font-montserra);
        font-weight: 600;
        color: var(--cor-grafit-800);
    }

    .navbar .link:hover{
        transition: all 5ms;
        /* border-bottom: solid 3px var(--cor-pry-800);
        color: var(--cor-grafit-800); */
        color: #ffffff;
        background: var(--cor-pry-800);
        border-radius: 4px;
    }
    
</style>
<section class="container-menu" id="menu-desktop">
    <div class="container-logo">
        <div class="imagen">
            <a href="?app=access">
                <img src="image/icon/logo.png" alt="" srcset="">
            </a>
        </div>
        <div class="slogan">
            <!-- <p>Paulo Ferreria</p> -->
        </div>
    </div>
    <nav class="content-menu">
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
</section>
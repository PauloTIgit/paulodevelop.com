<style>

    .container-menu{
        display: flex;
        flex-direction: row;
        justify-content:space-around;
        height: 105px;
    }
    .conteiner-logo{
        padding: 20px 0;
        display: flex;
        flex-direction: row;
    }
    .imagen{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    
    .imagen img{
        width: 56px;
        border-radius: 50%;
        padding: .3rem;
        background: var(--cor-pry-800);
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
        color: #47414d;
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
        color: #47414d;
    }

    .navbar .link:hover{
        transition: all 3ms;
        border-bottom: solid 3px var(--cor-pry-800);
        /* border-radius: 5px; */
        color: #3b3b3b;
    }
    
    .btn-contact a{
        border-radius: 5px;
        background: var(--cor-pry-800);
        color: #f0f0f0;
    }
    .btn-contact a:hover{
        background: #743ba5;
        color: #f0f0f0;
    }



</style>

<section class="container-menu">
    <div class="conteiner-logo">
        <div class="imagen">
            <img src="image/icon/logo.png" alt="" srcset="">
        </div>
        <div class="slogan">
            <p>Paulo Ferreria</p>
        </div>
    </div>
    <nav class="content-menu">
        <ul class="navbar">
            <li><a class="link" href="#home">home</a></li>
            <li><a class="link" href="#about">about</a></li>
            <li><a class="link" href="#process">process</a></li>
            <li><a class="link" href="#portfolio">portfolio</a></li>
            <li><a class="link" href="#blog">blog</a></li>
            <li><a class="link" href="#service">service</a></li>
            <li class="btn-contact"><a href="#contact">contact</a></li>
        </ul>
    </nav>
</section>
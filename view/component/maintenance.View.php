<style>
    .container-loader {
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        margin: 0;
        background: #ffff;
        z-index: 3; 
        overflow: hidden;
    }

    .texto-info{
        font-family:'Work Sans', sans-serif;
        font-weight: 600;
        font-size: 1.3rem;
        color: var(--cor-grafit-800);
    }
    
    .content-loader {
        width: 30%;
        height: 6px;
        border-radius: 2px;
    }
    
    .content-loader{
        width: 20rem;
        height: 20rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .content-loader img{
        overflow: hidden;
        background-position: center;
    }


</style>
<?php
    $Controller = new Controller;
    $imagens = $Controller->ConfigurationHomeImage();
    $maintenance = $imagens['maintenance'];
?>
<section class="container-loader" id="container-loader">
    <p class="texto-info">MAINTENANCE</p>
    <div class="content-loader">
        <img src="<?php echo $maintenance; ?>" alt="">
    </div>
</section>


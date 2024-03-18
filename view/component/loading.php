<style>
    .container-loader {
        position: fixed;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        margin: 0;
        background: var(--cor-seg-100);
       z-index: 3; 
    }

    .texto-info{
        font-family:'Work Sans', sans-serif;
        font-weight: 600;
        font-size: 1.3rem;
        color: var(--cor-grafit-800);
        padding-bottom: 1rem;
    }
    
    .content-loader {
        width: 30%;
        height: 6px;
        background: var(--cor-grafit-100);
        border-radius: 2px;
        overflow: hidden;
    }
    
    .loader {
        width: 0;
        height: 100%;
        background: var(--cor-pry-800);
        animation: progress 1.5s ease forwards;
    }

    @keyframes progress {
        0% {
            width: 0;
        }
        100% {
            width: 100%;
        }
    }


</style>

<section class="container-loader" id="container-loader">
    <p class="texto-info">Carregando...</p>
    <div class="content-loader">
        <div class="loader" id="loader"></div>
    </div>
</section>

<script>
    // Função para ser chamada quando o carregamento da página estiver completo
    function onPageLoaded() {
        const containerloader = document.getElementById('container-loader');
        containerloader.style.display = 'none';
    }

window.addEventListener('DOMContentLoaded', function () {
    const loader = document.getElementById('loader');
    loader.addEventListener('animationend', function () {
        // Chame a função onPageLoaded quando a animação de carregamento for concluída
        onPageLoaded();
    });

    // Simular o carregamento completado após um certo tempo
    setTimeout(function () {
        loader.style.width = '100%';
    }, 1500); // Este é o mesmo tempo definido na animação @keyframes
});

</script>
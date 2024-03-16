<style>
    .containerLoader {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        margin: 0;
        background-color: #e0e0e0;
        position: absolute;
        display: flex;
        flex-direction: column;
    }

    .texto-info{
        font-family:'Work Sans', sans-serif;
        font-weight: 600;
        font-size: 1.3rem;
        color: #727272;
        padding-bottom: 1rem;
    }

    .loader-container {
        width: 30%;
        height: 5px;
        background-color: #ffffff;
        border-radius: 2px;
        overflow: hidden;
    }

    .loader {
        width: 0;
        height: 100%;
        background-color: #646470;
        animation: progress 3s ease forwards;
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

<section class="containerLoader" id="containerLoader">
    <p class="texto-info">Carregando...</p>
    <div class="loader-container">
        <div class="loader" id="loader"></div>
    </div>
</section>

<script>
    // Função para ser chamada quando o carregamento da página estiver completo
    function onPageLoaded() {
        const containerLoader = document.getElementById('containerLoader');
        containerLoader.style.display = 'none';
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
    }, 3000); // Este é o mesmo tempo definido na animação @keyframes
});

</script>
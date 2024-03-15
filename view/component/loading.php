<style>
    .containerLoader {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f2f2f2;
    }

    .loader {
        width: 50px;
        height: 50px;
        animation: pulse 1s infinite ease-in-out;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    @keyframes pulse {
        0% {
            transform: scale(0.8);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(0.8);
        }
    }

</style>

<section class="containerLoader">
    <div id="loader" class="loader">
        <img src="imagen/home/coofe.png" alt="Caneca de cafe em formada por {}:">
    </div>
</section>

<script>
        window.addEventListener("load", function() {
        var loader = document.getElementById("loader");
        loader.style.display = "block";
        // Simula um tempo de carregamento
        // setTimeout(function() {
        //     loader.style.display = "none";
        // }, 3000); // Altere o valor do timeout para o tempo de carregamento necessário em milissegundos
    });

    window.addEventListener("beforeunload", function() {
        var loader = document.getElementById("loader");
        loader.style.display = "block";
    });
</script>
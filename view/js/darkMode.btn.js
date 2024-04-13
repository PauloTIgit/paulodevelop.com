// Verifica se o navegador suporta o localStorage
    function supportsLocalStorage() {
        try {
            return 'localStorage' in window && window['localStorage'] !== null;
        } catch (e) {
            return false;
        }
    }

// Define um valor no localStorage para indicar que o tema escuro está ativado
    function setDarkMode() {
        if (supportsLocalStorage()) {
        localStorage.setItem('darkMode', 'true');
    applyDarkMode();
        }
    }

// Remove o valor do localStorage para indicar que o tema escuro está desativado
    function setLightMode() {
        if (supportsLocalStorage()) {
        localStorage.removeItem('darkMode');
    removeDarkMode();
        }
    }

// Aplica o tema escuro adicionando uma classe ao <body>
        function applyDarkMode() {
            document.body.classList.add('dark-mode');
    }

// Remove o tema escuro removendo a classe do <body>
            function removeDarkMode() {
                document.body.classList.remove('dark-mode');
    }

        // Verifica se o tema escuro está ativado no localStorage ao carregar a página
            document.addEventListener("DOMContentLoaded", function () {
        if (supportsLocalStorage() && localStorage.getItem('darkMode') === 'true') {
                applyDarkMode();
        }
    });

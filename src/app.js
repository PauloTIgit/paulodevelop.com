// Adiciona um ouvinte de eventos de clique aos links do menu
document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault(); // Impede o comportamento padrão de navegação
        const targetId = this.getAttribute('href').substring(1); // Obtém o ID da seção alvo
        scrollToSection(targetId); // Rola suavemente até a seção alvo
    });
});

// Função para rolar suavemente até a seção desejada
function scrollToSection(id) {
    const section = document.getElementById(id);
    if (section) {
        window.scrollTo({
            top: section.offsetTop,
            behavior: 'smooth' // Ativa a animação de rolagem suave
        });
    }
}


// Força o recarregamento da página, ignorando o cache
function limparCache() {
    location.reload(true);
}

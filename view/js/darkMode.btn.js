const btnMode = document.getElementById('btnMode');
const iconMode = document.getElementById('iconMode');
const themeBrouse = localStorage.getItem('darkMode');
const view = document.getElementById('view');

// Verifica se o tema escuro está ativado no localStorage ao carregar a página
document.addEventListener("DOMContentLoaded", function () {
    if (supportsLocalStorage()){
        console.log(supportsLocalStorage());
        if (themeBrouse === 'true') {// se estiver de no tema preto 
            activatedNight();
        }
        if (themeBrouse === null) {// se estiver de no tema branco 
            activatedMorning();
        }
        btnMode.classList.remove('default');
    }else{
        btnMode.remove()
        console.log('O navegador não tem suporte a LocalStorge. Botão de themaMode não será usado!');
    }
});




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
    statusBtnTheme = btnMode.classList.value;
    debugger
    if (statusBtnTheme === 'morning'){
        theme = 'night';
        themesMode(theme);
    }
    if (statusBtnTheme === 'night') {
        theme = 'morning';
        themesMode(theme);
    }
}

function activatedNight() {
    btnMode.classList.add('night');
    iconMode.classList.add('fa');
    iconMode.classList.add('fa-sun-o');
    view.classList.add('dark-mode');
    // localStorage.setItem('darkMode', 'true');
}

function activatedMorning() {
    btnMode.classList.add('morning');
    iconMode.classList.add('fa');
    iconMode.classList.add('fa-moon-o');
    view.classList.remove('dark-mode');
    // localStorage.removeItem('darkMode');

}


function themesMode(theme) {
    value = btnMode.classList.value;
    console.log(value);
    btnMode.classList.remove(value);
    if (theme === 'morning') {
        activatedMorning();
    }
    if (theme === 'night') {
        activatedNight();
    }
}
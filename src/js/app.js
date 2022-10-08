document.addEventListener('DOMContentLoaded', () => {
    eventListeners();
    darkMode();
})

function darkMode() {
    const preferenciaDarkMode = window.matchMedia('(prefers-color-scheme: dark');

    if (preferenciaDarkMode.matches === true) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    preferenciaDarkMode.addEventListener('change', () => {
        if (preferenciaDarkMode.matches === true) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    //cambiar a modo oscuro
    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    })
}

function eventListeners() {
    const boton_menu = document.querySelector('.boton-menu');
    const navegacion = document.querySelector('.navegacion');

    boton_menu.addEventListener('click', () => {
        esconderMenu();
    });
    navegacion.addEventListener('click', () => {
        esconderMenu();
    });
}

function esconderMenu() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('hide');
}

document.addEventListener('DOMContentLoaded', () => {
    eventListeners();
    darkMode();
})

function darkMode() {
    const preferenciaDarkMode = window.matchMedia('(prefers-color-scheme: dark');

    let dark_mode_local_storage = localStorage.getItem("dark_mode");

    //comprobar si la variable DARKMODE esta creada en el local storage

    //si no esta creada leemos las preferencias del sistema
    if (dark_mode_local_storage === null) {

        if (preferenciaDarkMode.matches === true) {
            document.body.classList.add('dark-mode');
            localStorage.setItem('dark_mode', 'true');
        } else {
            document.body.classList.remove('dark-mode');
            localStorage.setItem('dark_mode', 'false');
        }
    } else {
        if (dark_mode_local_storage === 'true') {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
        console.log('hay datos en el local storage');
    }

    //Cambiar el darkmode dependiendo de las preferencias del sistema

    /*preferenciaDarkMode.addEventListener('change', () => {
        if (preferenciaDarkMode.matches === true) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });*/

    //cambiar a modo oscuro mediante el boton
    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');

        if (document.body.classList.contains('dark-mode') === true) {
            localStorage.setItem('dark_mode', 'true');
            console.log('modo claro');
        } else {
            localStorage.setItem('dark_mode', 'false');
            console.log('modo oscuro');
        }
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

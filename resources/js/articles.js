// Saber las coordenadas en px al hacer scroll vertical ---------------------------//
// window.addEventListener('scroll', function() {
//     let scrollTop = window.scrollY;
//     console.log('Coordenadas verticales js: ', scrollTop);
// })
// --------------------------------------------------------------------------------//


// Boton aparece al bajar scroll --------------------------------------------------//
let btnUp = document.querySelector('.btn-up');
function arrowUp (){
    
    if (window.scrollY >= 500) {
        btnUp.classList.add('show');
    } else{
        btnUp.classList.remove('show');
    }
};

window.addEventListener('scroll', arrowUp);
//----------------------------------------------------------------------------------//


// Subir arriba de la pagina al hacer click en la flecha btn-Up --------------------//
function clickToTop(){
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })
}

btnUp.addEventListener('click', clickToTop);
// ---------------------------------------------------------------------------------//
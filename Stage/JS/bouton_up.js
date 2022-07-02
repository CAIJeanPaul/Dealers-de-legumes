const btbouton_up = document.querySelector('.bouton_up');

btbouton_up.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})
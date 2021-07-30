const toggle = document.querySelector('.navBurguerMenu');
const menuMobile = document.querySelector('.navMenuWrapper')


/*Evbento para menu hamburguesa */
toggle.addEventListener('click', () => {
    menuMobile.classList.toggle('open');

});


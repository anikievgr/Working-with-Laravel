let menuBurger = document.getElementById("navbar");
let header =document.getElementById("header");
document.querySelector("#menu").onclick = function (event){
    menuBurger.classList.toggle('close');
}

var searchParams = window.location.pathname;

function activPage(){
    if (searchParams == "/"){
        menuBurger.classList.add('o_nas');
        menuBurger.classList.remove('incubirovanie');
        menuBurger.classList.remove('contacti');
    }
    if (searchParams == "/incubirovanie"){
        menuBurger.classList.remove('o_nas');
        menuBurger.classList.add('incubirovanie');
        menuBurger.classList.remove('contacti');
    }

    if (searchParams == "/contacti"){
        menuBurger.classList.remove('o_nas');
        menuBurger.classList.remove('incubirovanie');
        menuBurger.classList.add('contacti');
    }
}
activPage();
var scrolY = 0;
window.onscroll = function (e) {
    console.log(window.scrollY);
    if(window.scrollY >= 400){
        header.classList.add('active');
    }else if (window.scrollY < 400){
        header.classList.remove('active');
    }
};

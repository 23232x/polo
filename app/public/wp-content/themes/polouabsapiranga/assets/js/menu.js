


// variável show, que esta mostrando expandido(true) o menu
let show = true;


// selecione a classe menu-section
const menuSection = document.querySelector(".menu-section")

// Selecione a classe .menu-toggle que esta dentro de menuSection
const menuToggle = menuSection.querySelector(".menu-toggle")


// Quando o menuToggle for clicado, execute a função
menuToggle.addEventListener("click", () => {

    // faz com que a página não dê rolagem, e apareça apenas o menu toggle
    //Foi utilizado um if ternário para verficar, de formas que
    // o ternário verifica a variável show, sendo ela "true", é adicionado ao body
    //o overflow="hidden", e caso não seja true o valor permanece o defaul: "initial"
    document.body.style.overflow = show ? "hidden" : "initial"


    //adiciona a lista de classes via toggle
    //o toggle do classList adiciona o tira uma classe, neste caso, será a classe "on"
    menuSection.classList.toggle("on", show)

    //O show será fiferente do "show" atual, on seja: o "show" definido true, será
    //aletad para false.
    show = !show;
})



// https://codesandbox.io/s/github/rcbyr/keen-slider-sandboxes/tree/v6/navigation-controls/thumbnails/vue?file=/src/main.js
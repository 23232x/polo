
const mediaQueryList = window.matchMedia("(max-width:800px)");

if (mediaQueryList.matches) {
    console.log("funfou");
}



window.matchMedia("(min-width: 400px)").addListener(function (e) {
    if (e.matches) {
        console.info("a porta de visualização é de pelo menos 400 pixels de largura");
    } else {
        console.info("a porta de visualização não tem pelo menos 400 pixels de largura");
    }
}); 
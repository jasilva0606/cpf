const web = document.querySelector(".web");
const modal = document.querySelector(".modal");
let cerrar = document.querySelector(".x");
const button = document.querySelector(".button");


button.addEventListener("click", mostrar);
cerrar.addEventListener("click", ocultar);

function ocultar(){
    modal.style.display = "none";
    web.style.display = "flex";
}

function mostrar(){
    web.style.display = "none";
    modal.style.display = "flex";
}


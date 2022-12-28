let cerrar = document.querySelector(".x");

const modal = document.querySelector(".modal");

const web = document.querySelector(".webinfo");

web.style.display = "none";

modal.style.display = "flex";


let div = document.querySelector(".msjerror");
div.innerHTML = `${error}`;

cerrar.addEventListener("click", ocultar);

function ocultar(){
    modal.style.display = "none";
    web.style.display = "block";
}
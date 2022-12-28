let cerrar = document.querySelector(".x");

const modal = document.querySelector(".modal");

const web = document.querySelector(".webinfo");

let div = document.querySelector(".msjerror");
div.innerHTML = `${error}`;

web.style.display = "none";

modal.style.display = "flex";

cerrar.addEventListener("click", ocultar);

function ocultar(){
    modal.style.display = "none";
    web.style.display = "block";
}

let calendar = new Calendar('calendar');

calendar.getElement().addEventListener('change', continuar);

function continuar(){
    let fecha = calendar.value().format('L');
    let dis = document.querySelector(".h2tipo");
    let html = `<form action="validarfecha.php" method="post" class="formfec"><input type="text" class="fecha" value="${fecha}" placeholder="${fecha}" name="fecha" style="display: none">`;
    
    console.log(dis.id);

    if (dis.id=="golf" || dis.id=="golf" || dis.id=="pad"){
        html = html + `<input type="submit" value="Anexo" name="Anexo" class="btsig"></form>`;
    }else if (dis.id=="ten"){
        html = html + `<input type="submit" value="Anexo" name="Anexo" class="btsig"><input type="submit" value="Campo" name="Campo" class="btsig"></form>`;
    }else if (dis.id=="gim" ){
        html = html + `<input type="submit" value="Campo" name="Campo" class="btsig"><input type="submit" value="Sede" name="Sede" class="btsig"></form>`;
    }else if (dis.id=="sal" ){
        html = html + `<input type="submit" value="Anexo" name="Anexo" class="btsig"><input type="submit" value="Campo" name="Campo" class="btsig"><input type="submit" value="Sede" name="Sede" class="btsig"></form>`;
    }
    const modal = document.querySelector(".modal");
    const web = document.querySelector(".webinfo");
    let div = document.querySelector(".msjerror");
    div.innerHTML = html;
    web.style.display = "none";
    modal.style.display = "flex";

}


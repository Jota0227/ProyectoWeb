const cargarTabla2 = (menus)=>{
    let tbody = document.querySelector("#tbody-tabla");
    tbody.innerHTML="";
    for(let i=0; i<menus.length; ++i){
        let tr = document.createElement("tr")
        let tdMenu = document.createElement("td");
        tdMenu.innerText = menus[i].colacion;
        let tdValor = document.createElement("td");
        tdValor.innerText = menus[i].valor;
        tr.appendChild(tdMenu);
        tr.appendChild(tdValor);
        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let menus = await getMenus();
    cargarTabla2(menus);
});


const cargarTabla2 = (menus)=>{
    let tbody = document.querySelector("#tbody-tabla");
    tbody.innerHTML="";
    for(let i=0; i<menus.length; ++i){
        let tr = document.createElement("tr")
        let tdMenu = document.createElement("td");
        tdMenu.innerText = menus[i].colacion;
        let tdValor = document.createElement("td");
        tdValor.innerText = menus[i].valor;
        let tdAcciones = document.createElement("td");
        let botonSeleccionar = document.createElement("button");
        botonSeleccionar.innerText = "Seleccionar";
        botonSeleccionar.classList.add("btn","btn-warning");
        botonSeleccionar.idMenu = menus[i].id;
        tdAcciones.appendChild(botonSeleccionar);
        tr.appendChild(tdMenu);
        tr.appendChild(tdValor);
        tr.appendChild(tdAcciones);
        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let menus = await getMenus();
    cargarTabla2(menus);
});
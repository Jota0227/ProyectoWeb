const iniciarEliminacion = async function(){
    let id = this.idMenu;
    let resp = await Swal.fire({tittle:"Esta seguro?", text:"Esta operacion es irreversible", icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarMenu(id)){
            let menus = await getMenus();
            cargarTabla(menus);
            Swal.fire("Menu eliminado","Menu eliminado exitosamente","info");
        }else{
            Swal.fire("Error","No se pudo atender la solicitud","error");
        }
    }else{
        Swal.fire("Cancelado","cancelado por el usuario", "info");
    }
};

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let colacion=document.querySelector("#colacion-txt").value;
    let valor=document.querySelector("#valor-txt").value;
    let errores= [];
    if(colacion===""){
        errores.push("Debe ingresar una colacion")
    }
    if(valor===""){
        errores.push("Debe ingresar un valor")
    }
    if(errores.length==0){
        let menu = {};
        menu.colacion=colacion;
        menu.valor=valor;
        let res = await crearMenu(menu);
        await Swal.fire("Menu Ingresado", "Menu ingresado exitosamente", "info");
    }else{
        Swal.fire({
            tittle: "Errores de validacion",icon: "warning",html: errores.join("<br />")});
    } 
});

const cargarTabla = (menus)=>{
    let tbody = document.querySelector("#tbody-colaciones");
    tbody.innerHTML="";
    for(let i=0; i<menus.length; ++i){
        let tr = document.createElement("tr")
        let tdColacion = document.createElement("td");
        tdColacion.innerText = menus[i].colacion;
        let tdValor = document.createElement("td");
        tdValor.innerText = menus[i].valor;
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idMenu = menus[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);
        tr.appendChild(tdColacion);
        tr.appendChild(tdValor);
        tr.appendChild(tdAcciones);
        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let menus = await getMenus();
    cargarTabla(menus);
});
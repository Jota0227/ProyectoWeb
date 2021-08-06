const seleccionarPedido = async function(){
    let id=this.idMenu;
    await Swal.fire({text:"Menu Seleccionado"});
};

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
        botonSeleccionar.addEventListener("click", seleccionarPedido);
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

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre=document.querySelector("#nombre-txt").value;
    let numero=document.querySelector("#numero-txt").value;
    let hora=document.querySelector("#hora-txt").value;
    let errores= [];
    if(nombre===""){
        errores.push("Debe ingresar un nombre")
    }
    if(numero===""){
        errores.push("Debe ingresar un numero de contacto")
    }
    if(hora===""){
        errores.push("Debe ingresar una hora");
    }else if(hora.charAt(2)!=":" || hora.length!=5){
        errores.push("El formato de la hora no es el correcto")
    }
    if(errores.length==0){
        let pedido = {};
        pedido.nombre=nombre;
        pedido.numero=numero;
        pedido.hora=hora;
        let res = await crearMenu(pedido);
        await Swal.fire("Pedido Registrado", "Pedido registrado exitosamente", "info");
    }else{
        Swal.fire({
            tittle: "Errores de validacion",icon: "warning",html: errores.join("<br />")});
    } 
});

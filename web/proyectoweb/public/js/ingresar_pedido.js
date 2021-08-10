const seleccionarPedido = async function(){
    var tabla = document.getElementById('tbody-tabla'),
    fila = tabla.getElementsByTagName('tr');

    for (var i = 0, len = fila.length; i < len; i++) {
        fila[i].onclick = function() {
        var tr = this.innerHTML.split("td");
        document.getElementById("colacionC-txt").value  = tr[1].substring(1,tr[1].length-2);
        document.getElementById("valorC-txt").value = tr[3].substring(1,tr[3].length-2);
    };
    }
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
    let contacto=document.querySelector("#numero-txt").value;
    let hora=document.querySelector("#hora-txt").value;
    let colacion=document.querySelector("#colacionC-txt").value;
    let valor=document.querySelector("#valorC-txt").value;
    let errores= [];
    if(nombre===""){
        errores.push("Debe ingresar un nombre")
    }
    if(contacto===""){
        errores.push("Debe ingresar un numero de contacto")
    }
    if(hora===""){
        errores.push("Debe ingresar una hora");
    }else if(hora.charAt(2)!=":" || hora.length!=5){
        errores.push("El formato de la hora no es el correcto")
    }
    if(colacion===""){
        errores.push("Debe seleccionar un pedido")
    }
    
    if(errores.length==0){
        let pedido = {};
        pedido.nombre=nombre;
        pedido.contacto=contacto;
        pedido.hora=hora;
        pedido.colacion=colacion;
        pedido.valor=valor;
        let res = await crearPedido(pedido);
        await Swal.fire("Pedido Registrado", "Pedido registrado exitosamente", "info");
    }else{
        Swal.fire({
            tittle: "Errores de validacion",icon: "warning",html: errores.join("<br />")});
    } 
});

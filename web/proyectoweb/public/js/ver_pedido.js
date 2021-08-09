const borrarPedido = async function(){
    let id = this.idPedido;
    let resp = await Swal.fire({tittle:"Esta seguro?", text:"Esta operacion es irreversible", icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarPedido(id)){
            let pedidos = await getPedidos();
            cargarTabla3(pedidos);
            Swal.fire("Pedido eliminado","Pedido eliminado exitosamente","info");
        }else{
            Swal.fire("Error","No se pudo atender la solicitud","error");
        }
    }else{
        Swal.fire("Cancelado","cancelado por el usuario", "info");
    }
};

const cargarTabla3 = (pedidos)=>{
    let tbody = document.querySelector("#tbody-pedidos");
    tbody.innerHTML="";
    for(let i=0; i<pedidos.length; ++i){
        let tr = document.createElement("tr")
        let tdColacion = document.createElement("td");
        tdColacion.innerText = pedidos[i].colacion;
        let tdValor = document.createElement("td");
        tdValor.innerText = pedidos[i].valor;
        let tdNombre = document.createElement("td");
        tdNombre.innerText = pedidos[i].nombre;
        let tdContacto = document.createElement("td");
        tdContacto.innerText = pedidos[i].contacto;
        let tdHora = document.createElement("td");
        tdHora.innerText = pedidos[i].hora;
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idPedido = pedidos[i].id;
        botonEliminar.addEventListener("click", borrarPedido);
        tdAcciones.appendChild(botonEliminar);
        tr.appendChild(tdColacion);
        tr.appendChild(tdValor);
        tr.appendChild(tdNombre);
        tr.appendChild(tdContacto);
        tr.appendChild(tdHora);
        tr.appendChild(tdAcciones);
        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let pedidos = await getPedidos();
    cargarTabla3(pedidos);
})


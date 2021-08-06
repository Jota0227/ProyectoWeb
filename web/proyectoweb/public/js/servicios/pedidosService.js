const getPedidos = async ()=>{
    let resp;
    resp = await axios.get("api/pedidos/get");
    return resp.data;
};


const crearPedido = async(pedido)=>{
    let resp = await axios.post("api/pedidos/post", pedido, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const eliminarPedido = async(id)=>{
    try{
        let resp = await axios.post("api/pedidos/delete", {id}, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data=="ok";
    }catch(e){
        return false;
    }
};
const getInformaciones = async ()=>{
    let resp;
    resp = await axios.get("api/informaciones/get");
    return resp.data;
};


const crearInformacion = async(informacion)=>{
    let resp = await axios.post("api/informaciones/post", informacion, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};
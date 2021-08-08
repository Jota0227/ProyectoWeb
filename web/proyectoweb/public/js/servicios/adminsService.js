const getAdmin = async ()=>{
    let resp;
    resp = await axios.get("api/admins/get");
    return resp.data;
};


const crearAdmin = async(admin)=>{
    let resp = await axios.post("api/admins/post", admin, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

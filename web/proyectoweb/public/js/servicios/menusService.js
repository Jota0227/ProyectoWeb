
const getMenus = async ()=>{
    let resp;
    resp = await axios.get("api/menus/get");
    return resp.data;
};


const crearMenu = async(menu)=>{
    let resp = await axios.post("api/menus/post", menu, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const eliminarMenu = async(id)=>{
    try{
        let resp = await axios.post("api/menus/delete", {id}, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data=="ok";
    }catch(e){
        return false;
    }
};
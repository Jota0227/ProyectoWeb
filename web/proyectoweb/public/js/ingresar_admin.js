document.querySelector("#iniciar-sesion-btn").addEventListener("click", async ()=>{
    let rut=document.querySelector("#rut-txt").value;
    let contraseña=document.querySelector("#pass-txt").value;
    let errores= [];
    let admin = await getAdmins();
    if(rut===""){
        errores.push("Debe ingresar un rut")
    }else{
        for(let i=0; i<admin.length; ++i){
            if(rut===admin[i].rut){
                if(contraseña!=admin[i].contraseña){
                    errores.push("La contraseña ingresada es incorrecta")
                }
            }
        }
    }
    if(contraseña===""){
        errores.push("Debe ingresar una contraseña");
    }
    if(errores.length==0){
        window.location.href="actualizar_menu";
    }else{
        Swal.fire({
            tittle: "Errores de validacion",icon: "warning",html: errores.join("<br />")});
        document.querySelector("#rut-txt").value = "";
        document.querySelector("#pass-txt").value = "";
    } 
});
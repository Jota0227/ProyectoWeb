document.querySelector("#registrar-admin-btn").addEventListener("click", async ()=>{
    let nombre=document.querySelector("#nombre-admin-txt").value;
    let rut=document.querySelector("#rut-txt").value;
    let pass=document.querySelector("#pass-txt").value;
    let telefono=document.querySelector("#fono-txt").value;
    let errores = [];
    if(nombre===""){
        errores.push("Debe ingresar un nombre")
    }
    if(rut===""){
        errores.push("Debe ingresar un rut")
    }
    if(pass===""){
        errores.push("Debe ingresar una contraseña")
    }
    if(telefono===""){
        errores.push("Debe ingresar un telefono")
    }
    if(errores.length==0){
        let admin={};
        admin.nombre=nombre;
        admin.rut=rut;
        admin.pass=pass;
        admin.telefono=telefono;
        let res = await crearAdmin(admin);
        await Swal.fire("Administrador registrado exitosamente", "info");
    }else{
        Swal.fire({
            tittle: "Errores de validacion",icon: "warning",html: errores.join("<br />")});
    } 
});

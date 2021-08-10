document.querySelector("#registrar-admin-btn").addEventListener("click", async ()=>{
    let nombre=document.querySelector("#nombre-admin-txt").value;
    let rut=document.querySelector("#rut-txt").value;
    let contraseña=document.querySelector("#pass-txt").value;
    let fono=document.querySelector("#fono-txt").value;
    let errores= [];
    if(nombre===""){
        errores.push("Debe ingresar un nombre")
    }
    if(rut===""){
        errores.push("Debe ingresar un rut")
    }
    if(contraseña===""){
        errores.push("Debe ingresar una contraseña");
    }
    if(fono===""){
        errores.push("Debe seleccionar un telefono")
    }
    
    if(errores.length==0){
        let admin = {};
        admin.nombre=nombre;
        admin.rut=rut;
        admin.contraseña=contraseña;
        admin.fono=fono;
        let res = await crearAdmin(admin);
        await Swal.fire("Admin Registrado", "Admin registrado exitosamente", "info");
    }else{
        Swal.fire({
            tittle: "Errores de validacion",icon: "warning",html: errores.join("<br />")});
    } 
});
document.querySelector("#modificar-btn").addEventListener("click", async ()=>{
    let numero=document.querySelector("#numerom-txt").value;
    let correo=document.querySelector("#correom-txt").value;
    let horario=document.querySelector("#horariosm-txt").value;
    let direccion=document.querySelector("#direcciom-txt").value;
    let errores= [];
    if(numero===""){
        errores.push("Debe ingresar un numero")
    }
    if(correo===""){
        errores.push("Debe ingresar correo")
    }
    if(horario===""){
        errores.push("Debe ingresar un horario de atencion");
    }
    if(direccion===""){
        errores.push("Debe indicar una direccion")
    }

    if(errores.length==0){
        let informacion = {};
        informacion.numero=numero;
        informacion.correo=correo;
        informacion.horario=horario;
        informacion.direccion=direccion;
        let res = await crearInformacion(informacion);
        await Swal.fire("Informacion Registrada", "Informacion registrada exitosamente", "info");
    }else{
        Swal.fire({
            tittle: "Errores de validacion",icon: "warning",html: errores.join("<br />")});
    } 
});
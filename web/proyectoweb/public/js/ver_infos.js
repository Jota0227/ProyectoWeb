const cargarInformacion = (informaciones)=>{
    document.getElementById("numero-txt").innerHTML=informaciones.numero;
    document.getElementById("correo-txt").innerHTML=informaciones.correo;
    document.getElementById("horarios-txt").innerHTML=informaciones.horarios;
    document.getElementById("correo").innerHTML=informaciones.direccion;
};
document.addEventListener("DOMContentLoaded", async ()=>{
    let informaciones = await getInformaciones();
    cargarInformacion(informaciones);
});
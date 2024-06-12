window.onload = ()=>{
    obtenerImg();
}

function mostrarImg(imagenes){
    let listaimgElement = document.querySelector("#listadoImg");
    listaimgElement.innerHTML="";
    imagenes.forEach(imagen => {
        let imgSrc = `../../BACKEND/IMAGENES/${imagen.id}.${imagen.extension}`;
        console.log('Generando ruta de imagen:', imgSrc);

        listaimgElement.innerHTML+=`
        <div>
            <img src="${imgSrc}" alt="${imagen.nombre}">
        <p>${imagen.nombre}</p>

        </div>
        `
    });
}
 async function obtenerImg(){
    let url = "https://localhost/PROYECTOS/gestor-de-imagen_octaviososa/BACKEND/CONTROLADOR/controlador.php?function=obtenerImagen";
    try {
        let consulta = await fetch(url);
        let datos = await consulta.json();
        console.log('Datos recibidos:', datos);
        mostrarImg(datos);
    } catch (error) {
        console.error('Error al obtener imágenes:', error);
    }
}




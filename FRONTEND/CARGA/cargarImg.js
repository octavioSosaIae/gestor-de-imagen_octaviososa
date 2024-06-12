window.onload=()=>{

enviarImagen();
    
}

    function enviarImagen(){

        let formElement = document.querySelector("#formImg");
        formElement.onsubmit = async (e) =>{
            e.preventDefault();
    
        let formData = new FormData(formElement);

        let url = "https://localhost/PROYECTOS/gestor-de-imagen_octaviososa/BACKEND/CONTROLADOR/controlador.php?function=subirImagen";

        let config = {
            method:"POST",
            body:formData
        }
     
        let respuesta = await fetch(url, config);
        let datos = await respuesta.json();
        console.log(datos);
    }


    }

   
        

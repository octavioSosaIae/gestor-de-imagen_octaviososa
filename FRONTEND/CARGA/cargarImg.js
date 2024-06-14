window.onload=()=>{

enviarImagen();
    
}

    function enviarImagen(){

        let formElement = document.querySelector("#formImg");
        formElement.onsubmit = async (e) =>{
            e.preventDefault();
    
        let formData = new FormData(formElement);

        let url = "https://localhost/gestor-de-imagen_octaviososa/BACKEND/CONTROLADOR/controlador.php?function=subirImagen";

        let config = {
            method:"POST",
            body:formData
        }
     
        let respuesta = await fetch(url, config);
        let datos = await respuesta.json();
        console.log(datos);
    }


    }

   



    document.addEventListener('DOMContentLoaded', function() {

        const inputImagen = document.getElementById('file-upload');
        const imagenPreview = document.getElementById('imagen-preview');
    

        inputImagen.addEventListener('change', function() {

            if (inputImagen.files && inputImagen.files[0]) {

                const reader = new FileReader();
                

                reader.onload = function(e) {
                    imagenPreview.src = e.target.result;
                    imagenPreview.style.display = 'block';
                }
                

                 reader.readAsDataURL(inputImagen.files[0]);
            }
        });
    });
   
        

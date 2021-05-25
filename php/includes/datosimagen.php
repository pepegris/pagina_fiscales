<?php

    // recibimos los datos de la imagen

    if (isset($_FILES)) {
        
        //ruta de la imagen
        $nombre_imagen = $_FILES['imagen']['name'];
        $tipo_imagen   = $_FILES['imagen']['type'];
        $tam_imagen    = $_FILES['imagen']['size'];
    
        //ruta del destino del servidor
        $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/htdocs';
    
        //mover imagen a directorio temporal
    
        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$nombre_imagen);



    }


?>

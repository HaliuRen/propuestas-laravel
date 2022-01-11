<?php
 
		// $p = new ArchivoData();
		// $continuar = true;
		// if($_POST["nombre"]!=""){
		// 	if(ArchivoData::getByArchivo($_POST["contenido"])!=null){ $continuar=false; }

		// }
		// if($continuar){
        //     $p->$archivo = $_FILES["archivito"]["tmp_name"]; 
        //     $p->$tamanio = $_FILES["archivito"]["size"];
        //     $p->$tipo    = $_FILES["archivito"]["type"];
        //     $p->$nombre  = $_FILES["archivito"]["name"];
        //     $p->$titulo  = $_POST["titulo"];
		 
		//     $px = $p->add();
		// }else{
		// 	Core::alert("El nombre de usuario ya esta en uso!");
		// 	Core::redir("./?view=/disponibles/newarchivo");
		// }

		// Core::redir("./?view=/disponibles/newarchivo");

        if ($_FILES['archivo']['error'] == 0) { //Valida si no hay errores
            $dir = $sql = "insert into archivos (contenido) "; //Directorio de carga
            $tamanio = 40000; //Tamaño permitido en kb
            $permitidos = array('pdf', 'jpg'); //Archivos permitido
            $ruta_carga = $dir . $_FILES['archivo']['name'];
            //Obtenemos la extensión del archivo
            $arregloArchivo = explode(".", $_FILES['archivo']['name']);
            $extension = strtolower(end($arregloArchivo));
            
            if (in_array($extension, $permitidos)) { //Valida si la extensión es permitida
                
                if ($_FILES['archivo']['size'] < ($tamanio * 1024)) { //Valida el tamaño
                    
                    //Valida si no existe la carpeta y la crea
                    if (!file_exists($dir)) {
                        mkdir($dir, 0777);
                    }
                    
                    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_carga)) {
                        echo "El archivo se cargó correctamente";
                        } else {
                        echo "Error al cargar archivo";
                    }
                    } else {
                    echo "Archivo excede el tamaño permitido";
                }
                } else {
                echo "Archivo no permitido";
            }
            } else {
            echo "No enviaste archivo";
        }
    

?>


<!-- $archivo = $_FILES["archivito"]["tmp_name"]; 
 $tamanio = $_FILES["archivito"]["size"];
 $tipo    = $_FILES["archivito"]["type"];
 $nombre  = $_FILES["archivito"]["name"];
 $titulo  = $_POST["titulo"];

 if ( $archivo != "none" )
 {
    $fp = fopen($archivo, "rb");
    $contenido = fread($fp, $tamanio);
    $contenido = addslashes($contenido);
    fclose($fp); 

    $qry = "INSERT INTO archivos VALUES 
            (0,'$nombre','$titulo','$contenido','$tipo')";

    mysql_query($qry);

    if(mysql_affected_rows($conn) > 0)
       print "Se ha guardado el archivo en la base de datos.";
    else
       print "NO se ha podido guardar el archivo en la base de datos.";
 }
 else
    print "No se ha podido subir el archivo al servidor"; -->
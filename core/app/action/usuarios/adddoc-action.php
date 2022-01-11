<?php
 
		$p = new DocData();
		$continuar = true;
		if($_FILES["archivo"]!=""){
			if(DocData::getByDocName($_FILES["archivo_nombre"])!=null){ $continuar=false; }

		}
		if($continuar){
            $nombre_temporal=$_FILES['archivo']['tmp_name'] ;
            $p->archivo_contenido = addslashes(fread(fopen($nombre_temporal, "rb"), filesize($nombre_temporal)));
            $p->archivo_nombre=$_FILES['archivo']['name'];
            $p->archivo_peso=$_FILES['archivo']['size'];
            $p->archivo_tipo=$_FILES['archivo']['type'];
            
		    $px = $p->add();
		}else{
			Core::alert("El nombre de usuario ya esta en uso!");
			Core::redir("./?view=/usuarios/newdoc");
		}

		Core::redir("./?view=/usuarios/newdoc");
?>
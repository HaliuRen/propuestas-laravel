



<section class="content">
                <!-- Page Heading -->
<style>
    #resultado {
    background-color: red;
    color: white;
    font-weight: bold;
    }
    #resultado.ok {
    background-color: green;
    }

    #resultadorfc{
    background-color: red;
    color: white;
    font-weight: bold;
}
#resultadorfc.ok {
    background-color: green;
}

 


</style>
                <?php
                $zona=UserData::getById($_SESSION["user_id"])->zona;
                
                  if( Core::$user->kind==17){
                    if( Core::$user->zona=='Poniente'){
                      $zonas = TCctData::getSRZona($zona,'GENERAL');
                      $ccts = TCctData::getSRcct($zona,'GENERAL');
                      }
                }   
                if( Core::$user->kind==17){
                    if(Core::$user->zona=='Oriente' ){ 
                      $zonas = TCctData::getSRZona($zona,'GENERAL');
                      $ccts = TCctData::getSRcct($zona,'GENERAL');
                    }
                }
                if( Core::$user->kind==17){
                      if( Core::$user->zona=='Valle de Toluca'){
                        $zonas = TCctData::getSRZona($zona,'GENERAL');
                        $ccts = TCctData::getSRcct($zona,'GENERAL');
                      }
                }
                if( Core::$user->kind==18){
                    if( Core::$user->zona=='Poniente'){
                   // Core::alert("entro subdireccion Poniente B T");
                      // $propuestas = PlantillaData::getBySBtPoniente($zona);
                      $zonas = TCctData::getSRZona($zona,'TECNOLOGICO');
                      $ccts = TCctData::getSRcct($zona,'TECNOLOGICO');
                     
                    }
                }
                if( Core::$user->kind==18){
                        if(Core::$user->zona=='Oriente' ){ 
                        Core::alert("entro subdireccion regional BT* ".Core::$user->kind);
                        // $propuestas = PlantillaData::getBySBtOriente($zona);
                        $zonas = TCctData::getSRZona($zona,'TECNOLOGICO');
                        $ccts = TCctData::getSRcct($zona,'TECNOLOGICO');
                        }
                }
                if( Core::$user->kind==18){
                   if(Core::$user->zona=='Valle de Toluca'){
                      // Core::alert("entro subdireccion regional VT G");
                        
                        $zonas = TCctData::getSRZona($zona,'TECNOLOGICO');
                        $ccts = TCctData::getSRcct($zona,'TECNOLOGICO');
                      }
                }

                ?>


                <div class="row">
                    <div class="col-lg-12">
                        <h1 >
                            Agregar Documentos
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/capturas/pdisponibles"><i class='fa fa-upload'></i> Capturar Plazas Disponibles </a>
                            </li>
                            
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Agregar Plaza Disponible
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div id="result"></div>

                <div class="row">
                    <div class="col-lg-8">
                        <form enctype="multipart/form-data" action="./?action=/disponibles/addarchivo" method="post">
                        Descripción <input type="text" name="titulo" size="30">
                        Ubicación <input type="file" name="archivito">
                        <input type="submit" value="Enviar archivo">

                        </form>
                    </div>
                </div>
                    
                        <!-- <form role="form" method="post" action="./?action=/disponibles/addarchivo" name="newplaza" id="newplaza">
                       -->

   


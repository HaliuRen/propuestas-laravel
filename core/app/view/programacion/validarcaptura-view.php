<script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
    
   
<ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                             <li class="active">
                                  <i class="fa fa-users"></i>Validar Plantilla</a>
                            </li>
                           
                        </ol>

 <br>  <br>
 
           <?php     
            
           $zona=UserData::getById($_SESSION["user_id"])->zona;
            $cct=UserData::getById($_SESSION["user_id"])->username;
           

                 
                if(Core::$user->kind==1|| Core::$user->kind==4){
                //Core::alert("entro sup ");
                    $propuestas = PlantillaData::getByZona($zona);
                
        } 

                if(Core::$user->kind==1|| Core::$user->kind==6){
                //Core::alert("entro dbg getByBg");
                $propuestas = PlantillaData::getByBg();
                
        }
                if(Core::$user->kind==1|| Core::$user->kind==7){
            //Core::alert("entro dbt");
                    $propuestas = PlantillaData::getByBt();
                
        }

                
        if( Core::$user->zona=='Poniente'){
            //Core::alert($zona);
                $propuestas = PlantillaData::getBySBgPoniente($zona);
               // Core::alert(count($propuestas));
            
    }
    if( Core::$user->zona=='Oriente'){
        //Core::alert("entro subdireccion regioanl BG");
            $propuestas = PlantillaData::getBySBgOriente($zona);
        
}
if( Core::$user->zona=='Valle de Toluca'){
    //Core::alert("entro subdireccion regioanl BG");
        $propuestas = PlantillaData::getBySBgValle($zona);
    
}

if( Core::$user->zona=='Poniente'){
    //Core::alert("entro subdireccion regioanl BG");
        $propuestas = PlantillaData::getBySBtPoniente($zona);
    
}
if( Core::$user->zona=='Oriente'){
//Core::alert("entro subdireccion regioanl BG");
    $propuestas = PlantillaData::getBySBtOriente($zona);

}
if(Core::$user->zona=='Valle de Toluca'){
//Core::alert("entro subdireccion regioanl BG");
$propuestas = PlantillaData::getBySBtValle($zona);

}

         
        if(count($propuestas)>0){
             //echo "si hay propuestas"
            ?>
            <div class="box box-primary">
            <table class="table table-bordered datatable table-hover" >
            <thead>
            <th style="text-align: center"> EXCEL</th>
               <th style="text-align: center">CCT</th>
          
            <th style="text-align: center">Nombre CCT</th>
            
            <th style="text-align: center">ZONA</th>
            <th style="text-align: center"> VALIDAR</th>

            </thead>
            <?php
            foreach($propuestas as $propuesta){
                ?>
                <tr>
             <td style="text-align: center">
             <a href="./report/plantillaEscuela-xlsx.php?&cct=<?php echo $propuesta->cct; ?>" 
                    class="btn btn-xs btn-success" title="GENERAR EXCEL"><i class="fa fa-file-excel-o">
                    </i> 
                </a>
             </td>   
                <td style="text-align: center" name="cct" id="cct"> 
                <a href="./?view=/programacion/showcaptura&cct=<?=$propuesta->cct;?>" 
                title="VER PROPUESTA"><?php echo $propuesta->cct; ?></td>
                <td style="text-align: center"><?php echo $propuesta->nombre_cct; ?></td>
                <td style="text-align: center"><?php echo $propuesta->zona_escolar;?></td>
              <td style="text-align: center" > 
              <a href="./?action=/programacion/validar&cct=<?=$propuesta->cct;?>" 
                class="btn btn-xs btn-success" title="VALIDAR"><i class="fa fa-check"></i></a>
        </td>
                
             
                </tr>
                <?php

            } 
 echo "</table></div>";
}
        else{
           echo "<br> <br><p class='alert alert-danger'>NO HAY CCT POR VALIDAR</p>";
        }
?>
    </div>

</div>
 
 </section>
  

  
 
<script type="text/javascript">
  window.onload=function(){                                                                      
  var i=0; var previous_hash = window.location.hash;                                           
  var x = setInterval(function(){                                                              
    i++; window.location.hash = "/noop/" + i;                                                  
    if (i==30){clearInterval(x);                                                               
      window.location.hash = previous_hash;}                                                   
  },10);
}
</script>
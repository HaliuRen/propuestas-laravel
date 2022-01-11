    <script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
        <h1>Estatus de Propuestas </h1>
   
<ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/consultas/estatuspropuestas"><i class="fa fa-cogs"></i> EStatus Propuestas</a>
                            </li>
                           
                        </ol>

 <br>  <br>
 
           <?php     
            
           $zona=UserData::getById($_SESSION["user_id"])->zona;
            $cct=UserData::getById($_SESSION["user_id"])->username;
           

            if(Core::$user->kind==1|| Core::$user->kind==5||Core::$user->kind==9){
           //  Core::alert("entro escuela getEstatusDir");
        $propuestas = PropuestasViewData::getEstatusDir($cct);
               
                     
        }
         if(Core::$user->kind==1|| Core::$user->kind==2){
             //echo("entro escuela getByPCCT");
        $propuestas = PropuestasViewData::getEstatusSems();
               
                    
        }
    
                if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
                //echo("entro sup getEstatusZona");
                    $propuestas = PropuestasViewData::getEstatusZona($zona);
                
        }

                if(Core::$user->kind==1|| Core::$user->kind==6){
                //Core::alert("entro dbg getByBg");
                $propuestas = PropuestasViewData::getEstatusDbg();
                
        }
                if(Core::$user->kind==1|| Core::$user->kind==7){
               //Core::alert("entro dbt");
                    $propuestas = PropuestasViewData::getEstatusDbt();
                
        }

                if(Core::$user->kind==1|| Core::$user->kind==8){
               // Core::alert("entro dtb ");
                    $propuestas = PropuestasViewData::getEstatusDtb();
                
        }

        if( Core::$user->kind==18){
          if( Core::$user->zona=='Poniente'){
              //Core::alert($zona);
      $propuestas = PropuestasViewData::getEstatusSregional('Poniente','TECNOLOGICO','SRBT','DBT');
            }
      }   
      if( Core::$user->kind==18){
          if(Core::$user->zona=='Oriente' ){ 
            // Core::alert("entro subdireccion regional BG ".Core::$user->kind);
            $propuestas = PropuestasViewData::getEstatusSregional('Oriente','TECNOLOGICO','SRBT','DBT');
              }
      }
      if( Core::$user->kind==18){
          if( Core::$user->zona=='Valle de Toluca'){
          //Core::alert("entro subdireccion regioanl BG");
          $propuestas = PropuestasViewData::getEstatusSregional('Valle de Toluca','TECNOLOGICO','SRBT','DBT');
          }
      }
      if( Core::$user->kind==17  ){
          if( Core::$user->zona=='Poniente'){
          //Core::alert("entro subdireccion Poniente B T");
          $propuestas = PropuestasViewData::getEstatusSregional('Poniente','GENERAL','SRBG','DBG');
              }
      }
      if( Core::$user->kind==17  ){
          if(Core::$user->zona=='Oriente' ){ 
    // Core::alert("entro subdireccion regional BT ".Core::$user->kind);
    $propuestas = PropuestasViewData::getEstatusSregional('Oriente','GENERAL','SRBG','DBG');
          }
      }
      if( Core::$user->kind==17 ){
          if(Core::$user->zona=='Valle de Toluca'){
      //Core::alert("entro subdireccion regional VT BT");
      $propuestas = PropuestasViewData::getEstatusSregional('Valle de Toluca','GENERAL','SRBG','DBG');

          }
    }
    if( Core::$user->kind==19){
      if(Core::$user->zona=='Valle de Mexico' ){ 
    
          $propuestas = PropuestasViewData::getEstatusSregional('Valle de Mexico','TELEBACHILLERATO','SRTB','DTB');
      }
    }
    if( Core::$user->kind==19){
      if(Core::$user->zona=='Valle de Toluca'){
        $propuestas = PropuestasViewData::getEstatusSregional('Valle de Toluca','TELEBACHILLERATO','SRTB','DTB');
        }
    }
         
        if(count($propuestas)>0){
             //echo "si hay propuestas"
            ?>
            <div class="box box-primary">
            <table class="table table-bordered datatable table-hover" >
            <thead>
            <th></th>
              <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19):?>
            <th style="text-align: center">Nombre Plaza Disponible</th>
             <?php endif;?>

           <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4
           ||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
            <th style="text-align: center">Plaza Disponible</th>
             <?php endif;?>

            <th style="text-align: center">Zona </th>
            <th style="text-align: center">CCT</th>
                   
            <th style="text-align: center">Categoria</th>
           
            <th style="text-align: center">Supervision</th>
           
            <th style="text-align: center">SD Regional</th>
               
            <th style="text-align: center">DGEMS</th>
            
           
            <th></th>
            </thead>
            <?php
            foreach($propuestas as $propuesta){
                ?>
                <tr>
                 <td style="width:25px;">
                <a href="./?view=/consultas/showestatuspropuestas&id=<?=$propuesta->Id_Disponible;?>" class="btn btn-xs btn-default" title="VER PROPUESTA"><i class="fa fa-eye"></i></a>
                 <?php if(Core::$user->kind==2||Core::$user->kind==3
                 ||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7
                 ||Core::$user->kind==17||Core::$user->kind==18):?>
                <td><?php echo $propuesta->Num_Plaza; ?></td>
                 <?php endif;?>
                  <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19):?>
                     <td><?php echo $propuesta->APaterno." ".$propuesta->AMaterno." ".$propuesta->Nombre; ?></td>
                     <?php endif;?>
                <td style="text-align: center"><?php echo $propuesta->Zona; ?></td>
                <td style="text-align: center"><?php echo $propuesta->Cct; ?></td>
                <td style="text-align: center" ><?php echo $propuesta->Tipo_Puesto;?></td>
                <td style="text-align: center"><?php echo $propuesta-> Bnd_SupervisionEst; ?></td>     
                <td style="text-align: center"><?php echo $propuesta->  Bnd_SRegionalEst; ?></td>     
                
                <td style="text-align: center"><?php echo $propuesta->  bnd_dgems; ?></td>  
             
                </td>
                <td>
                
               <!-- <a data-toggle="modal" href="#newModal" class="btn btn-xs btn-danger">  <i class="fa fa-remove"></i></a>-->
                </td>
                </tr>
                <?php

            }
 echo "</table></div>";
}
        else{
           echo "<br> <br><p class='alert alert-danger'>PROPUESTAS SIN ESTATUS</p>";
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
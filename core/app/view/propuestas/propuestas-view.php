    <script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
        <h1>Lista de Propuestas </h1>
   
<ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/propuestas/propuestas"><i class="fa fa-users"></i> Propuestas</a>
                            </li>
                           
                        </ol>

 <br>  <br>
 
           <?php     
            
           $zona=UserData::getById($_SESSION["user_id"])->zona;
            $cct=UserData::getById($_SESSION["user_id"])->username;
           

            if(Core::$user->kind==1|| Core::$user->kind==5||Core::$user->kind==9){
             //Core::alert("entro escuela getByPCCT");
        $propuestas = PropuestasViewData::getByPCCT($cct);
               
                    
        }

      if(Core::$user->kind==1|| Core::$user->kind==2){
               //Core::alert("entro subse getBySems");
        $propuestas = PropuestasViewData::getBySems();
               
                    
        }

                if(Core::$user->kind==1|| Core::$user->kind==3){
                //Core::alert("entro delegacion ");
                    $propuestas = PropuestasViewData::getByDams();
                
        }
                if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
                //Core::alert("entro sup ");
                    $propuestas = PropuestasViewData::getByZona($zona);
                
        } 

                if(Core::$user->kind==1|| Core::$user->kind==6){
                //Core::alert("entro dbg getByBg");
                $propuestas = PropuestasViewData::getByBg();
                
        }
                if(Core::$user->kind==1|| Core::$user->kind==7){
            //Core::alert("entro dbt");
                    $propuestas = PropuestasViewData::getByBt();
                
        }

                if(Core::$user->kind==1|| Core::$user->kind==8){
                //Core::alert("entro dtb ");
                    $propuestas = PropuestasViewData::getByTb();
                
        }
                     if( Core::$user->kind==18){
                        if( Core::$user->zona=='Poniente'){
                            //Core::alert($zona);
                    $propuestas = PropuestasViewData::getBySRegionalBt('BACHILLERATO TECNOLOGICO','Poniente','TECNOLOGICO');
                          }
                    }   
                    if( Core::$user->kind==18){
                        if(Core::$user->zona=='Oriente' ){ 
                       // Core::alert("entro subdireccion regional BG ".Core::$user->kind);
                       $propuestas = PropuestasViewData::getBySRegionalBt('BACHILLERATO TECNOLOGICO','Oriente','TECNOLOGICO');
                        }
                }
                if( Core::$user->kind==18){
                    if( Core::$user->zona=='Valle de Toluca'){
                    //Core::alert("entro subdireccion regioanl BG");
                    $propuestas = PropuestasViewData::getBySRegionalBt('BACHILLERATO TECNOLOGICO','Valle de Toluca','TECNOLOGICO');
                    }
                }
                if( Core::$user->kind==17  ){
                    if( Core::$user->zona=='Poniente'){
                    //Core::alert("entro subdireccion Poniente B T");
                    $propuestas = PropuestasViewData::getBySRegionalBg('BACHILLERATO GENERAL','Poniente','GENERAL');
                        }
                }
                if( Core::$user->kind==17  ){
                    if(Core::$user->zona=='Oriente' ){ 
               // Core::alert("entro subdireccion regional BT ".Core::$user->kind);
               $propuestas = PropuestasViewData::getBySRegionalBg('BACHILLERATO GENERAL','Oriente','GENERAL');
                    }
                }
                if( Core::$user->kind==17 ){
                    if(Core::$user->zona=='Valle de Toluca'){
                //Core::alert("entro subdireccion regional VT BT");
                $propuestas = PropuestasViewData::getBySRegionalBg('BACHILLERATO GENERAL','Valle de Toluca','GENERAL');

                    }
             }

             if( Core::$user->kind==19){
                if(Core::$user->zona=='Valle de Mexico' ){ 
               
                    $propuestas = PropuestasViewData::getBySRegionalTb('TELEBACHILLERATO','Valle de Mexico');
                }
        }
        if( Core::$user->kind==19){
           if(Core::$user->zona=='Valle de Toluca'){
            $propuestas = PropuestasViewData::getBySRegionalTb('TELEBACHILLERATO','Valle de Toluca');
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

              <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4||Core::$user->kind==5
              ||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
            <th style="text-align: center">Numero de Plaza Disponible</th>
             <?php endif;?>
            <th style="text-align: center">Zona Escolar</th>
            <th style="text-align: center">CCT</th>
            <th style="text-align: center">Nombre CCT</th>
            
            <th style="text-align: center">Puesto</th>
            <th style="text-align: center">HORAS</th>
       
            <th style="text-align: center">CSP Propuesta</th>
          


            <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19):?>
            <th style="text-align: center">Nombre Propuesta</th>
             <?php endif;?>
           
            <th style="text-align: center">Fecha Inicio</th>
            <th style="text-align: center">Fecha Termino</th>
            <?php if(Core::$user->kind==2):?>
            <th style="text-align: center">Motivo Plaza</th>
            <?php endif;?>
            <th></th>
            <th></th>

            </thead>
            <?php
            foreach($propuestas as $propuesta){
                ?>
                <tr>
                 <td style="width:25px;">
                <a href="./?view=/propuestas/showpropuesta&id=<?=$propuesta->Id_Disponible;?>" class="btn btn-xs btn-default" title="VER PROPUESTA"><i class="fa fa-eye"></i></a>
                
                     <?php if(Core::$user->kind==2||Core::$user->kind==3
                     ||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
                <td><?php echo $propuesta->Num_Plaza; ?></td>
                 <?php endif;?>
                  <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19):?>
                     <td><?php echo $propuesta->APaterno." ".$propuesta->AMaterno." ".$propuesta->Nombre; ?></td>
                     <?php endif;?>

                <td><?php echo $propuesta->Zona; ?></td>
                <td><?php echo $propuesta->Cct; ?></td>
                <td><?php echo $propuesta->Nombre_Cct; ?></td>
                <td><?php echo $propuesta->Tipo_Puesto;?></td>
                <td><?php echo $propuesta->Horas; ?></td>
              
                <td><?php echo $propuesta->PCve_Emp; ?></td>
                
                 <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19):?>
                     <td><?php echo $propuesta->PA_Paterno." ".$propuesta->PA_Materno." ".$propuesta->PNombre; ?></td>
                     <?php endif;?>
                <td><?php echo $propuesta->Fec_Inicio; ?></td> 
                <td><?php echo $propuesta->Fec_Termino; ?></td>
                <?php if(Core::$user->kind==2):?>
                <td><?php echo $propuesta->Motivo; ?></td>     
                <?php endif;?>                 
                <td>
                <?php
 
                ?>
                </td>
                <td style="width:160px,center">
                <a href="./?action=/propuestas/validarpropuesta&id=<?=$propuesta->Id_Propuesta;?>" class="btn btn-xs btn-success"><i class="fa fa-check"></i></a>

               <!-- <a data-toggle="modal" href="#newModal" class="btn btn-xs btn-danger">  <i class="fa fa-remove"></i></a>-->
                </td>
                </tr>
                <?php

            }
 echo "</table></div>";
}
        else{
           echo "<br> <br><p class='alert alert-danger'>NO HAY PROPUESTAS POR VALIDAR</p>";
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
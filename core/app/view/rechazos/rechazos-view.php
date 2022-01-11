    <script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
        <h1>Lista de Rechazos </h1>
   
<ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/rechazos/rechazos"><i class="fa fa-chain-broken"></i> Rechazos</a>
                            </li>
                           
                        </ol>

 <br>  <br>

           <?php     
           
           $cct=UserData::getById($_SESSION["user_id"])->zona; 
           $cct2=UserData::getById($_SESSION["user_id"])->username;           


      if(Core::$user->kind==1|| Core::$user->kind==2){
                //Core::alert("entro subse ");
        $propuestas = RespuestasViewData::getBySems();
               
        }

                if(Core::$user->kind==1|| Core::$user->kind==5|| Core::$user->kind==9){
           //Core::alert("entro escuela getByRCct");
                   // $propuestas = PropuestasViewData::getByRCct($cct2);
                        $propuestas = RespuestasViewData::getByRCct($cct2);
                    
                 
        }

                if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
                //Core::alert("entro sup getByRZona");
                    $propuestas = RespuestasViewData::getByRZona($cct);
                
        }

                if(Core::$user->kind==1|| Core::$user->kind==6){
                //Core::alert("entro dbg getByRBg ");
                $propuestas = RespuestasViewData::getByRBg();
                
        }

                if(Core::$user->kind==1|| Core::$user->kind==7){
                //Core::alert("entro dbt");
                    $propuestas = RespuestasViewData::getByRBt();
                
        }
                 if(Core::$user->kind==1|| Core::$user->kind==8){
                //Core::alert("entro dtb getByRTb");
                    $propuestas = RespuestasViewData::getByRTb();
                
        }
        if( Core::$user->kind==18){
          if( Core::$user->zona=='Poniente'){
              //Core::alert($zona);
      $propuestas = RespuestasViewData::getByRegional('Poniente','TECNOLOGICO');
            }
      }   
      if( Core::$user->kind==18){
          if(Core::$user->zona=='Oriente' ){ 
         // Core::alert("entro subdireccion regional BG ".Core::$user->kind);
         $propuestas = RespuestasViewData::getByRegional('Oriente','TECNOLOGICO');
          }
  }
  if( Core::$user->kind==18){
      if( Core::$user->zona=='Valle de Toluca'){
      //Core::alert("entro subdireccion regioanl BG");
      $propuestas = RespuestasViewData::getByRegional('Valle de Toluca','TECNOLOGICO');
      }
  }
  if( Core::$user->kind==17  ){
      if( Core::$user->zona=='Poniente'){
      //Core::alert("entro subdireccion Poniente B T");
      $propuestas = RespuestasViewData::getByRegional('Poniente','GENERAL');
          }
  }
  if( Core::$user->kind==17  ){
      if(Core::$user->zona=='Oriente' ){ 
 // Core::alert("entro subdireccion regional BT ".Core::$user->kind);
 $propuestas = RespuestasViewData::getByRegional('Oriente','GENERAL');
      }
  }
  if( Core::$user->kind==17 ){
      if(Core::$user->zona=='Valle de Toluca'){
  //Core::alert("entro subdireccion regional VT BT");
  $propuestas = RespuestasViewData::getByRegional('Valle de Toluca','GENERAL');

      }
}

if( Core::$user->kind==19){
  if(Core::$user->zona=='Valle de Mexico' ){ 
 
      $propuestas = RespuestasViewData::getByRegional('Valle de Mexico','TELEBACHILLERATO');
  }
}
  if( Core::$user->kind==19){
    if(Core::$user->zona=='Valle de Toluca'){
      $propuestas = RespuestasViewData::getByRegional('Valle de Toluca','TELEBACHILLERATO');
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

            </thead>
            <?php
            foreach($propuestas as $propuesta){
                ?>
                <tr>
                 <td style="width:25px;">
                <a href="./?view=/rechazos/showrechazos&id=<?=$propuesta->Id_Propuesta;?>" class="btn btn-xs btn-default" title="VER RECHAZO"><i class="fa fa-eye"></i></a>
                
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
                <td><?php echo $propuesta->Puesto." ".$propuesta->Tipo_Horas; ?></td>
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
                
                </tr>
                <?php

            }
 echo "</table></div>";
}
        else{
           echo "<br> <br><p class='alert alert-danger'>NO HAY RECHAZOS POR CONTESTAR</p>";
        }
?>
    </div>

 </section>





  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Rechazo</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar">


  <div class="input-group ">
    <span class="input-group-addon" title="ID"><i class="fa fa-bars fa-fw"></i></span>
    <input type="text" name="id_propuesta" class="form-control" value="<?php echo $propuesta->Id_Propuesta;?>" readonly="readonly"  style="width:40px;height:33px" >
  </div>
   
                 <br>  
    <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-spinner fa-fw"></i></span>
                   
                                    <select name="rechazo" class="form-control" required >
                                        <option value="">-- TIPO RECHAZO --</option>
                                        <option value="rechazo">RECHAZO</option>
                                        <option value="modificacion">MODIFICACION</option>
                                </select>
    </div>      
    <br>  
     <div class="input-group ">
          <span class="input-group-addon" title="MOTIVO"><i class="fa fa-bars fa-fw"></i></span>
           <textarea name="motivo" class="form-control"  required placeholder="Motivo"></textarea>  
     </div>                      
  
 <br>
  
  <button type="submit" class="btn btn-default">Agregar Rechazo</button>
  <br>
</form>
       </div>
 </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<script src="bootstrap/js/bootstrap.min.js"></script>
<script>

  $("#agregar").submit(function(e){
    e.preventDefault();

    $.post("./?action=/rechazos/addrechazo",$("#agregar").serialize(),function(data){
    });
    //alert();
    $("#agregar")[0].reset();
    $('#newModal').modal('hide');
    location.reload(false);
   
  });
</script>



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
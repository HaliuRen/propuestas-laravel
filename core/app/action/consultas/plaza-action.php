<?php
//$go = $_GET["go"];

if (!empty($_POST["docente_name"])) {

    //Core::alert("si trae info");




    $search  ="";
     $search=$_POST["docente_name"];
    //Core::alert($_POST["plaza"]);

    $plazas = DisponibleData::getLikeP($search);


     if(count($plazas)>0){
                 
                ?>
            <h3>Resultados de la Busqueda</h3>
            <div class="box box-primary">
            <table class="table table-bordered datatable table-hover" >
            <thead>
                <th></th>
                <th style="text-align: center">Numero de Plaza Disponible</th>
                <th style="text-align: center">CSP</th>
                <th style="text-align: center">CURP</th>
                <th style="text-align: center">NOMBRE</th>
                <th style="text-align: center">CCT</th>
                
                <th style="text-align: center">ZONA</th>
                <th style="text-align: center">CATEGORIA</th>
                <th style="text-align: center">MOTIVO</th>
                <th style="text-align: center">PROPUESTA</th>
                <th style="text-align: center">ORIGEN</th>
                <th></th>
            </thead>


            <?php
            foreach($plazas as $plaza){
                ?>
            <tr>
                <?php if($plaza->Bnd_Propuesta ==1){?>
                <td style="width:25px;">
                <a href="./?view=/consultas/consulta-plazas&id=<?=$plaza->Id;?>" class="btn btn-xs btn-default" title="VER PROPUESTA"><i class="fa fa-eye"></i></a>
                 <?php }else{ ?> <td></td>  <?php 

                    } ?>
                <td> <?php echo $plaza->Num_Plaza;?></td>
                <td> <?php echo $plaza->Cve_Emp;?></td>
                <td> <?php echo $plaza->Curp;?></td>
                <td><?php echo $plaza->APaterno." ".$plaza->AMaterno." ".$plaza->Nombre;?></td>
                <td> <?php echo $plaza->Cct;?></td>
             
                <td> <?php echo $plaza->Zona;?></td>
                <td> <?php echo $plaza->tipo_puesto;?></td>
                <td> <?php echo $plaza->Motivo;?></td>
                <td style="text-align: center">   
                      <?php if($plaza->Bnd_Propuesta ==1){?>
                        <i class="glyphicon glyphicon-ok"></i>
                    <?php }else{ if($plaza->Bnd_Propuesta ==0) ?>
                        <i class="glyphicon glyphicon-remove"></i>
                        <?php 

                    } ?>   
                 </td>    
                      <td> <?php echo $plaza->Origen;?></td>              
              
                </tr>
                <?php

            }?>
     </table>
    </div> 
    <br>
    <?php
    }
            else{

               echo "<br> <br><p class='alert alert-danger'>PLAZA SIN ESTATUS</p>";
            }
    
    
            $rechazos = RechazoData::getSems($plaza->Id);


            if(count($rechazos)>0){
                        //echo "si hay propuestas"
                       ?>
                   <h3>RECHAZOS QUE HAN TENIDO LAS PROPUESTAS ASOCIADAS A LA PLAZA DISPONIBLE </h3>
                   <div class="box box-primary">
                   <table class="table table-bordered datatable table-hover" >
                   <thead>
                       <th>ORIGEN</th>
                        <th>TIPO DE RECHAZO</th>
                        <th>MOTIVO DE RECHAZO</th>
                        <th>RESPUESTA</th>
                       
                        
                   </thead>
       
       
                   <?php
                   foreach($rechazos as $rechazo){
                       ?>
                   <tr>
                   <td><?php echo $rechazo->Origen; ?></td>   
                   <td><?php echo $rechazo->Tipo_Rechazo; ?></td>
                   <td><?php echo $rechazo->Motivo_Rechazo; ?></td>
                   <td><?php echo $rechazo->Respuesta;?></td>    
                     
                       </tr>
                       <?php
       
                   }?>
            </table>
           </div> 
           <br>
           <?php
           }
                   else{
       
                      echo "<br> <br><p class='alert alert-danger'>PLAZA SIN ESTATUS</p>";
                   }
           


    


}
 

if (!empty($_POST["plaza"])) {
 //Core::alert("si trae info ".$_POST["plaza"]);


$search  ="";
     $search=$_POST["plaza"];
   // Core::alert($_POST["plaza"]);

    $propuestas = PropuestaData::getLikeP($search);

     if(count($propuestas)>0){
                 //echo "si hay propuestas"
                ?>
            <h3>Resultados de la Busqueda</h3>
            <div class="box box-primary">
            <table class="table table-bordered datatable table-hover" >
            <thead>
                <th></th>
                <th style="text-align: center">CSP</th>
                 
                <th style="text-align: center">NOMBRE</th>
                <th style="text-align: center">BND_SUP</th>
                <th style="text-align: center">BND_RSUP</th>
                <th style="text-align: center">BND_DGEMS</th>
                <th style="text-align: center">BND_RDGEMS</th>
                <th style="text-align: center">BND_REGIONAL</th>
                <th style="text-align: center">BND_R-REGIONAL</th>
                <th style="text-align: center">BND_SEMS</th>
                <th style="text-align: center">BND_RSEMS</th>
                <th style="text-align: center">ORIGEN</th>
                <th style="text-align: center">SUBS</th>
                <th style="text-align: center">ENTREGA</th>
                
            </thead>


            <?php
            foreach($propuestas as $propuesta){
                ?>
            <tr>
                
                <td style="width:25px;">
                <a href="./?view=/consultas/consulta-plazas&id=<?=$propuesta->Disponible_Id;?>" class="btn btn-xs btn-default" title="VER PROPUESTA"><i class="fa fa-eye"></i></a>
                
               
                <td> <?php echo $propuesta->Cve_Emp;?></td>
               
                <td><?php echo $propuesta->APaterno." ".$propuesta->AMaterno." ".$propuesta->Nombre;?></td>
                <td><?php echo $propuesta->Bnd_Supervision;?></td>
                <td><?php echo $propuesta->Bnd_RSupervision;?></td>
                    
                 <?php if($propuesta->Zona=='BG'){?>   
                    <td><?php echo $propuesta->Bnd_Dbg;?></td>
                    <td><?php echo $propuesta->Bnd_RDbg;?></td>
                 <?php } ?>  
                <?php if($propuesta->Zona=='BT'){?>   
                    <td><?php echo $propuesta->Bnd_Dbt;?></td>
                    <td><?php echo $propuesta->Bnd_RDbt;?></td>
                 <?php } ?>
                  <?php if($propuesta->Zona=='TB'){?>   
                    <td><?php echo $propuesta->Bnd_Dtb;?></td>
                    <td><?php echo $propuesta->Bnd_RDtb;?></td>
                 <?php } ?>
                 <td><?php echo $propuesta->Bnd_SRegional;?></td>
                <td><?php echo $propuesta->Bnd_RSRegional;?></td>
                <td><?php echo $propuesta->Bnd_Sems;?></td>
                <td><?php echo $propuesta->Bnd_RSems;?></td>
                <td><?php echo $propuesta->Origen;?></td>
                <td><?php echo $propuesta->Zona;?></td>
                <td style="text-align: center">   
                   
                     <?php if($propuesta->entrega>0){?>
                        <i class="glyphicon glyphicon-ok"></i>
                    <?php }else{ if($propuesta->entrega ==0) ?>
                        <i class="glyphicon glyphicon-remove"></i>
                        <?php 

                    } ?>   
                 </td>    
                      <td> </td>              
              
                </tr>
                <?php

            }?>
     </table>
    </div>
    <br>
    <?php
    }
            else{

               echo "<br> <br><p class='alert alert-danger'>PROPUESTA SIN ESTATUS</p>";
            }
}


?>

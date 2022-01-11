    <script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
        <h1>Generar PDF </h1>
   
<ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                          
                           
                        </ol>

 <br>  <br>
 
           <?php     
            $zona=UserData::getById($_SESSION["user_id"])->zona;
          

                if(Core::$user->kind==1|| Core::$user->kind==8|| Core::$user->kind==2){
               // Core::alert("entro dtb ");
                    $propuestas = ViewPdfData::getPdfTb();
                
        }
        if(Core::$user->kind==10){
                //echo("entro sup getEstatusZona");
                    $propuestas = ViewPdfData::getPdfZona($zona);
                
        }
         
        if(count($propuestas)>0){
             //echo "si hay propuestas"
            ?>
            <div class="box box-primary">
            <table class="table table-bordered datatable table-hover" >
            <thead>
            <th></th>
              <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8):?>
            <th style="text-align: center">Nombre Plaza Disponible</th>
             <?php endif;?>

           <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7):?>
            <th style="text-align: center">Numero de Plaza Disponible</th>
             <?php endif;?>
            <th style="text-align: center">Zona Escolar</th>
            <th style="text-align: center">CCT</th>
            <th style="text-align: center">Nombre CCT</th>
             <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7):?>
            <th style="text-align: center">Puesto</th>
             <?php endif;?>
            <th style="text-align: center">Categoria</th>
            <th style="text-align: center">Horas</th>
            <th style="text-align: center">CSP Propuesta</th>
            <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8):?>
            <th style="text-align: center">Nombre Propuesta</th>
             <?php endif;?>
            <th style="text-align: center">Curp Propuesta</th>
            <th style="text-align: center">PDF</th>
            <th></th>
            <th></th>
            </thead>
            <?php
            foreach($propuestas as $propuesta){
                ?>
                <tr>
                 <td style="width:25px;">
                <a href="./?view=/pdf/show_pdf&id=<?=$propuesta->Id_Disponible;?>" class="btn btn-xs btn-default" title="VER PROPUESTA"><i class="fa fa-eye"></i></a>
                 <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7):?>
                <td><?php echo $propuesta->Num_Plaza; ?></td>
                 <?php endif;?>
                  <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8):?>
                     <td><?php echo $propuesta->APaterno." ".$propuesta->AMaterno." ".$propuesta->Nombre; ?></td>
                     <?php endif;?>
                <td style="text-align: center"><?php echo $propuesta->Zona; ?></td>
                <td style="text-align: center"><?php echo $propuesta->Cct; ?></td>
                <td style="text-align: center"><?php echo $propuesta->Nombre_Cct; ?></td>
                <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7):?>
                <td style="text-align: center" ><?php echo $propuesta->Puesto;?></td>
                <?php endif;?>
                 <td style="text-align: center" ><?php echo $propuesta->Tipo_Puesto;?></td>
                <td style="text-align: center"><?php echo $propuesta->Horas; ?></td>
               
                <td><?php echo $propuesta->PCve_Emp; ?></td>
                
                   <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8):?>
                     <td><?php echo $propuesta->PA_Paterno." ".$propuesta->PA_Materno." ".$propuesta->PNombre; ?></td>
                     <?php endif;?>
                <td style="text-align: center"><?php echo $propuesta->PCurp; ?></td> 
                <td style="text-align: center">   
                     <a href="./?action=/pdf/newpdftb&id=<?=$propuesta->Id_Disponible;?>&id2=<?=$propuesta->PCurp;?>" class="btn btn-xs btn-default" title="GENERAR PDF"><i class="fa fa-file-pdf-o"></i></a>
                    </td>                  
                <td>
                <?php
  
                ?>
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
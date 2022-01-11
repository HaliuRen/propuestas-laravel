<script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
    
    <form role="form" method="post" action="./?action=/programacion/validar">
    <div class="input-group " style="visibility:hidden;">
                                  <span class="input-group-addon" title="CCT"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cct" class="form-control"  
                                value="<?php echo $_GET["cct"]  ?>" readonly>
                            </div>

 
        <div class="row">
                    <div class="col-lg-12">
                         
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/programacion/validarcaptura"><i class="fa fa-group"></i> Validar Plantilla</a>
                            </li>
                                                      
                            <li class="active">
                                <i class="fa fa-pencil-square-o "></i> Validar Plantilla
                            </li>
                        </ol>
                    </div>
                </div>
                        </ol>

<h2>Los resultados de la matricula se obtinenen de MIGE Control Escolar, si la información no es correcta 
es necesario actualizarla, por favor ingresar  a : </h2>
<a href="http://miges.edugem.gob.mx" target="_blank"> 	<img src="./storage/mige.png" width="200" height="60">   </a>


           <?php     
          
           $cct=$_GET["cct"];
 $casos = ProgramacionData::getMatricula($cct);
     
 if(count($casos)>0){
              //echo "si hay propuestas"
               
             ?>
         <h3>Resultado Matricula y Grupos</h3>
         <div class="box box-primary">
         <table class="table table-bordered   table-hover" >
         <thead>
              
             <th style="text-align: center">CCT</th>
             <th style="text-align: center">TURNO</th>
             <th style="text-align: center">NOMBRE_ESCUELA</th>
             <th style="text-align: center">MUNICIPIO</th>
             <th style="text-align: center">MATRICULA GRUPO 1</th>
             <th style="text-align: center">MATRICULA GRUPO 2</th>
             <th style="text-align: center">MATRICULA GRUPO 3</th>
             <th style="text-align: center">TOTAL MATRICULA</th>
             <th style="text-align: center">GRUPO 1 (CASOS)</th>
             <th style="text-align: center">GRUPO 2 (CASOS)</th>
             <th style="text-align: center">GRUPO 3 (CASOS)</th>
             <th style="text-align: center">TOTAL GRUPOS</th>
            
         </thead>

         <?php
         foreach($casos as $caso){
             ?>
         <tr>
            
             <td> <?php echo $caso->CCT;?></td>
             <td> <?php echo $caso->TURNO;?></td>
             <td> <?php echo $caso->NOMBRE_ESCUELA;?></td>
             <td> <?php echo $caso->MUNICIPIO?></td>
             <td> <?php echo $caso->mgrupo_1;?></td>
          
             <td> <?php echo $caso->mgrupo_2;?></td>
             <td> <?php echo $caso->mgrupo_3;?></td>
             <td> <?php echo $caso->Total_mat;?></td>
             <td> <?php echo $caso->grupo_1;?></td>
          
             <td> <?php echo $caso->grupo_2;?></td>
             <td> <?php echo $caso->grupo_3;?></td>
             <td> <?php echo $caso->Total_grupos;?></td>
                         
           
             </tr>
             <?php

         }?>
  </table>

 </div>
 <br>
 <?php
 }
         else{

            echo "<br> <br><p class='alert alert-danger'>NO HAY INFORMACION EN MIGE</p>";
         }
       
?>

 
 

    </div>

    
    
<div align="center">
      <button  type='submit'  class="btn btn-lg btn-success "  id="guardar"
        title="VALIDAR INFORMACION"><i class="fa fa-check">   Validar Plantilla</i></button> 
 



 <?php if(Core::$user->kind==1 || 
                    Core::$user->kind==4|| Core::$user->kind==6|| Core::$user->kind==7 || 
                    Core::$user->kind==17|| Core::$user->kind==18):?>
                     <a  data-toggle="modal" href="#newModal" class="btn btn-lg btn-warning" 
                     title="ENVIAR MODIFICACION"><i class="fa fa-remove">  Enviar Modificacion</i></a>
                   <?php endif;?>
</div>

 
    <div class="col-lg-6">
          <h1>Lista de Puestos Semestre 1</h1>
  
               <?php     
                    
            
                         // Core::alert("entro subse rechazo getBySems");
                  $grados = PlantillaData::getPlantilla($cct);
                 

              
                  if(count($grados)>0){
                      // si hay usuarios
                      ?>
                    
            <div class="box box-primary">
                        
                      <table class="table table-bordered  table-hover">
                      <thead>
                      <th style="visibility:hidden;">ID</th>   
                     
                      <th>CVE_EMP</th>
                      <th>PUESTO</th>
                      <th>HORAS</th>
                      <th>ESTATUS PLAZA</th>
                     
                       
                      </thead>
                      <?php
                      foreach($grados as $grado){
                          ?>
                          <tr>
                            <td style="visibility:hidden;"><?php echo $grado->id;?></td>
                         
                          <td><?php echo $grado->cve_emp;?></td>
                       
                          <td><?php echo $grado->tipo_puesto;?></td>
                          <td><?php echo $grado->horas;?></td>
                          <td><?php echo $grado->estatus_plaza;?></td>
                         
                 
                            
                        </tr>
                          <?php
                      }
                      
           echo "</table></div>";
                  }
                  else{
                    echo '<p class="alert alert-warning" role="alert">No hay plantilla capturada en Semestre 1 ';
                    
                    }
          ?>

</div>
 
  
<div class="col-lg-6">  

          <h1>Lista de Puestos Semestre 2</h1>
  
               <?php     
                    
            
                         // Core::alert("entro subse rechazo getBySems");
                  $grados = PlantillaData::getPlantilla2($_GET["cct"]);
                 

              
                  if(count($grados)>0){
                      // si hay usuarios
                      ?>
                      
            <div class="box box-primary">
              
  
                        
                      <table class="table table-bordered  table-hover">
                      <thead>
                      <th style="visibility:hidden;">ID</th>   
                     
                      <th>CVE_EMP</th>
                      <th>PUESTO</th>
                      <th>HORAS</th>
                      <th>ESTATUS PLAZA</th>
                  
                       
                      </thead>
                      <?php
                      foreach($grados as $grado){
                          ?>
                          <tr>
                            <td style="visibility:hidden;"><?php echo $grado->id;?></td>
                         
                          <td><?php echo $grado->cve_emp;?></td>
                       
                          <td><?php echo $grado->tipo_puesto;?></td>
                          <td><?php echo $grado->horas;?></td>
                          <td><?php echo $grado->estatus_plaza;?></td>
                          
                 
                            
                        </tr>
                          <?php
                      }
                      
           echo "</table></div>";
                  }
                  else{
                    echo '<p class="alert alert-warning" role="alert">No hay plantilla capturada en Semestre 2 ';
                    
                    }
          ?>

</div>
       
 
 
 
   
 </form>

</section>
 
 
  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Modificacion</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar">


         <div class="input-group ">
            <span class="input-group-addon" title="Tipo Rechazo"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rechazo" class="form-control"   
                                value="Modificacion" readonly="readonly">
                            </div>
    <br>  
     <div class="input-group ">
          <span class="input-group-addon" title="MOTIVO"><i class="fa fa-bars fa-fw"></i></span>
           <textarea name="motivo" class="form-control"  required placeholder="Motivo"></textarea>  
     </div>                      
  
 
  <div class="input-group " style="visibility:hidden;">
    <span class="input-group-addon" title="cct"><i class="fa fa-bars fa-fw"></i></span>
    <input type="text" name="cct" id="cct" class="form-control" value="<?php echo $grado->cct;?>"
     readonly="readonly"  style="width:40px;height:33px;visibility:hidden; " >
  </div>
  
  <button type="submit" class="btn btn-default">Agregar Modificacion</button>
  <br> 
</form>
       </div>
 </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



  
<script>

  $("#agregar").submit(function(e){
    e.preventDefault();

    $.post("./?action=/programacion/modificacion",$("#agregar").serialize(),function(data){
    });
    //alert($.post);
    $("#agregar")[0].reset();
    $('#newModal').modal('hide');
   // location.reload(false);
    window.location="./?view=/programacion/validarcaptura";
  });
</script>


 
 
 
<script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
    
    <form role="form" method="post" action="./?action=/programacion/guardar">
    <div class="input-group "  style="visibility: hidden;">>
                                  <span class="input-group-addon" title="CCT"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cct" id="cct" class="form-control"  
                                value="<?php echo $user=UserData::getById($_SESSION["user_id"])->username; ?>" readonly>
                            </div>

        <div class="row">
                    <div class="col-lg-12">
                         
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                                                      
                            <li class="active">
                                <i class="fa fa-pencil-square-o "></i> Capturar Plantilla
                            </li>
                        </ol>
                    </div>
                </div>
                        </ol>

<h2>Los resultados de la matricula se obtinenen de MIGE Control Escolar, si la información no es correcta 
es necesario actualizarla, por favor ingresar  a : </h2>
<a href="http://miges.edugem.gob.mx" target="_blank"> 	<img src="./storage/mige.png" width="200" height="60">   </a>


           <?php     
           $cct=UserData::getById($_SESSION["user_id"])->username;
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
 

<?php     
        
 $captura = PlantillaData::getBndCaptura($cct);
 
 if(count($captura)==0){
   ?>

    </div>

    <div align="center">
      <a data-toggle="modal" href="#puestos"  class="btn btn-lg btn-primary "  
       title="AGREGAR PUESTOS"><i class="fa fa-plus">   AGREGAR PUESTOS SEMESTRE 1</i></a>

       <button  type='submit'  class="btn btn-lg btn-success "  id="guardar"
        title="GUARDAR INFORMACION"><i class="fa fa-check">   ENVIAR</i></button> 

 
      <a data-toggle="modal" href="#puestos2"  class="btn btn-lg btn-info"  
       title="AGREGAR PUESTOS"><i class="fa fa-plus">   AGREGAR PUESTOS SEMESTRE 2</i></a>


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
                      <th>ELIMINAR</th>
                       
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
                          <td style="width:25px;">
                          <button type="button"    class="btn btn-danger deleteest">Eliminar</button> </td>
                 
                            
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
                  $grados = PlantillaData::getPlantilla2($cct);
                 

              
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
                      <th>ELIMINAR</th>
                       
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
                          <td style="width:25px;">
                          <button type="button"    class="btn btn-danger deleteest">Eliminar</button> </td>
                 
                            
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
          
          <?php }
          
           
          else{?>

            <div class="row">   
    <div class="col-md-3">                      
                <a href="./report/plantillaEscuela-xlsx.php?&cct=<?php 
                 $cct=UserData::getById($_SESSION["user_id"])->username;
                echo $cct?>" 
                    class="btn  btn-success"><i class="fa fa-file-excel-o">
                    </i>&nbsp;&nbsp;&nbsp;Generar Excel (.xlsx)
                </a>
    </div>
             <div class="col-sm-6"></div>  
            <i class="fa fa-spinner fa-fw"></i> TOTAL DE  REGISTROS&nbsp;&nbsp;
            <?php 
            $cct=UserData::getById($_SESSION["user_id"])->username;
            $casos=PlantillaData::getExcelEscuela($cct);
            echo count($casos) ?> 

                
</div>      
           <br> 
           <?php
           //echo  $user=UserData::getById($_SESSION["user_id"])->username;
                              echo '<p class="alert alert-warning" role="alert">YA REALIZARON LA CAPTURA DE LA PLANTILLA, GRACIAS';
                            }
                              
          ?>     
        </div>  
 
</section>
 


<div class="modal fade" id="puestos" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Puesto Semestre 1</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar" name="agregar">
 
                   
                             <div class="input-group ">
                                  <span class="input-group-addon" title="CCT"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cct" class="form-control"  
                                value="<?php echo $user=UserData::getById($_SESSION["user_id"])->username; ?>" readonly>
                            </div>
                            <br>
                          
                            <div class="input-group ">
                                  <span class="input-group-addon" title="ZONA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="zona" class="form-control"  value="<?php echo $user=UserData::getById($_SESSION["user_id"])->zona; ?>" readonly>
                            </div>
                     


          <br>

          <div class="input-group ">
                  <span class="input-group-addon" title="CLAVE SERVIDOR PUBLICO"><i class="fa fa-bars fa-fw"></i></span> 
                  <input type="text" name="cve_emp" class="form-control"  pattern="[0-9]{9}"
                  title="Debe de ser numerico de 9 posiciones" required>
          </div>
          <br>
          <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                                                
                                <?php
                                $puestos = PuestosData::getPuestoAll();
                                      ?>
                                      <?php if(count($puestos)>0):?>
                                      <select name="puesto" id="puesto" class="form-control" required onchange = "ver(this)">
                                              <option value="">-- PUESTO --</option>
                                          <?php foreach($puestos as $puesto):?>
                                              <option value="<?=$puesto->codigo;?>"><?=$puesto->tipo_puesto;?></option>
                                          
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                             
                            </div>  
         <br>
           <div class="input-group" id="horas" style='display:none;'>
            <span class="input-group-addon" title="HORAS"><i class="fa fa-bars fa-fw"></i></span>
              <input type="number" min="1" max="45" style="width:100px;height:30px" 
              maxlength="2" name="horas" class="form-control"  
              placeholder="HORAS *" >
         </div>
            
          <br>
          <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                              
                                    <select name="eplaza" class="form-control" required>
                                        <option value="">-- Estatus Plaza --</option>
                                         <option value="Base">Base</option>
                                         <option value="Eventual">Eventual</option>
                                </select>
          </div>
            <br>
           
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="add-data"    class="btn btn-primary">Agregar Puesto</button>
          </div>
         
 
</form>
       </div>
 </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
 


<div class="modal fade" id="puestos2" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Puesto Semestre 2</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar2" name="agregar2">
 
                   
                             <div class="input-group ">
                                  <span class="input-group-addon" title="CCT"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cct" class="form-control"  
                                value="<?php echo $user=UserData::getById($_SESSION["user_id"])->username; ?>" readonly>
                            </div>
                            <br>
                          
                            <div class="input-group ">
                                  <span class="input-group-addon" title="ZONA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="zona" class="form-control"  value="<?php echo $user=UserData::getById($_SESSION["user_id"])->zona; ?>" readonly>
                            </div>
                     


          <br>

          <div class="input-group ">
                  <span class="input-group-addon" title="CLAVE SERVIDOR PUBLICO"><i class="fa fa-bars fa-fw"></i></span> 
                  <input type="text" name="cve_emp" class="form-control"  pattern="[0-9]{9}"
                  title="Debe de ser numerico de 9 posiciones" required>
          </div>
          <br>
          <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                                                
                                <?php
                                $puestos = PuestosData::getPuestoAll();
                                      ?>
                                      <?php if(count($puestos)>0):?>
                                      <select name="puesto" id="puesto" class="form-control" required 
                                      onchange = "ver2(this)">
                                              <option value="">-- PUESTO --</option>
                                          <?php foreach($puestos as $puesto):?>
                                              <option value="<?=$puesto->codigo;?>"><?=$puesto->tipo_puesto;?></option>
                                          
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                             
                            </div>  
         <br>
           <div class="input-group" id="horas2" style='display:none;'>
            <span class="input-group-addon" title="HORAS"><i class="fa fa-bars fa-fw"></i></span>
              <input type="number" min="1" max="45" style="width:100px;height:30px" 
              maxlength="2" name="horas2" class="form-control"  
              placeholder="HORAS *" >
         </div>
            
          <br>
          <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                              
                                    <select name="eplaza" class="form-control" required>
                                        <option value="">-- Estatus Plaza --</option>
                                         <option value="Base">Base</option>
                                         <option value="Eventual">Eventual</option>
                                </select>
          </div>
            <br>
           
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="add-data"    class="btn btn-primary">Agregar Puesto</button>
          </div>
         
 
</form>
       </div>
 </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

    <!-- ELIMINAR*******************************-->
 
 
<div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">         
          <h4 class="modal-title" id="exampleModalLabel">Eliminar Puesto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    
        <form action ="./?action=/programacion/delpuesto" method="POST">
           <div class="modal-body">
                
         <div class="form-group " style="visibility: hidden;">

            <input type="text" name="iddel" id ="iddel" class="form-control"   readonly="readonly">
          </div>
          <h3>¿Estás Seguro de Eliminar el Puesto?</h3>
          
             <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" name="deldataes"   class="btn btn-primary">Eliminar</button>
          </div>
         </div>
        </form>
    </div>      
    </div>
  </div>
 



                
<script type="text/javascript">
function ver(sel)
{
 if (sel.value==="A0220961"||sel.value==="A0220882"){
            
           $("#horas").show();

      }else{

           $("#horas").hide();
           

      }

}  

function ver2(sel)
{
 if (sel.value==="A0220961"||sel.value==="A0220882"){
            
           $("#horas2").show();

      }else{

           $("#horas2").hide();
           

      }

}  
</script>

<script>
$("#agregar").submit(function(e){
    e.preventDefault();

    $.post("./?action=/programacion/addplantilla",$("#agregar").serialize(),function(data){
    });
    //alert("se agrego puesto");
    $("#agregar")[0].reset();
    $('#puestos').modal('hide');

    window.location.reload(true);
   //console.log('#agregar');
    
  });

  $("#agregar2").submit(function(e){
    e.preventDefault();

    $.post("./?action=/programacion/addplantillas2",$("#agregar2").serialize(),function(data){
    });
    //alert("se agrego puesto");
    $("#agregar2")[0].reset();
    $('#puestos2').modal('hide');

    window.location.reload(true);
   //console.log('#agregar');
    
  });

  

//ELIMINAR *****
 //$('#myModal').on('hidden.bs.modal', function () { location.reload(); }) 
 $(document).ready(function() {
   
   $('.deleteest').on('click', function(){
     
        //window.location.reload();
       $('#delmodal').modal('show');

       $tr = $(this).closest('tr');

       var data = $tr.children("td").map(function(){
         return $(this).text();
       }).get();

//console.log(data);
       $('#iddel').val(data[0]);
   
    
   });
     


}); 
 //window.location="./?view=/rechazos/rechazos";
 

</script> 

 
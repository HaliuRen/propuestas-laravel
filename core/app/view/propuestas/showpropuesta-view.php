<section class="content">
      <?php 
      
      if(Core::$user->kind==1|| Core::$user->kind==2){
                //Core::alert("entro subse getByIdSems");
        $propuesta = PropuestasViewData::getByIdSems($_GET["id"]);
                
                    
        }

        if(Core::$user->kind==1|| Core::$user->kind==5|| Core::$user->kind==9){
               //Core::alert("entro sup getByIdDirector");
                    $propuesta = PropuestasViewData::getByIdDirector($_GET["id"]);
                
        } 

 
                if(Core::$user->kind==1|| Core::$user->kind==3){
                //Core::alert("entro delegacion ");
                    $propuesta = PropuestasViewData::getByIdDams($_GET["id"]);
                
        } 
 
                if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
              // Core::alert("entro sup getByIdSup");
                    $propuesta = PropuestasViewData::getByIdSup($_GET["id"]);
                
        } 

                if(Core::$user->kind==1|| Core::$user->kind==6|| Core::$user->kind==17||Core::$user->kind==12){
              //  Core::alert("entro dbg getByIdBg");
                $propuesta = PropuestasViewData::getByIdBg($_GET["id"]);
                
        } 

                if(Core::$user->kind==1|| Core::$user->kind==7|| Core::$user->kind==18|| Core::$user->kind==13){
                //Core::alert("entro dbt");
                    $propuesta = PropuestasViewData::getByIdBt($_GET["id"]);
                
        } 

                if(Core::$user->kind==1|| Core::$user->kind==8|| Core::$user->kind==19){
                //Core::alert("entro dtb getByIdTb");
                    $propuesta = PropuestasViewData::getByIdTb($_GET["id"]);
                
         }

          
       
      ?>

         
 <!--<form role="form" method="post" action="index.php?view=updatedocente" enctype="multipart/form-data">-->
   <form class="form"   enctype="multipart/form-data"    role="form">
                      

          <h1>Resumen Propuesta</h1>
 
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/propuestas/propuestas"><i class="fa fa-user"></i> Propuestas</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-eye"></i> Ver Propuesta <?php echo $propuesta->Num_Plaza;?>
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- /.row -->
   <h1>Plaza Disponible</h1>
                       
                            <br>
                <div class="row">
                    <div class="col-lg-8">
                    

                     <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8):?>
                      
                          <div class="input-group " style="visibility:hidden">
                                  <span class="input-group-addon" title="NUMERO DE PLAZA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="plaza" class="form-control" placeholder="Número de plaza"  pattern="[0-9]{9}" 
                                title="Debe de ser numerico de 9 posiciones" value="<?php echo $propuesta->Num_Plaza;?>">
                            </div>
                            <br>
                            <?php endif;?>
                            
                            <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
                          <div class="input-group "> 
                                  <span class="input-group-addon" title="NUMERO DE PLAZA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="plaza" class="form-control" placeholder="Número de plaza"  pattern="[0-9]{9}" 
                                title="Debe de ser numerico de 9 posiciones" value="<?php echo $propuesta->Num_Plaza;?>" readonly>
                               
                              </div>
                               <br>
                          <?php endif;?>
                            <div class="input-group ">
                             
                                  <span class="input-group-addon" title="CLAVE SERVIDOR PUBLICO "><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="pcve_emp" class="form-control" value="<?php echo $propuesta->Cve_Emp;?>"  readonly="readonly">

                            </div>
                            <br>
                            
                            <div class="input-group ">
                                  <span class="input-group-addon" title="NOMBRE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="nombre" class="form-control"  value="<?php echo $propuesta->APaterno." ".$propuesta->AMaterno." ".$propuesta->Nombre;?>" readonly="readonly">
                            </div>
                            <br>

                             <div class="input-group ">
                                  <span class="input-group-addon" title="CURP"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="curp" class="form-control"  value="<?php echo $propuesta->Curp;?>" readonly="readonly">
                            </div>
                            <br>

                          <div class="input-group ">
                                  <span class="input-group-addon" title="RFC"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rfc" class="form-control"  value="<?php echo $propuesta->Rfc;?>" readonly="readonly">
                            </div>
                            <br>

                  </div> 
                  <div class="col-xs-4">  
                          <div class="input-group ">
                                  <span class="input-group-addon" title="MUNICIPIO RESIDENCIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rfc" class="form-control" value="<?php echo $propuesta->Municipio;?>" readonly="readonly">
                            </div>
                            <br>

                           
                                <div class="input-group ">
                                  <span class="input-group-addon" title="PUESTO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="puesto" class="form-control"   value="<?php echo $propuesta->Puesto." ".$propuesta->Tipo_Horas;?>" readonly="readonly">
                            </div>
                            <br>
                              <div class="input-group ">
                                  <span class="input-group-addon" title="CATEGORIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="Tpuesto" class="form-control"   value="<?php echo $propuesta->Tipo_Puesto." ".$propuesta->Tipo_Horas;?>" readonly="readonly">
                            </div>
                            <br>
                         
                                <div class="input-group ">
                                  <span class="input-group-addon" title="HORAS"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="horas" class="form-control"   value="<?php echo $propuesta->Horas;?>" readonly="readonly">
                            </div>
                            <br>
                              <div class="input-group ">
                                  <span class="input-group-addon" title="MOTIVO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="profesional" class="form-control"   value="<?php echo $propuesta->Motivo;?>" readonly="readonly">
                            </div>
                            <br>
                             <?php if(Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==9||Core::$user->kind==19):?>      <div class="input-group ">
                                  <span class="input-group-addon" title="AREA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="area" class="form-control"   value="<?php echo $propuesta->Area;?>" readonly="readonly">
                            </div>
                            <br>
                              <?php endif;?>   

                                  <div class="input-group ">
                                  <span class="input-group-addon" title="ORIGEN CAPTURA DISPONIBLE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="origend" class="form-control"   value="<?php echo $propuesta->OrigenD;?>" readonly="readonly">
                            </div>
                            <br>
                            <div class="input-group ">
                            <span class="input-group-addon" title="CCT"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="areadp" class="form-control"   value="<?php echo $propuesta->Cct;?>" readonly="readonly">
                            </div>
                            <br>

 
                </div>                  
              <?php if(Core::$user->kind==1 || Core::$user->kind==5  || Core::$user->kind==9):?>

                  <div class="btn-group btn-group-justified" >
                       <td style="width:50px;">
                      <a href="./?action=/propuestas/validarpropuesta&id=<?=$propuesta->Id_Propuesta;?>" class="btn btn-lg btn-success"
                      title="VAIDAR PROPUESTA"><i class="fa fa-check"></i></a>
                    </td>
                     <?php endif;?>
                                 

                   <?php if(Core::$user->kind==1 || Core::$user->kind==2  || Core::$user->kind==4|| Core::$user->kind==6
                   || Core::$user->kind==7 || Core::$user->kind==8|| Core::$user->kind==10 ||Core::$user->kind==3
                   ||Core::$user->kind==17||Core::$user->kind==18||Core::$user->kind==19):?>

                    <div class="btn-group btn-group-justified" >
                       <td style="width:50px;">
                      <a href="./?action=/propuestas/validarpropuesta&id=<?=$propuesta->Id_Propuesta;?>" class="btn btn-lg btn-success"
                      title="VALIDAR PROPUESTA"><i class="fa fa-check"></i></a>
                      

                      <a data-toggle="modal" href="#newModal" class="btn btn-lg btn-warning" title="GENERAR RECHAZO">
                      <i class="fa fa-remove"></i></a>
                    </td>
                    <?php endif;?>

                   <?php if(Core::$user->kind==1 || Core::$user->kind==2  ||
                    Core::$user->kind==4|| Core::$user->kind==6|| Core::$user->kind==7 
                    || Core::$user->kind==8|| Core::$user->kind==10 ||Core::$user->kind==17
                    ||Core::$user->kind==18||Core::$user->kind==19):?>
                     <a  data-toggle="modal" href="#ModalRechazo" class="btn btn-lg btn-danger" title="RECHAZO DEFINITIVO"><i class="fa fa-remove"></i></a>
                   <?php endif;?>
                   </div>

     
           </div>    

           
 <section class="content">   
   <div class="row">                  
        
          <h1>Lista de Grados Academicos Plaza Disponible</h1>
               <?php     
                    
            
                         // Core::alert("entro subse rechazo getBySems");
                  $grados = EstudiosData::getByCurp($propuesta->Curp);
                 

              
                  if(count($grados)>0){
                      // si hay usuarios
                      ?>
            <div class="box box-primary">
                        
                      <table class="table table-bordered datatable table-hover">
                      <thead>
                         
                       
                      <th>NIVEL ESTUDIOS</th>
                      <th>DESCRIPCION</th>
                      <th>ESCUELA</th>
                      <th>CEDULA</th>
                      <th></th>
                      </thead>
                      <?php
                      foreach($grados as $grado){
                          ?>
                          <tr>
                          <td > <?php echo $grado->nivel_estudios; ?> </td>
                          <td><?php echo $grado->desc_nivel; ?></td>
                          <td><?php echo $grado->escuela; ?></td>
                           <td><?php echo $grado->cedula;?></td>
                            

                 
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
                    echo '<p class="alert alert-warning" role="alert">No hay Grado de Estudios Capturados';
                    
                    }
          ?>

</div>                        
      
       <h1>Propuesta</h1>
<section class="content">
     
        <div class="row">

                     <div class="col-sm-5 col-md-6" > 
                       
                                          
                            <div class="input-group ">
                             
                                  <span class="input-group-addon" title="CLAVE SERVIDOR PUBLICO "><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="pcve_emp" class="form-control" value="<?php echo $propuesta->PCve_Emp;?>"  readonly="readonly">

                            </div>
                            <br>
                            
                            <div class="input-group ">
                                  <span class="input-group-addon" title="NOMBRE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="nombre" class="form-control"  value="<?php echo $propuesta->PA_Paterno." ".$propuesta->PA_Materno." ".$propuesta->PNombre;?>" readonly="readonly">
                            </div>
                            <br>

                             <div class="input-group ">
                                  <span class="input-group-addon" title="CURP"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="curp" class="form-control"  value="<?php echo $propuesta->PCurp;?>" readonly="readonly">
                            </div>
                            <br>

                          <div class="input-group ">
                                  <span class="input-group-addon" title="RFC"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rfc" class="form-control"  value="<?php echo $propuesta->PRfc;?>" readonly="readonly">
                            </div>
                            <br>
                                   <div class="input-group ">
                                  <span class="input-group-addon" title="FECHA INICIO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="fec_inicio" class="form-control"   value="<?php echo $propuesta->Fec_Inicio;?>" readonly="readonly">
                            </div>
                            <br>
                               <div class="input-group ">
                                  <span class="input-group-addon" title="FECHA TERMINO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="fec_inicio" class="form-control"   value="<?php echo $propuesta->Fec_Termino;?>" readonly="readonly">
                            </div>
                            <br>

                               <div class="input-group ">
                                  <span class="input-group-addon" title="TIPO INGRESO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="ni" class="form-control"   value="<?php echo $propuesta->Tipo_Ingreso;?>" readonly="readonly">
                            </div>
                            <br>

                          <div class="input-group ">
                                  <span class="input-group-addon" title="MUNICIPIO RESIDENCIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rfc" class="form-control" value="<?php echo $propuesta->Municipio_Residencia;?>" readonly="readonly">
                            </div>
                            <br>


 <?php if(Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==9||Core::$user->kind==19):?>   
                       
                         <div class="input-group ">
                          <span class="input-group-addon" title="DOMINIO IDIOMA INGLES"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="ingles" class="form-control" placeholder="DOMINIO IDIOMA INGLES*" value="<?php echo $propuesta->D_Ingles;?>" readonly="readonly">
                        </div>
                          <br>
                         <div class="input-group ">
                                  <span class="input-group-addon" title="AREA DISCIPLINAR"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="areadp" class="form-control"   value="<?php echo $propuesta->Area_D;?>" readonly="readonly">
                            </div>
                          
                          <br>
                <?php endif;?>   
           </div>     
 <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"> 
          <?php if(Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19):?>   
                      <br>
                                                
                        <div class="input-group ">
                          <span class="input-group-addon" title="ADEMAS LABORA"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="labora" class="form-control" placeholder="ADEMAS LABORA*"required value="<?php echo $propuesta->O_Labora;?>" readonly="readonly">
                        </div>
                          <br>  
                        <div class="input-group ">
                          <span class="input-group-addon" title="HORAS QUE TIENE"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="horaslabora" class="form-control" placeholder="HORAS QUE TIENE*"required value="<?php echo $propuesta->Horas_OLabora;?>"readonly="readonly">
                        </div>
                          <br>  
                            <div class="input-group ">
                          <span class="input-group-addon" title="AÑOS FRENTE A GRUPO"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="tiempofg" class="form-control" placeholder="AÑOS DE EXPERIENCIA FRENTE A GRUPO*"required value="<?php echo $propuesta->A_FrenteGrupo;?>" readonly="readonly">
                        </div>
                          <br>
                          
                     <?php endif;?>      

                                <div class="input-group ">
                                  <span class="input-group-addon" title="AÑOS SERVICIO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="puesto" class="form-control"   value="<?php echo $propuesta->Tiempo_Servicio?>" readonly="readonly">
                            </div>
                            <br>

                            <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>

                               <div class="input-group ">
                                  <span class="input-group-addon" title="AÑOS EN EL PUESTO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="puesto" class="form-control"   value="<?php echo $propuesta->A_Puesto?>" readonly="readonly">
                            </div>

                              <?php endif;?>  
                            
                            <br>
                                <div class="input-group ">
                                  <span class="input-group-addon" title="TELEFONO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="telefono" class="form-control"   value="<?php echo $propuesta->Telefono;?>" readonly="readonly">
                            </div>
                            <br>

                              <div class="input-group ">
                                  <span class="input-group-addon" title="EMAIL"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="email" class="form-control"   value="<?php echo $propuesta->Email;?>" readonly="readonly">
                            </div>
                            <br>
                            
                
                             
               
                               <div class="input-group ">
                                  <span class="input-group-addon" title="SEXO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="sexo" class="form-control"   value="<?php echo $propuesta->Sexo;?>" readonly="readonly">
                            </div>
                                                     <br>
                               <div class="input-group ">
                                  <span class="input-group-addon" title="ESTADO CIVIL"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="ecivil" class="form-control"   value="<?php echo $propuesta->Estado_Civil;?>" readonly="readonly">
                            </div>
                            <br>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="ENTIDAD NACIMIENTO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="enacimiento" class="form-control"   value="<?php echo $propuesta->Entidad_Nacimiento;?>" readonly="readonly">
                            </div>
                            <br>
         
           <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="MUNICIPIO NACIMIENTO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="mnacimiento" class="form-control"   value="<?php echo $propuesta->Municipio_Nacimiento;?>" readonly="readonly">
                            </div>
                            <br>
                             <?php endif;?> 
                            <div class="input-group ">
                                  <span class="input-group-addon" title="DOMICILIO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="domicilio" class="form-control"   value="<?php echo $propuesta->Domicilio;?>" readonly="readonly">
                            </div>
                            <br>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="COLONIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="colonia" class="form-control"   value="<?php echo $propuesta->Colonia;?>" readonly="readonly">
                            </div>
                            <br>
                               <div class="input-group ">
                                  <span class="input-group-addon" title="CP"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cp" class="form-control"   value="<?php echo $propuesta->CP;?>" readonly="readonly">
                            </div>
                            <br>
                         <div class="input-group ">
                                  <span class="input-group-addon" title="ORIGEN CAPTURA PROPUESTA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="origend" class="form-control"   value="<?php echo $propuesta->OrigenP;?>" readonly="readonly">
                            </div>
                            <br>

                    
                    
              </div>     
                   
              <?php if(Core::$user->kind==1 || Core::$user->kind==5  || Core::$user->kind==9):?>

                  <div class="btn-group btn-group-justified" >
                       <td style="width:50px;">
                      <a href="./?action=/propuestas/validarpropuesta&id=<?=$propuesta->Id_Propuesta;?>" class="btn btn-lg btn-success"
                      title="VALIDAR PROPUESTA"><i class="fa fa-check"></i></a>
                    </td>
                     <?php endif;?>
                                 
              

       

      <!-- /.row -->
    </section>
   </form>

   <section class="content">
     <div class="row">
          
<h1>Lista de Grados Academicos Propuesta</h1>
     <?php     
           
               // Core::alert("entro subse rechazo getBySems");
        $grados = EstudiosData::getByCurp($propuesta->PCurp);
       

    
        if(count($grados)>0){
            // si hay usuarios
            ?>
            <div class="box box-primary">
              
            <table class="table table-bordered datatable table-hover">
            <thead>
               
             
            <th>NIVEL ESTUDIOS</th>
            <th>DESCRIPCION</th>
            <th>ESCUELA</th>
            <th>CEDULA</th>
            <th></th>
            </thead>
            <?php
            foreach($grados as $grado){
                ?>
                <tr>
                <td > <?php echo $grado->nivel_estudios; ?> </td>
                <td><?php echo $grado->desc_nivel; ?></td>
                <td><?php echo $grado->escuela; ?></td>
                 <td><?php echo $grado->cedula;?></td>
                  

       
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
          echo '<p class="alert alert-warning" role="alert">No hay Grado de Estudios Capturados';
          
          }
?>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
          
          <!-- /. box -->
      
    
      <!-- /.row -->
 
    </div>
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
                                <input type="text" name="rechazo" class="form-control"   value="Modificacion" readonly="readonly">
                            </div>
    <br>  
     <div class="input-group ">
          <span class="input-group-addon" title="MOTIVO"><i class="fa fa-bars fa-fw"></i></span>
           <textarea name="motivo" class="form-control"  required placeholder="Motivo"></textarea>  
     </div>                      
  
 
  <div class="input-group " style="visibility:hidden;">
    <span class="input-group-addon" title="ID"><i class="fa fa-bars fa-fw"></i></span>
    <input type="text" name="id_propuesta" class="form-control" value="<?php echo $propuesta->Id_Propuesta;?>" readonly="readonly"  style="width:40px;height:33px;visibility:hidden; " >
  </div>
  
  <button type="submit" class="btn btn-default">Agregar Modificacion</button>
  <br> 
</form>
       </div>
 </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



<!-- Modal rechazo definitivo -->
 <div class="modal fade" id="ModalRechazo" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Rechazo</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="rechazar">


 
   
                 <br>  
       <div class="input-group ">
                                  <span class="input-group-addon" title="Tipo Rechazo"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rechazo" class="form-control"   value="Rechazo" readonly="readonly">
                            </div>
    <br>  
     <div class="input-group ">
          <span class="input-group-addon" title="MOTIVO"><i class="fa fa-bars fa-fw"></i></span>
           <textarea name="motivo" class="form-control"  required placeholder="Motivo"></textarea>  
     </div>       
      <div class="input-group " style="visibility: hidden;" >
    <span class="input-group-addon" title="ID"><i class="fa fa-bars fa-fw"></i></span>
    <input type="text" name="id_propuesta" class="form-control" value="<?php echo $propuesta->Id_Propuesta;?>" readonly="readonly"  >
  </div>

    <div class="input-group " style="visibility: hidden;" >
    <span class="input-group-addon" title="ID"><i class="fa fa-bars fa-fw"></i></span>
    <input type="text" name="id_disponible" class="form-control" value="<?php echo $propuesta->Id_Disponible;?>" readonly="readonly"   >
  </div>
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
    window.location="./?view=/propuestas/propuestas";
  });
</script>

 
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>

  $("#rechazar").submit(function(e){
    e.preventDefault();

    $.post("./?action=/propuestas/rechazarpropuesta",$("#rechazar").serialize(),function(data){
    });
    //alert();
    $("#rechazar")[0].reset();
    $('#ModalRechazo').modal('hide');
    location.reload(false);
    window.location="./?view=/propuestas/propuestas";
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
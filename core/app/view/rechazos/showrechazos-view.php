<section class="content">
      <?php 
       
    
 
     
      if(Core::$user->kind==1|| Core::$user->kind==2){
                //Core::alert("entro subse ");
        $propuesta = PropuestasViewData::getByIdRSems($_GET["id"]);
        } 

                if(Core::$user->kind==1|| Core::$user->kind==5|| Core::$user->kind==9){
                 //Core::alert("entro escuela");
                    $propuesta = PropuestasViewData::getByIdRCct($_GET["id"]);

        } 

                if(Core::$user->kind==1|| Core::$user->kind==3){
                //Core::alert("entro delegacion ");
                    $propuesta = PropuestasViewData::getByIdDams($_GET["id"]);
                
        } 

                if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
              //Core::alert("entro sup getByIdRSup");
                    $propuesta = PropuestasViewData::getByIdRSup($_GET["id"]);
                
        } 

                if(Core::$user->kind==1|| Core::$user->kind==6){
               // Core::alert("entro dbg getByIdRBg ");
                $propuesta = PropuestasViewData::getByIdRBg($_GET["id"]);
                
        } 

                if(Core::$user->kind==1|| Core::$user->kind==7){
               // Core::alert("entro dbt getByIdRBt");
                    $propuesta = PropuestasViewData::getByIdRBt($_GET["id"]);
                
        } 

                if(Core::$user->kind==1|| Core::$user->kind==8){
                //Core::alert("entro dtb getByIdRTb");
                    $propuesta = PropuestasViewData::getByIdRTb($_GET["id"]);
                }
                if(Core::$user->kind==17|| Core::$user->kind==18||Core::$user->kind==19){
                  //Core::alert("entro dtb getByIdRTb");
                      $propuesta = PropuestasViewData::getByIdRRegional($_GET["id"]);
                  }

      ?>




         
 <!--<form role="form" method="post" action="index.php?view=updatedocente" enctype="multipart/form-data">-->
   
    <form class="form"   enctype="multipart/form-data"    role="form">                  

          <h1>Resumen</h1>
 
                <!-- Page Heading -->
          <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/rechazos/rechazos"><i class="fa fa-chain-broken"></i> Rechazos</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-eye"></i> Ver Rechazo <?php echo $propuesta->Num_Plaza;?>
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- /.row -->
   <h1>Plaza Disponible</h1>
                      

<div class="row">
                    <div class="col-lg-8">
                    
                 
                     <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19):?>
                      
                          <div class="input-group " style="visibility:hidden">
                                  <span class="input-group-addon" title="NUMERO DE PLAZA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="plaza" class="form-control" placeholder="Número de plaza"  pattern="[0-9]{9}" 
                                title="Debe de ser numerico de 9 posiciones" value="<?php echo $propuesta->Num_Plaza;?>">
                            </div>
                            <br>
                            <?php endif;?>
                            
                            <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4
                            ||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
                          <div class="input-group "> 
                                  <span class="input-group-addon" title="NUMERO DE PLAZA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="plaza" class="form-control" placeholder="Número de plaza"  pattern="[0-9]{9}" 
                                title="Debe de ser numerico de 9 posiciones" value="<?php echo $propuesta->Num_Plaza;?>"  readonly>
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
                                <input type="text" name="curp" id="curppd" class="form-control"  value="<?php echo $propuesta->Curp;?>" readonly="readonly">
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
                                <input type="text" name="municipio" class="form-control" value="<?php echo $propuesta->Municipio;?>" readonly="readonly" >
                            </div>
                            <br>
 
                                <div class="input-group ">
                                  <span class="input-group-addon" title="PUESTO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="puesto" class="form-control"   value="<?php echo $propuesta->Puesto." ".$propuesta->Tipo_Horas;?>" readonly="readonly">
                            </div>
                            <br>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="CATEGORIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="Tpuesto" class="form-control"   value="<?php echo $propuesta->Tipo_Puesto;?>" readonly="readonly">
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
                                  <span class="input-group-addon" title="AREA DISCIPLINAR"><i class="fa fa-bars fa-fw"></i></span>
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
                  <div class="input-gropu" align="center">
                       <td style="width:50px;">
                      <a href="./?view=/disponibles/editdisponible&id=<?=$propuesta->Id_Disponible;?>&id2=<?=$propuesta->Id_Propuesta;?>" class="btn btn-lg btn-warning"
                      title="EDITAR  PLAZA DISPONIBLE"><i class="fa fa-pencil"></i></a>

<a data-toggle="modal" href="#estudiosepd" onclick="copy_curpp()" class="btn btn-lg btn-warning "   
title="AGREGAR GRADOS ACADEMICOS"><i class="fa fa-plus"> Agregar Grados Academicos Plaza Disponible</i></a>
                         
                    </td>
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
                      <th style="visibility:hidden;">ID</th>   
                      <th>CURP</th>
                      <th>NIVEL ESTUDIOS</th>
                      <th>DESCRIPCION</th>
                      <th>ESCUELA</th>
                      <th>CEDULA</th>
                      <th>EDITAR</th>
                      <th>ELIMINAR</th>
                       <th></th>
                      </thead>
                      <?php
                      foreach($grados as $grado){
                          ?>
                          <tr>
                            <td style="visibility:hidden;"><?php echo $grado->id;?></td>
                          <td><?php echo $grado->curp;?></td>
                          <td><?php echo $grado->nivel_estudios;?></td>
                          <td><?php echo $grado->desc_nivel;?></td>
                          <td><?php echo $grado->escuela;?></td>
                          <td><?php echo $grado->cedula;?></td>
                          <td style="width:25px;">
                           <button type="button"  onclick="copy_id()" class="btn btn-success editbtnest">Editar</button> </td>  
                           <td style="width:25px;">
                           <button type="button"  onclick="copy_id2()" class="btn btn-danger deleteest">Eliminar</button> </td>
                 
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
 
 

                   <div class="col-sm-5 col-md-6" > 
                       

                            <div class="input-group " style="visibility: hidden;">
                             
                                  <span class="input-group-addon" title="CLAVE SERVIDOR PUBLICO "><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="idpropuesta" id="idpropuesta" class="form-control" value="<?php echo $propuesta->Id_Propuesta;?>"  readonly="readonly">

                            </div>
   
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
                                <input type="text" name="curp" id="curp" class="form-control"  value="<?php echo $propuesta->PCurp;?>" readonly="readonly">
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
                                <input type="text" name="fec_inicio" class="form-control"   value="<?php echo $propuesta->Fec_Termino;?>" readonly="readonly" >
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
                               
                             <div class="input-group ">
                                  <span class="input-group-addon" title="AÑOS SERVICIO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="puesto" class="form-control"   value="<?php echo $propuesta->Tiempo_Servicio?>"readonly>
                            </div>
                            
                            <br>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="CATEGORIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="Tpuesto" class="form-control"   value="<?php echo $propuesta->Tipo_Puesto;?>" readonly="readonly">
                            </div>
                            <br>

<?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>

                          <div class="input-group ">
                                   <span class="input-group-addon" title="AÑOS EN EL PUESTO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="apuesto" class="form-control"value="<?php echo $propuesta->A_Puesto;?>"readonly >
                                </div>
                                                  
                            <br>
                           
  <?php endif;?> 

              <?php if(Core::$user->kind==10||Core::$user->kind==9||Core::$user->kind==8||Core::$user->kind==19):?>   
                         

                         <div class="input-group ">
                          <span class="input-group-addon" title="DOMINIO IDIOMA INGLES"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="ingles" class="form-control" placeholder="DOMINIO IDIOMA INGLES*" value="<?php echo $propuesta->D_Ingles;?>" readonly="readonly">
                        </div>
                          <br>
                           
                               <div class="input-group ">
                                  <span class="input-group-addon" title="AREA DISCIPLINAR"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="areadp" class="form-control"   value="<?php echo $propuesta->Area_D;?>" readonly="readonly">
                            </div>
                       
                <?php endif;?>   
           </div>     
 <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"> 
          <?php if(Core::$user->kind==10||Core::$user->kind==9||Core::$user->kind==19):?>   
                      <br>
                                                
                        <div class="input-group ">
                          <span class="input-group-addon" title="ADEMAS LABORA"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="labora" class="form-control" placeholder="ADEMAS LABORA*"required value="<?php echo $propuesta->O_Labora;?>" readonly="readonly">
                        </div>
                          <br>  
                        <div class="input-group ">
                          <span class="input-group-addon" title="HORAS QUE TIENE Y/O PLAZA-JORNADA"><i class="fa fa-bars fa-fw"></i></span>
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
                                  <span class="input-group-addon" title="TELEFONO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="telefono" class="form-control"   value="<?php echo $propuesta->Telefono;?>" readonly="readonly">
                            </div>
                            <br>

                              <div class="input-group ">
                                  <span class="input-group-addon" title="EMAIL"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="email" class="form-control"   value="<?php echo $propuesta->Email;?>" readonly="readonly"  >
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
                                <input type="text" name="enacimiento" class="form-control"   value="<?php echo $propuesta->Entidad_Nacimiento;?>" readonly="readonly" >
                            </div>
                            <br>
                    <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5
                    ||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="MUNICIPIO NACIMIENTO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="mnacimiento" class="form-control"   value="<?php echo $propuesta->Municipio_Nacimiento;?>" readonly="readonly" >
                            </div>
                            <br>
                            <?php endif;?> 
                            <div class="input-group ">
                                  <span class="input-group-addon" title="DOMICILIO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="domicilio" class="form-control"   value="<?php echo $propuesta->Domicilio;?>" readonly="readonly" >
                            </div>
                            <br>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="COLONIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="colonia" class="form-control"   value="<?php echo $propuesta->Colonia;?>" readonly="readonly">
                            </div>
                            <br>
                               <div class="input-group ">
                                  <span class="input-group-addon" title="CP"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cp" class="form-control"   value="<?php echo $propuesta->CP;?>" readonly="readonly" >
                            </div>
                            <br>
                          
                             <div class="input-group ">
                                  <span class="input-group-addon" title="ORIGEN CAPTURA PROPUESTA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="origend" class="form-control"   value="<?php echo $propuesta->OrigenP;?>" readonly="readonly">
                            </div>
                            <br>
    </div>   

                  <div align="center">
                             <td style="width:50px;">
                             <a href="./?view=/propuestas/editpropuesta&id=<?=$propuesta->Id_Propuesta;?>" class="btn btn-lg btn-warning"
                            title="EDITAR PROPUESTA"><i class="fa fa-pencil"></i></a></td>
                             <a data-toggle="modal" href="#estudios" onclick="copy_curp()" class="btn btn-lg btn-warning "   title="AGREGAR GRADOS ACADEMICOS"><i class="fa fa-plus"> Agregar Grados Academicos Propuesta</i></a>
                 </div>         
                          
               <?php if(Core::$user->kind==1 || Core::$user->kind==2 ):?>
                
                                  <a  data-toggle="modal" href="#ModalRechazo" class="btn btn-lg btn-danger" title="RECHAZO DEFINITIVO"><i class="fa fa-remove"></i></a></i></a>
                                  
              <?php endif;?>

   
      <!-- /.row -->
  
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
                         
                      <th style="visibility:hidden;">ID</th>
                      <th>CURP</th> 
                      <th>NIVEL ESTUDIOS</th>
                      <th>CARRERA O ESPECIALIDAD</th>
                      <th>ESCUELA</th>
                      <th>CEDULA</th>
                      <th>EDITAR</th>
                      <th>ELIMINAR</th>
             
                      <th></th>
                      </thead>
                      <?php
                      foreach($grados as $grado){
                          ?>
                          <tr>
                           <td style="visibility:hidden;"><?php echo $grado->id; ?></td>
                          <td><?php echo $grado->curp; ?></td>
                          <td><?php echo $grado->nivel_estudios; ?></td>
                          <td><?php echo $grado->desc_nivel; ?></td>
                          <td><?php echo $grado->escuela; ?></td>
                          <td><?php echo $grado->cedula;?></td>
                          <td style="width:25px;">
                           <button type="button"  onclick="copy_id()" class="btn btn-success editbtnest">Editar</button></td>  
                           <td style="width:25px;">
                           <button type="button"  onclick="copy_id2()" class="btn btn-danger deleteest">Eliminar</button> </td>
                 
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
 
<section class="content">   
   <div class="row">    
          
<h1>Lista de Rechazos</h1>
     <?php     
        
 if(Core::$user->kind==1|| Core::$user->kind==2){
               // Core::alert("entro subse rechazo getBySems");
        $rechazos = RechazoData::getBySems($_GET["id"]);
        }
 
                if(Core::$user->kind==1|| Core::$user->kind==5|| Core::$user->kind==9){
                 //Core::alert("entro escuela");
                   $rechazos = RechazoData::getByCct($_GET["id"]);
                  
        }

                if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
               // Core::alert("entro sup ");
                    $rechazos = RechazoData::getBySup($_GET["id"]);
                
        }

                if(Core::$user->kind==1|| Core::$user->kind==6){
                //Core::alert("entro dbg getByDir ");
                 $rechazos = RechazoData::getByDir($_GET["id"]);
                
        }

                if(Core::$user->kind==1|| Core::$user->kind==7){
                //Core::alert("entro dbt");
                      $rechazos = RechazoData::getByDir($_GET["id"]);
                
        }

                if(Core::$user->kind==1|| Core::$user->kind==8){
                //Core::alert("entro dtb ");
                     $rechazos = RechazoData::getByDir($_GET["id"]);
                
        }
        if(Core::$user->kind==17|| Core::$user->kind==18|| Core::$user->kind==19){
          //Core::alert("entro dtb ");
               $rechazos = RechazoData::getByRegional($_GET["id"]);
          
  }
        

    
        if(count($rechazos)>0){
            // si hay usuarios
            ?>
      <div class="box box-primary">
              
            <table class="table table-bordered datatable table-hover">
            <thead>
               
             <TH  style="visibility:hidden;">ID</TH>
            <th>TIPO DE RECHAZO</th>
            <th>MOTIVO DE RECHAZO</th>
            <th>RESPUESTA</th>
            <th  style="visibility:hidden;">PROPUESTA</th>
            <th>RESPONDER</th>
            <th></th>
            </thead>
            <?php
            foreach($rechazos as $rechazo){
                ?>
                <tr>
                <td  style="visibility:hidden;"> <?php echo $rechazo->Id; ?> </td>
                <td><?php echo $rechazo->Tipo_Rechazo; ?></td>
                <td><?php echo $rechazo->Motivo_Rechazo; ?></td>
                 <td><?php echo $rechazo->Respuesta;?></td>
                  <td  style="visibility:hidden;"><?php echo $rechazo->Propuesta_Id;?></td>
                  <td style="width:25px;">
                  <?php 
                    $cadena=$rechazo->Respuesta;
                 
                  if (!isset($cadena)){?>

        <button type="button"  class="btn btn-success editbtn">Responder</button> </td>
       <?php 
     }else {?>
       <button type="button" disabled="true" class="btn btn-success editbtn">Responder</button> </td>
     <?php }?>
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
          echo '<p class="alert alert-warning" role="alert">No hay rechazos';
          
          }
?>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
          
          <!-- /. box -->
      
      </div>
      <!-- /.row -->
 
    </div>
 

</section>

</div>



  
    </div>
      <!-- /.row -->
  
   </form>
  
 
 
<div class="modal fade" id="estudiosepd" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Grados Academicos Plaza Disponible</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregarepd" name="agregarepd">


 <div class="input-group">
            <span class="input-group-addon" title="CURP"><i class="fa fa-bars fa-fw"></i></span>
              <input type="text" name="curpe" id="curpe" class="form-control"     required="required" readonly="readonly">
         </div>

          <br>
          <div class="input-group">
          <span class="input-group-addon" title="NIVEL ESTUDIOS"><i class="fa fa-bars fa-fw"></i></span>
             <select name="niveles" class="form-control" required>
                      <option value="">-- SELECCIONE NIVEL DE ESTUDIOS --</option>
                        <option value="TSuperior">Tecnico Superior</option>
                        <option value="Licenciatura">Licenciatura</option>
                        <option value="Posgrado">Posgrado</option>
             </select>
          </div>
         <br>
           <div class="input-group">
            <span class="input-group-addon" title="CARRERA O ESPECIALIDAD"><i class="fa fa-bars fa-fw"></i></span>
              <input type="text" name="carrera" class="form-control"  placeholder="CARRERA O ESPECIALIDAD*"   required onkeyup="mayus(this);" >
         </div>
            
          <br>

          <div class="input-group">
            <span class="input-group-addon" title="ESCUELA EGRESO"><i class="fa fa-bars fa-fw"></i></span>
              <input type="text" name="escuela" class="form-control" placeholder="ESCUELA EGRESO*"  required  onkeyup="mayus(this);">
         </div>
            <br>
         
        
          <div class="input-group">
            <span class="input-group-addon" title="CEDULA PROFESIONAL"><i class="fa fa-bars fa-fw"></i></span>
              <input type="text" name="cedula" class="form-control"   placeholder="CEDULA PROFESIONAL" onkeyup="mayus(this);">
         </div>
            <br>
           
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="add-data" onclick="copy_curpp()"  class="btn btn-primary">Agregar Estudios</button>
          </div>
         
 
</form>
       </div>
 </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



<div class="modal fade" id="estudios" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Grados Academicos Propuesta</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar" name="agregar">


 <div class="input-group">
            <span class="input-group-addon" title="CURP"><i class="fa fa-bars fa-fw"></i></span>
              <input type="text" name="curpep" id="curpep" class="form-control"     required="required" readonly="readonly">
         </div>

          <br>
          <div class="input-group">
          <span class="input-group-addon" title="NIVEL ESTUDIOS"><i class="fa fa-bars fa-fw"></i></span>
             <select name="niveles" class="form-control" required>
                      <option value="">-- SELECCIONE NIVEL DE ESTUDIOS --</option>
                        <option value="TSuperior">Tecnico Superior</option>
                        <option value="Licenciatura">Licenciatura</option>
                        <option value="Posgrado">Posgrado</option>
             </select>
          </div>
         <br>
           <div class="input-group">
            <span class="input-group-addon" title="CARRERA O ESPECIALIDAD"><i class="fa fa-bars fa-fw"></i></span>
              <input type="text" name="carrera" class="form-control"  placeholder="CARRERA O ESPECIALIDAD*"   required onkeyup="mayus(this);" >
         </div>
            
          <br>

          <div class="input-group">
            <span class="input-group-addon" title="ESCUELA EGRESO"><i class="fa fa-bars fa-fw"></i></span>
              <input type="text" name="escuela" class="form-control" placeholder="ESCUELA EGRESO*"  required  onkeyup="mayus(this);">
         </div>
            <br>
         
        
          <div class="input-group">
            <span class="input-group-addon" title="CEDULA PROFESIONAL"><i class="fa fa-bars fa-fw"></i></span>
              <input type="text" name="cedula" class="form-control"   placeholder="CEDULA PROFESIONAL" onkeyup="mayus(this);">
         </div>
            <br>
           
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="add-data" onclick="copy_curp()"  class="btn btn-primary">Agregar Estudios</button>
          </div>
         
 
</form>
       </div>
 </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

   
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">         
          <h4 class="modal-title" id="exampleModalLabel">Contestar Rechazo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
     
        <form action ="./?action=/rechazos/addrespuesta" method="POST">
           <div class="modal-body">
        
          
          <div class="form-group ">
             <label>TIPO RECHAZO</label>
            <input type="text" name="tiporechazo" id="tiporechazo" class="form-control"  readonly="readonly"    >
          </div>
          <br>
          <div class="form-group ">
            <label>MOTIVO RECHAZO</label>
            <input type="text" name="motivorechazo" id ="motivorechazo" class="form-control"   readonly="readonly">
          </div>
          <br>
           <div class="form-group ">
             <label>RESPUESTA</label>
            <input type="text" name="respuesta" id="respuesta" class="form-control" required>
          </div>
         
            <div class="form-group ">
                <div class="form-group ">
             
            <input type="text" name="id_rechazo" id="id_rechazo" class="form-control"  readonly="readonly"  style="width:80px;height:33px;visibility: hidden;" >
          </div>
            
            <input type="text" name="propuesta_id" id="propuesta_id" class="form-control"  readonly="readonly"  style="width:80px;height:33px;visibility: hidden;" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="updatedata" class="btn btn-primary">Enviar Respuesta</button>
          </div>
         </div>
        </form>
    </div>      
    </div>
  </div>
 

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
                                <input type="text" name="rechazo" class="form-control"   value="Rechazo" readonly>
                            </div>
    <br>  
     <div class="input-group ">
          <span class="input-group-addon" title="MOTIVO"><i class="fa fa-bars fa-fw"></i></span>
           <textarea name="motivo" class="form-control"  required placeholder="Motivo"></textarea>  
     </div>       
      <div class="input-group " style="visibility:hidden;">
    <span class="input-group-addon" title="ID"><i class="fa fa-bars fa-fw"></i></span>
    <input type="text" name="id_propuesta" class="form-control" value="<?php echo $propuesta->Id_Propuesta;?>" readonly  >
  </div>

    <div class="input-group " style="visibility:hidden;">
    <span class="input-group-addon" title="ID"><i class="fa fa-bars fa-fw"></i></span>
    <input type="text" name="id_disponible" class="form-control" value="<?php echo $propuesta->Id_Disponible;?>" readonly   >
  </div>
  <button type="submit" class="btn btn-default">Agregar Rechazo</button>
  <br> 
</form>
       </div>
 </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



<div class="modal fade" id="editmodales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">         
          <h4 class="modal-title" id="exampleModalLabel">Editar Grados de Estudio</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    
        <form action ="./?action=/estudios/upestudio" method="POST">
           <div class="modal-body">
                
         <div class="form-group " style="visibility: hidden;" >

            <input type="text" name="idpropmod" id ="idpropmod" class="form-control"   readonly="readonly">
          </div>
          
              <div class="form-group ">
            <label>CURP</label>
            <input type="text" name="curpes" id ="curpes" class="form-control"
            readonly="readonly">
          </div>
            
          <div class="form-group ">
            <label>NIVEL ESTUDIOS</label>
            <input type="text" name="nivel" id ="nivel" class="form-control"   readonly="readonly"    >
          </div>
          
           <div class="form-group ">
             <label>CARRERA O ESPECIALIDAD</label>
            <input type="text" name="carrera" id="carrera" class="form-control" required>
          </div>
        
           <div class="form-group ">
             <label>ESCUELA</label>
            <input type="text" name="escuela" id="escuela" class="form-control" required>
          </div>
         
          <div class="form-group ">
             <label>CEDULA</label>
            <input type="text" name="cedula" id="cedula" class="form-control" required>
          </div>
          <div class="form-group "  style="visibility: hidden;">

            <input type="text" name="id" id ="id" class="form-control"   readonly="readonly">
          </div>
                  
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="updatedataes" onclick="copy_id()" class="btn btn-primary">Actualizar</button>
          </div>
         </div>
        </form>
    </div>      
    </div>
  </div>
 
 
<div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">         
          <h4 class="modal-title" id="exampleModalLabel">Eliminar Grados de Estudios</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    
        <form action ="./?action=/estudios/delestudio" method="POST">
           <div class="modal-body">
                
         <div class="form-group " style="visibility: hidden;" >

            <input type="text" name="idpropdel" id ="idpropdel" class="form-control"   readonly="readonly">
          </div>
          <h3>¿Estás Seguro de Eliminar el Grado de Estudios?</h3>
          
              <div class="form-group" style="visibility: hidden;">
            <label>CURP</label>
            <input type="text" name="curpdel" id ="curpdel" class="form-control"
            readonly="readonly">
          </div>
                     
          <div class="form-group "  style="visibility: hidden;">

            <input type="text" name="iddel" id ="iddel" class="form-control"   readonly="readonly">
          </div>
                  
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" name="deldataes" onclick="copy_id2()" class="btn btn-primary">Eliminar</button>
          </div>
         </div>
        </form>
    </div>      
    </div>
  </div>
 


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


<script>
$(document).ready(function() {

    $('.editbtn').on('click',function(){


        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

  //         console.log(data);
        $('#id_rechazo').val(data[0]);
        $('#tiporechazo').val(data[1]);
        $('#motivorechazo').val(data[2]);
        $('#respuesta').val(data[3]);
        $('#propuesta_id').val(data[4]);

    });

});
 //window.location="./?view=/rechazos/rechazos";
</script>


<script>
  //$('#myModal').on('hidden.bs.modal', function () { location.reload(); }) 
$(document).ready(function() {
   
    $('.editbtnest').on('click', function(){
      
         //window.location.reload();
        $('#editmodales').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

//console.log(data);
        $('#id').val(data[0]);
        $('#curpes').val(data[1]);
        $('#nivel').val(data[2]);
        $('#carrera').val(data[3]);
        $('#escuela').val(data[4]);
        $('#cedula').val(data[5]);
       
     
    });

}); 

 //window.location="./?view=/rechazos/rechazos";
</script>

<script>
  //$('#myModal').on('hidden.bs.modal', function () { location.reload(); }) 
$(document).ready(function() {
   
    $('.deleteest').on('click', function(){
      
         //window.location.reload();
        $('#delmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

console.log(data);
        $('#iddel').val(data[0]);
        $('#curpdel').val(data[1]);
             
     
    });

}); 

 //window.location="./?view=/rechazos/rechazos";
</script>


  

<script>

  $("#agregar").submit(function(e){
    e.preventDefault();

    $.post("./?action=/estudios/addestudiop",$("#agregar").serialize(),function(data){
    });
    alert("se agrego grado de estudios");
    $("#agregar")[0].reset();
    $('#estudios').modal('hide');

    location.reload(false);
    
  });


 </script>


<script>

  $("#agregarepd").submit(function(e){
    e.preventDefault();

    $.post("./?action=/estudios/addestudio",$("#agregarepd").serialize(),function(data){
    });
    alert("se agrego grado de estudios");
    $("#agregarepd")[0].reset();
    $('#estudiosepd').modal('hide');

    location.reload(false);
    
  });


 </script>



<script type="text/javascript">
  
  function mayus(e) {
    e.value = e.value.toUpperCase();
}

document.getElementById('email').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "incorrecto";
    }
});
    function copy_curp() {
    document.getElementById('curpep').value = document.getElementById('curp').value;

     $(".curpep").on('keydown paste', function(e){
        e.preventDefault();
    });
   }

      function copy_curpp() {
    document.getElementById('curpe').value = document.getElementById('curppd').value;

     $(".curpe").on('keydown paste', function(e){
        e.preventDefault();
    });
   }


function copy_id() {
    document.getElementById('idpropmod').value = document.getElementById('idpropuesta').value;

     $(".idpropmod").on('keydown paste', function(e){
        e.preventDefault();
    });

     
}


function copy_id2() {
    document.getElementById('idpropdel').value = document.getElementById('idpropuesta').value;

     $(".idpropdel").on('keydown paste', function(e){
        e.preventDefault();
    });

     
}


</script>  

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
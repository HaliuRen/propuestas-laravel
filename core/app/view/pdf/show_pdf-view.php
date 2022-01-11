<section class="content">
      <?php 
      
    if(Core::$user->kind==1|| Core::$user->kind==8|| Core::$user->kind==10|| Core::$user->kind==2){
               // Core::alert("entro dtb ");
                    $propuesta = ViewPdfData::getIdPdfTb($_GET["id"]);
                
        }
 
               
       
      ?>

         
 <!--<form role="form" method="post" action="index.php?view=updatedocente" enctype="multipart/form-data">
   <form class="form"   enctype="multipart/form-data"    role="form">-->

<div class="btn-group pull-right">
  <a  href="./?action=/pdf/newpdftb&id=<?=$propuesta->Id_Disponible;?>&id2=<?=$propuesta->PCurp;?>" id="makepdf" class="btn  btn-default"><i class='fa fa-file-pdf-o '></i> Descargar PDF </a>

  </div>
  
 


          <h1>Resumen Propuesta</h1>
 
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/pdf/propuestas_pdf"><i class="fa fa-cogs"></i> PDF Propuestas</a>
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
                <div class="row" id="pdisponible">
                    <div class="col-lg-8">
                    

                     <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8):?>
                      
                          <div class="input-group " style="visibility:hidden">
                                  <span class="input-group-addon" title="NUMERO DE PLAZA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="plaza" class="form-control" placeholder="Número de plaza"  pattern="[0-9]{9}" 
                                title="Debe de ser numerico de 9 posiciones" value="<?php echo $propuesta->Num_Plaza;?>">
                            </div>
                            <br>
                            <?php endif;?>
                            
                            <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7):?>
                          <div class="input-group "> 
                                  <span class="input-group-addon" title="NUMERO DE PLAZA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="plaza" class="form-control" placeholder="Número de plaza"  pattern="[0-9]{9}" 
                                title="Debe de ser numerico de 9 posiciones" value="<?php echo $propuesta->Num_Plaza;?>" readonly>
                               
                              </div>
                               <br>
                          <?php endif;?>
                            <div class="input-group ">
                             
                                  <span class="input-group-addon" title="CLAVE SERVIDOR PUBLICO "><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cve_emp" class="form-control" value="<?php echo $propuesta->Cve_Emp;?>"  readonly="readonly" id="cve_emp">

                            </div>
                            <br>
                            
                            <div class="input-group ">
                                  <span class="input-group-addon" title="NOMBRE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="nombre" class="form-control"  value="<?php echo $propuesta->APaterno." ".$propuesta->AMaterno." ".$propuesta->Nombre;?>" readonly="readonly" id="nombre">
                            </div>
                            <br>

                             <div class="input-group ">
                                  <span class="input-group-addon" title="CURP"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="curp" class="form-control"  value="<?php echo $propuesta->Curp;?>" readonly="readonly" id="curp">
                            </div>
                            <br>

                          <div class="input-group ">
                                  <span class="input-group-addon" title="RFC"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rfc" class="form-control"  value="<?php echo $propuesta->Rfc;?>" readonly="readonly" id ="rfc">
                            </div>
                            <br>

                  </div> 
                  <div class="col-xs-4">  
                          <div class="input-group ">
                                  <span class="input-group-addon" title="MUNICIPIO RESIDENCIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="municipio" class="form-control" value="<?php echo $propuesta->Municipio;?>" readonly="readonly" id="municipio">
                            </div>
                            <br>

                           
                                <div class="input-group ">
                                  <span class="input-group-addon" title="PUESTO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="puesto" class="form-control"   value="<?php echo $propuesta->Puesto." ".$propuesta->Tipo_Horas;?>" readonly="readonly" id ="puesto"> 
                            </div>
                            <br>
                         
                                <div class="input-group ">
                                  <span class="input-group-addon" title="HORAS"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="horas" class="form-control"   value="<?php echo $propuesta->Horas;?>" readonly="readonly" id="horas">
                            </div>
                            <br>
                              <div class="input-group ">
                                  <span class="input-group-addon" title="MOTIVO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="profesional" class="form-control"   value="<?php echo $propuesta->Motivo;?>" readonly="readonly" id="profesional">
                            </div>
                            <br>
                             <?php if(Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==9):?>      <div class="input-group ">
                                  <span class="input-group-addon" title="AREA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="area" class="form-control"   value="<?php echo $propuesta->Area;?>" readonly="readonly" id="area">
                            </div>
                            <br>
                              <?php endif;?>   

                                  <div class="input-group ">
                                  <span class="input-group-addon" title="ORIGEN CAPTURA DISPONIBLE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="origend" class="form-control"   value="<?php echo $propuesta->OrigenD;?>" readonly="readonly" id="origend">
                            </div>
                            <br>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="cct"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cct" class="form-control"   value="<?php echo $propuesta->Cct;?>" readonly="readonly"id="cct" >
                            </div>
                            

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
                       <?php?>
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


 <?php if(Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==9):?>   
                       
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
          <?php if(Core::$user->kind==10||Core::$user->kind==8):?>   
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

                            <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7):?>

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
         
           <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7):?>
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
             <?php?>
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











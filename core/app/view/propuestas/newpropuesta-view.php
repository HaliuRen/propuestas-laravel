
<section class="content">
                <!-- Page Heading -->
 

<style>
    #resultado {
    background-color: red;
    color: white;
    font-weight: bold;
    }
    #resultado.ok {
    background-color: green;
    }

    #resultadorfc{
    background-color: red;
    color: white;
    font-weight: bold; 
}
#resultadorfc.ok {
    background-color: green;
}
</style>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 >
                            Agregar Propuesta
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Agregar Propuesta
                            </li>
                        </ol>
                    </div>
                </div>
                     
  
  
                <!-- /.row -->
<div id="result"></div> 
                
<div class="row">
    <div class="col-sm-5 col-md-6" >  
        <form role="form" method="post" action="./?action=/propuestas/addpropuesta" >
                         
                                
                   <?php 
                            if(Core::$user->kind==5){
                              $user=UserData::getById($_SESSION["user_id"])->username;
                               $plazas = DisponibleData::getByCct($user);

                            } 
                              if(Core::$user->kind==9){
                              $user=UserData::getById($_SESSION["user_id"])->username;
                               $plazas = DisponibleData::getByCctTb($user);
                                                             
                            } 
                              if(Core::$user->kind==10){
                              $user=UserData::getById($_SESSION["user_id"])->zona;
                              $plazas = DisponibleData::getByZonaTb($user);
                            } 
                              if(Core::$user->kind==4){
                              $user=UserData::getById($_SESSION["user_id"])->zona;
                              $plazas = DisponibleData::getByZona($user);
                            } 
                              if(Core::$user->kind==6){
                              $plazas = DisponibleData::getByDbg();
                            } 
                              if(Core::$user->kind==7){
                              $plazas = DisponibleData::getByDbt();

                            } 
                              if(Core::$user->kind==8){
                                
                              $plazas = DisponibleData::getByDtb();
                            } 
                              if(Core::$user->kind==2){
                              $plazas = DisponibleData::getBySems();
                            }

                            //$zona=UserData::getById($_SESSION["user_id"])->zona;
                
                            if( Core::$user->kind==17){
                              if( Core::$user->zona=='Poniente'){
                                //$zonas = TCctData::getSRZona($zona,'GENERAL');
                                //$ccts = TCctData::getSRcct($zona,'GENERAL');
                                $plazas = DisponibleData::getBySRegional('Poniente','GENERAL','SUP','CCT','SRBG');
                                }
                          }   
                          if( Core::$user->kind==17){
                              if(Core::$user->zona=='Oriente' ){ 
                                //$zonas = TCctData::getSRZona($zona,'GENERAL');
                                //$ccts = TCctData::getSRcct($zona,'GENERAL');
                                $plazas = DisponibleData::getBySRegional('Oriente','GENERAL','SUP','CCT','SRBG');
                              }
                          }
                          if( Core::$user->kind==17){
                                if( Core::$user->zona=='Valle de Toluca'){
                                  //$zonas = TCctData::getSRZona($zona,'GENERAL');
                                  //$ccts = TCctData::getSRcct($zona,'GENERAL');
                                  $plazas = DisponibleData::getBySRegional('Valle de Toluca','GENERAL','SUP','CCT','SRBG');
                                }
                          }
                          if( Core::$user->kind==18){
                              if( Core::$user->zona=='Poniente'){
                     
                                // $propuestas = PlantillaData::getBySBtPoniente($zona);
                                //$zonas = TCctData::getSRZona($zona,'TECNOLOGICO');
                                //$ccts = TCctData::getSRcct($zona,'TECNOLOGICO');
                                $plazas = DisponibleData::getBySRegional('Poniente','TECNOLOGICO','SUP','CCT','SRBT');    
                               
                              }
                          }
                          if( Core::$user->kind==18){
                                  if(Core::$user->zona=='Oriente' ){ 
                                  //$zonas = TCctData::getSRZona($zona,'TECNOLOGICO');
                                  //$ccts = TCctData::getSRcct($zona,'TECNOLOGICO');
                                  $plazas = DisponibleData::getBySRegional('Oriente','TECNOLOGICO','SUP','CCT','SRBT');            
                                  }
                          }
                          if( Core::$user->kind==18){
                             if(Core::$user->zona=='Valle de Toluca'){
                                // Core::alert("entro subdireccion regional VT G");
                               //   $zonas = TCctData::getSRZona($zona,'TECNOLOGICO');
                                 // $ccts = TCctData::getSRcct($zona,'TECNOLOGICO');
                                 $plazas = DisponibleData::getBySRegional('Valle de Toluca','TECNOLOGICO','SUP','CCT','SRBT');    
                                }
                          }
                          
                          if( Core::$user->kind==19){
                            if(Core::$user->zona=='Valle de Mexico' ){ 
                           //Core::alert("entro STBC");
                           // $zonas = TCctData::getSRZona($zona,'Telebachillerato');
                            //$ccts = TCctData::getBySRCct($zona,'Telebachillerato');
                            $plazas = DisponibleData::getBySRegional('Valle de Mexico','Telebachillerato','STB','CCT','SRTB');
                            }
                    }
                    if( Core::$user->kind==19){
                       if(Core::$user->zona=='Valle de Toluca'){
                            //$zonas = TCctData::getSRZona($zona,'Telebachillerato');
                            //$ccts = TCctData::getBySRCct($zona,'Telebachillerato');
                            $plazas = DisponibleData::getBySRegional('Valle de Toluca','Telebachillerato','STB','CCT','SRTB');
                          }
                    }
                           
                  ?>

                         <?php if(count($plazas)>0):?>
                          <label for ="id_plaza"class="control-label">Selecciona Plaza Disponible</label>
                            <select name="id_plaza"  class="form-control" required 
                            id="id_plaza">

                            <div id="resultadop"></div>

                            <option value="">-- SELECCIONA LA PLAZA DISPONIBLE --</option>
                            <?php foreach($plazas as $plaza):?>
                             
                              <?php if(Core::$user->kind==8||Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==19):?>
                              <option value="<?=$plaza->Id;?>"><?=$plaza->Num_Plaza." * ".$plaza->horas." * ".$plaza->tipo_puesto." * ".$plaza->Area." * ".$plaza->Cct;?></option>
                              <?php endif;?>

                              <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
                              <option value="<?=$plaza->Id;?>"><?=$plaza->Num_Plaza." * ".$plaza->tipo_puesto." * ".$plaza->Cct;?></option>
                              <?php endif;?>

                            <?php endforeach;?>

                              </select>

                        <?php else:?>
                           <label class="control-label">No se encontraron plazas disponibles para el CCT </label>
                            <?php endif;?>
                            <br>       


                         
                         <div class="input-group ">

                       
                              
                             <input type="checkbox" name="ni"> &nbsp; Nuevo Ingreso?
                             Activar la casilla en caso de que el candidato ocupe por primera vez la plaza.
                           </div>
                            
                           <br>

                         <div class="input-group ">
                                  <span class="input-group-addon" title="CLAVE SERVIDOR PUBLICO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cve_emp" class="form-control" placeholder="Clave Servidor Publico"  pattern="[0-9]{9}" title="Debe de ser numerico de 9 posiciones">
                         </div>
                            <br>
                           <div class="input-group ">
                                  <span class="input-group-addon" title="CURP" ><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="curp" id="curp" class="form-control" placeholder="CURP*" required 
                                pattern="[A-Z-0-9]{18}" oninput="validarInput(this)" onkeyup="mayus(this);">
                           </div>
                            <pre id="resultado"></pre>
                            <br>
  
                          <div class="input-group ">
                                  <span class="input-group-addon" title="RFC"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rfc" class="form-control" placeholder="RFC*" required pattern="[A-Z-0-9]{13}" oninput="validarInputRfc(this)" id="rfc_input" onkeyup="mayus(this);">
                            </div>
                              <pre id="resultadorfc"></pre>
                            <br>
 
                            <div class="input-group ">
                                  <span class="input-group-addon" title="APELLIDO PATERNO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="apaterno" class="form-control" placeholder="Apellido Paterno*" required onkeyup="mayus(this);">
                            </div>
                            <br>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="APELLIDO MATERNO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="amaterno" class="form-control" placeholder="Apellido Materno"  onkeyup="mayus(this);">
                            </div>
                            <br>

                             <div class="input-group ">
                                  <span class="input-group-addon" title="NOMBRE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre*"required onkeyup="mayus(this);">
                            </div>
                            <br>
                             <?php if(Core::$user->kind==8||Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==19):?>  
                             <div class="input-group-addon" title="Fecha Inicio"> FECHA INICIO
                            <input type="date" name="fec_inicio"   class="form-control" value="2021-08-16" readonly="readonly">
                            </div>
                           
                         <div class="input-group-addon" title="Fecha Termino"> FECHA TERMINO
                            <input type="date" name="fec_termino"  class="form-control"   value="2022-08-15" readonly="readonly" >
                            </div>
                            <br>
                             <?php endif;?>  
                              <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
                            <div class="input-group-addon" title="Fecha Inicio"> FECHA INICIO
                            <input type="date" name="fec_inicio"   class="form-control" value="<?php echo date("Y-m-d");?>" required>
                            </div>
                           
                         <div class="input-group-addon" title="Fecha Termino"> FECHA TERMINO
                            <input type="date" name="fec_termino"  class="form-control"   required >
                            </div>
                            <br>
                             <?php endif;?>  
                        
                         <div class="input-group ">
                                  <span class="input-group-addon" title="MUNICIPIO RESIDENCIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="municipiores" class="form-control" placeholder="Municipio Residencia*"required onkeyup="mayus(this);" >
                            </div>
                    
                            <br>
                        </div>                    

                        <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">              
                    <?php if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19):?>   
                      
                       
                          <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                              
                                    <select name="ingles" class="form-control" required>
                                        <option value="">-- NIVEL DE INGLES --</option>
                                         <option value="Basico">Basico</option>
                                         <option value="Medio">Medio</option>
                                         <option value="Avanzado">Avanzado</option>
                                </select>
                               
                            </div>

                          <br>
                        
                        <div class="input-group ">
                          <span class="input-group-addon" title="ADEMAS LABORA"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="labora" class="form-control" placeholder="ADEMAS LABORA" onkeyup="mayus(this);">
                        </div>
                          <br>  
                        <div class="input-group ">
                          <span class="input-group-addon" title="HORAS QUE TIENE Y/O PLAZA-JORNADA"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="horaslabora" class="form-control" placeholder="HORAS QUE TIENE Y/O PLAZA-JORNADA" >
                        </div>
                          <br>  
                            <div class="input-group ">
                          <span class="input-group-addon" title="AÑOS FRENTE A GRUPO"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="number" name="tiempofg" class="form-control" placeholder="AÑOS DE EXPERIENCIA FRENTE A GRUPO*"required
                          pattern="[0-9]" title="Debe de ser numerico">
                        </div>
                          <br>
 <div class="input-group ">
                                  <span class="input-group-addon" title="AREA DISCIPLINAR"><i class="fa fa-bars fa-fw"></i></span>
                                  <?php
                                   $areas = AreasData::getArea();
                                      ?>
                                    <?php if(count($areas)>0):?>
                                      <select name="areadp" class="form-control" required>
                                              <option value="">-- SELECCIONE AREA DISCIPLINAR --</option>
                                          <?php foreach($areas as $area):?>
                                              <option value="<?=$area->descripcion;?>"><?=$area->descripcion;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                                  </div>
                        
                                 <br>
                     <?php endif;?>     

                           <div class="input-group ">
                                   <span class="input-group-addon" title="AÑOS DE SERVICIO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="number" name="tiempo" class="form-control" placeholder="Años de Servicio*" pattern="[0-9]"required >
                                </div>
                            <br>
                             <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>

                             <div class="input-group ">
                                   <span class="input-group-addon" title="AÑOS EN EL PUESTO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="number" name="apuesto" class="form-control" placeholder="Años en el Puesto*" pattern="[0-9]"required >
                                </div>
                                                  
                            <br>

                             <?php endif;?>  


                            <div class="input-group ">
                                   <span class="input-group-addon" title="TELEFONO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="telefono" class="form-control" placeholder="Telefono*"  required>
                                </div>  
                              
                          <br>
                     
                             <div class="input-group">
                                 <span class="input-group-addon" id="emailOK"><i class="fa fa-envelope-o fa-fw"></i></span>
                               <input  name="email"  class="form-control" required id="email" placeholder="Email*" type="email" title="Correo electronico valido">
                            </div>
                            <br>
                            
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                              
                                    <select name="sexo" class="form-control" required>
                                        <option value="">-- SELECCIONE SEXO --</option>
                                         <option value="Masculino">Masculino</option>
                                         <option value="Femenino">Femenino</option>
                                </select>
                               
                            </div>
                           <br>

                              <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                              
                                    <select name="ecivil" class="form-control" required>
                                        <option value="">-- ESTADO CIVIL--</option>
                                         <option value="Soltero(a)">Soltero(a)</option>
                                         <option value="Casado(a)">Casado(a)</option>
                                </select>
                               
                            </div>

                            <br>
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                                                
                                <?php
                                $estados = EstadosViewData::getEntidad();
                                      ?>
                                      <?php if(count($estados)>0):?>
                                      <select name="enacimiento" class="form-control" required>
                                              <option value="">--ENTIDAD DE NACIMIENTO--</option>
                                          <?php foreach($estados as $estado):?>
                                              <option value="<?=$estado->nombre_entidad;?>"><?=$estado->nombre_entidad;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                              </div>
                              <br>
                            
                             <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>  
                                <div class="input-group ">
                                   <span class="input-group-addon" title="MUNICIPIO NACIMIENTO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="mnacimiento" class="form-control" placeholder="Municipio Nacimiento" onkeyup="mayus(this);">
                                </div>
                            <br>
                             <?php endif;?> 
                                <div class="input-group ">
                                   <span class="input-group-addon" title="DOMICILIO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="domicilio" class="form-control" placeholder="Domicilio*"required onkeyup="mayus(this);" >
                                </div>
                            <br>
                                <div class="input-group ">
                                   <span class="input-group-addon" title="COLONIA"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="colonia" class="form-control" placeholder="Colonia*"required onkeyup="mayus(this);">
                                </div>
                            <br>
                                <div class="input-group ">
                                   <span class="input-group-addon" title="CODIGO POSTAL"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="cp" class="form-control" placeholder="Codigo Postal*"required pattern="[0-9]{5}">
                                </div>
                            <br>
                                  
                  
   <a data-toggle="modal" href="#estudios" onclick="copy_curp()" class="btn btn-lg btn-warning "   title="AGREGAR GRADOS ACADEMICOS"><i class="fa fa-plus"> Agregar Grados Academicos</i></a>

   



</div>
 </div>
 
 

                     <?php if (isset($plaza->Id)){?>

              <button  type="submit"  name="btn-submit"
                id="btn-submit" disabled class="btn btn-primary btn-lg ">Agregar Propuesta</button>
                     <?php  } else{  ?>  
                        <button  disabled="true" type="submit" class="btn btn-primary btn-lg">Agregar Propuesta</button>
                       

                   <?php }?>

                           <button type="reset"  class="btn btn-danger btn-lg" value="borrar"> Borrar</button>


                        <br>
                        <br>
                          
                               <p class="alert alert-info">* Todos los Campos son Obligatorios</p>
      </form>


 <div class="modal fade" id="estudios" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Grados Academicos</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar" name="agregar">


 <div class="input-group">
            <span class="input-group-addon" title="CURP"><i class="fa fa-bars fa-fw"></i></span>
              <input type="text" name="curpe" id="curpe" class="form-control"     required="required">
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








<script>

  $("#agregar").submit(function(e){
    e.preventDefault();

    $.post("./?action=/estudios/addestudio",$("#agregar").serialize(),function(data){
    });
    alert("se agrego grado de estudios");
    $("#agregar")[0].reset();
    $('#estudios').modal('hide');

    //location.reload(false);
    
  });


 </script>

<script type="text/javascript">


 function curpValida(curp) {
            var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
                validado = curp.match(re);

            if (!validado)  //Coincide con el formato general?
              return false;

            //Validar que coincida el dígito verificador
            function digitoVerificador(curp17) {
                //Fuente https://consultas.curp.gob.mx/CurpSP/
                var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
                    lngSuma      = 0.0,
                    lngDigito    = 0.0;
                for(var i=0; i<17; i++)
                    lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
                lngDigito = 10 - lngSuma % 10;
                if (lngDigito == 10) return 0;
                return lngDigito;
            }

            if (validado[2] != digitoVerificador(validado[1]))
              return false;

            return true; //Validado
        }


        //Handler para el evento cuando cambia el input
        //Lleva la CURP a mayúsculas para validarlo
        function validarInput(input) {
            var curp = input.value.toUpperCase(),
                resultado = document.getElementById("resultado"),
                  botonEnviar = document.getElementById("btn-submit"),
                
                valido = "No válido";


            if (curpValida(curp)) { // ⬅️ Acá se comprueba
              valido = "Válido";
                resultado.classList.add("ok");
                botonEnviar.disabled = false;
                
            } else {
              resultado.classList.remove("ok");
              botonEnviar.disabled = true;
             
            }

            resultado.innerText = "CURP: " + curp + "\nFormato: " + valido;
        }


        //VALIDAR RFC
        function rfcValido(rfc, aceptarGenerico = true) {
            const re       = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
            var   validado = rfc.match(re);

            if (!validado)  //Coincide con el formato general del regex?
                return false;

            //Separar el dígito verificador del resto del RFC
            const digitoVerificador = validado.pop(),
                  rfcSinDigito      = validado.slice(1).join(''),
                  len               = rfcSinDigito.length,

            //Obtener el digito esperado
                  diccionario       = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
                  indice            = len + 1;
            var   suma,
                  digitoEsperado;

            if (len == 12) suma = 0
            else suma = 481; //Ajuste para persona moral

            for(var i=0; i<len; i++)
                suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
            digitoEsperado = 11 - suma % 11;
            if (digitoEsperado == 11) digitoEsperado = 0;
            else if (digitoEsperado == 10) digitoEsperado = "A";

            //El dígito verificador coincide con el esperado?
            // o es un RFC Genérico (ventas a público general)?
            if ((digitoVerificador != digitoEsperado)
             && (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
                return false;
            else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
                return false;
            return rfcSinDigito + digitoVerificador;
        }


        //Handler para el evento cuando cambia el input
        // -Lleva la RFC a mayúsculas para validarlo
        // -Elimina los espacios que pueda tener antes o después
        function validarInputRfc(input) {
            var rfc         = input.value.trim().toUpperCase(),
                resultado   = document.getElementById("resultadorfc"),
                botonEnviar = document.getElementById("btn-submit"),
                valido;

            var rfcCorrecto = rfcValido(rfc);   // ⬅️ Acá se comprueba

            if (rfcCorrecto) {
              valido = "Válido";

              resultado.classList.add("ok");
              botonEnviar.disabled = false;

            } else {
              valido = "No válido"
              resultado.classList.remove("ok");
               botonEnviar.disabled = true;
            }

            resultado.innerText = "RFC: " + rfc
                                //+ "\nResultado: " + rfcCorrecto
                                + "\nFormato: " + valido;


        }

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
    document.getElementById('curpe').value = document.getElementById('curp').value;

     $(".curpe").on('keydown paste', function(e){
        e.preventDefault();
    });
   }

  function copy_curpdoc() {
    document.getElementById('curpdoc').value = document.getElementById('curp').value;

     $(".curpe").on('keydown paste', function(e){
        e.preventDefault();
    });
     
}

</script>  
<!--
<script type="text/javascript">
$(document).ready(function() {  
  var consulta;
  //$("#id_plaza").focus();
    $(document).on('change','#id_plaza',function(e) {
      
      consulta=$('#id_plaza').val();   
      alert(consulta);
      $("#resultadop").delay(1000).queue(function(n) {   
        $('#resultadop').html('<img src="storage/profiles/loader.gif" />');
 
         

        $.ajax({
            type: "POST",
            url: "./?action=/disponibles/vplaza",
            data: consulta,
            dataType: "html",
             
          error: function(){
            alert("error petición ajax");
           
          },
            success: function(data) {
              alert("petición ajax");
                $('#resultadop').html(data);
                n();
            }
        });
    });              
  });    
});
</script>  
   -->
 

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
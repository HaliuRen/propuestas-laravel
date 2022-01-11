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
<section class="content">
                <!-- Page Heading -->
 
               <div class="row">
                    <div class="col-lg-12">
                        <h1 >
                            Actulizar Propuesta
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Actualizar Propuesta
                            </li>
                        </ol>
                    </div>
                </div>
                    
    
  
                <!-- /.row -->
<div id="result"></div>


                <div class="row">
                   <div class="col-sm-5 col-md-6" >  

                                               
                          <form class="form" method="post"  enctype="multipart/form-data" 
                           action="./?action=/propuestas/updatepropuesta" role="form" >
                         
                            <!--<?php 
                             $user=UserData::getById($_SESSION["user_id"])->username; 
                        $plazas = DisponibleData::getByCct($user);?>-->
                          
                            <?php 
                          $propuesta = PropuestaData::getByIdPropuesta($_GET["id"]);
                            ?>
                        
                                  <div class="input-group " style="visibility:hidden">
                             
                                  <span class="input-group-addon" title="ID"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="id" class="form-control" value="<?php echo($_GET["id"]) ?>" readonly="readonly"  style="width:40px;height:33px;visibility:hidden" >

                            </div>

                           <div class="input-group ">

                       
                              
                              <div class="checkbox-group">
                         <input type="checkbox" name="ni" <?php if($propuesta->Bnd_NI){ echo "checked";}?> >
                        &nbsp; Nuevo Ingreso?
                             Activar la casilla en caso de que el candidato ocupe por primera vez la plaza.  
                               </div>   
        </div>
 
                           <br>

                             <div class="input-group ">
                                  <span class="input-group-addon" title="CLAVE SERVIDOR PUBLICO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cve_emp" class="form-control" placeholder="Clave Servidor Publico"  pattern="[0-9]{9}" 
                                title="Debe de ser numerico de 9 posiciones" value="<?php echo $propuesta->Cve_Emp;?>" >
                            </div>
                            <br>

                             

                            <div class="input-group ">
                                  <span class="input-group-addon" title="CURP" ><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="curp" id="curp" class="form-control" placeholder="CURP*" required 
                                pattern="[A-Z-0-9]{18}" onclick="validarInput(this)" onkeyup="mayus(this);"  oninput="validarInput(this)" 
                                
                                value="<?php echo $propuesta->Curp;?>">
                              </div>
                            <pre id="resultado"></pre>
                            <br>

                          <div class="input-group ">
                                  <span class="input-group-addon" title="RFC"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rfc" class="form-control" placeholder="RFC*" required pattern="[A-Z-0-9]{13}"
                                 onclick="validarInputRfc(this)" id="rfc" onkeyup="mayus(this);"  
                                  oninput="validarInputRfc(this)"value="<?php echo $propuesta->Rfc;?>">
                            </div>
                              <pre id="resultadorfc"></pre>
                            <br>



 
                          

                            <div class="input-group ">
                                  <span class="input-group-addon" title="APELLIDO PATERNO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="apaterno" class="form-control" placeholder="Apellido Paterno*" required value="<?php echo $propuesta->APaterno;?>"  >
                            </div>
                            <br>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="APELLIDO MATERNO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="amaterno" class="form-control" placeholder="Apellido Materno"  value="<?php echo $propuesta->AMaterno;?>" >
                            </div>
                            <br>

                             <div class="input-group ">
                                  <span class="input-group-addon" title="NOMBRE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre*"required value="<?php echo $propuesta->Nombre;?>"  >
                            </div>
                            <br>
                              <?php if(Core::$user->kind==9||Core::$user->kind==8||Core::$user->kind==10||Core::$user->kind==19):?>   
                       
                             <div class="input-group-addon" title="Fecha Inicio"> FECHA INICIO
                            <input type="date" name="fec_inicio"   class="form-control"     value="<?php echo $propuesta->Fec_Inicio;?>" readonly="readonly">
                            </div>
                           
                         <div class="input-group-addon" title="Fecha Termino"> FECHA TERMINO
                            <input type="date" name="fec_termino"  class="form-control"     value="<?php echo $propuesta->Fec_Termino;?>"  readonly="readonly" >
                            </div>
                         <br>
                          <?php endif;?>  
                      <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17
                      ||Core::$user->kind==18):?>   
                       
                             <div class="input-group-addon" title="Fecha Inicio"> FECHA INICIO
                            <input type="date" name="fec_inicio"   class="form-control"     value="<?php echo $propuesta->Fec_Inicio;?>">
                            </div>
                           
                         <div class="input-group-addon" title="Fecha Termino"> FECHA TERMINO
                            <input type="date" name="fec_termino"  class="form-control"     value="<?php echo $propuesta->Fec_Termino;?>">
                            </div>
                         <br>
                          <?php endif;?>  



                         <div class="input-group ">
                                  <span class="input-group-addon" title="MUNICIPIO RESIDENCIA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="municipiores" class="form-control" placeholder="Municipio Residencia*"required value="<?php echo $propuesta->Municipio_Residencia;?>" onkeyup="mayus(this);">
                            </div>
                            <br>
                         
                <?php if(Core::$user->kind==9||Core::$user->kind==8||Core::$user->kind==10||Core::$user->kind==19):?>   
                       

                          <div class="input-group">
                                 <span class="input-group-addon" title="DOMINIO IDIOMA INGLES"><i class="fa fa-bars fa-fw"></i></span>
                              
                                    <select name="ingles" class="form-control" >
                                        <option value="<?php echo $propuesta->D_Ingles;?>"><?php echo $propuesta->D_Ingles;?></option>
                                         <option value="Basico">Basico</option>
                                         <option value="Medio">Medio</option>
                                         <option value="Avanzado">Avanzado</option>
                                </select>
                               
                            </div>



                           
                <?php endif;?>    
                </div>    
   <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"> 
          <?php if(Core::$user->kind==9||Core::$user->kind==8||Core::$user->kind==10||Core::$user->kind==19):?> 
                       
                        <div class="input-group ">
                          <span class="input-group-addon" title="ADEMAS LABORA"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="labora" class="form-control" placeholder="ADEMAS LABORA" 
                          value="<?php echo $propuesta->O_Labora;?>" onkeyup="mayus(this);">
                        </div>
                          <br>  
                        <div class="input-group ">
                          <span class="input-group-addon" title="HORAS QUE TIENE Y/O PLAZA-JORNADA"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="text" name="horaslabora" class="form-control" placeholder="HORAS QUE TIENE" 
                           value="<?php echo $propuesta->Horas_OLabora;?>" placeholder="HORAS QUE TIENE Y/O PLAZA-JORNADA" onkeyup="mayus(this);">
                        </div>
                          <br>  
                            <div class="input-group ">
                          <span class="input-group-addon" title="AÑOS FRENTE A GRUPO"><i class="fa fa-bars fa-fw"></i></span>
                          <input type="number" name="tiempofg" class="form-control" placeholder="AÑOS DE EXPERIENCIA FRENTE A GRUPO*"required value="<?php echo $propuesta->A_FrenteGrupo;?>">
                        </div>
                          <br>
                           <div class="input-group ">
                                  <span class="input-group-addon" title="AREA DISCIPLINAR"><i class="fa fa-bars fa-fw"></i></span>
                                  <?php
                                   $areas = AreasData::getArea();
                                      ?>
                                    <?php if(count($areas)>0):?>
                                      <select name="areadp" class="form-control" >
                                              <option value="<?php echo $propuesta->Area_D;?>"><?php echo $propuesta->Area_D;?></option>
                                          <?php foreach($areas as $area):?>
                                              <option value="<?=$area->descripcion;?>"><?=$area->descripcion;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                                  </div>
                        
                                 <br>

                     <?php endif;?>      
                            


                            <div class="input-group ">
                                   <span class="input-group-addon" title="AÑOS SERVICIO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="number" name="tiempo" class="form-control" placeholder="Tiempo en Servicio*"required  value="<?php echo $propuesta->Tiempo_Servicio;?>">
                                </div>
                            <br>

 <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>

                             <div class="input-group ">
                                   <span class="input-group-addon" title="AÑOS EN EL PUESTO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="number" name="apuesto" class="form-control" 
                                   value="<?php echo $propuesta->A_Puesto;?>"
                                   placeholder="Años en el Puesto*" pattern="[0-9]{1-2}"required >
                                </div>
                                                  
                            <br>

                             <?php endif;?>  
                            <div class="input-group ">
                                   <span class="input-group-addon" title="TELEFONO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="telefono" class="form-control" placeholder="Telefono*"  required value="<?php echo $propuesta->Telefono;?>">
                                </div>  
                            <br>
                             <div class="input-group margin-bottom-sm">
                                 <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                               <input  name="email"  class="form-control" required id="email" placeholder="Email*" type="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="Correo electronico valido" value="<?php echo $propuesta->Email;?>">
                            </div>
                            <br>
                            <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                              
                                    <select name="sexo" class="form-control" required>
                                        <option value="<?php echo $propuesta->Sexo;?>"><?php echo $propuesta->Sexo;?></option>
                                         <option value="Masculino">Masculino</option>
                                         <option value="Femenino">Femenino</option>
                                </select>
                               
                            </div>
                           <br>
                          

                              <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                 <input type="text" name="ecivil" class="form-control" placeholder="Estado civil*"  value="<?php echo $propuesta->Estado_Civil;?>" readonly="readonly">
                                  
                               
                            </div>

                              <br>
 <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                                                
                                <?php
                                $estados = EstadosViewData::getEntidad();
                                      ?>
                                      <?php if(count($estados)>0):?>
                                      <select name="enacimiento" class="form-control" >
                                              <option value="<?php echo $propuesta->Entidad_Nacimiento;?>"><?php echo $propuesta->Entidad_Nacimiento;?></option>
                                          <?php foreach($estados as $estado):?>
                                              <option value="<?=$estado->nombre_entidad;?>"><?=$estado->nombre_entidad;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                              </div>
                              <br>


                            <?php if(Core::$user->kind==2||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>
                                <div class="input-group ">
                                   <span class="input-group-addon" title="MUNICIPIO NACIMIENTO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="mnacimiento" class="form-control" placeholder="Municipio Nacimiento" value="<?php echo $propuesta->Municipio_Nacimiento;?>" onkeyup="mayus(this);">
                                </div>
                            <br>
                             <?php endif;?> 
                                <div class="input-group ">
                                   <span class="input-group-addon" title="DOMICILIO"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="domicilio" class="form-control" placeholder="Domicilio*"required value="<?php echo $propuesta->Domicilio;?>" onkeyup="mayus(this);">
                                </div>
                            <br>
                                <div class="input-group ">
                                   <span class="input-group-addon" title="COLONIA"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="colonia" class="form-control" placeholder="Colonia*"required value="<?php echo $propuesta->Colonia;?>" onkeyup="mayus(this);">
                                </div>
                            <br>
                                <div class="input-group ">
                                   <span class="input-group-addon" title="CODIGO POSTAL"><i class="fa fa-bars fa-fw"></i></span>
                                   <input type="text" name="cp" class="form-control" placeholder="Codigo Postal*"required pattern="[0-9]{5}" value="<?php echo $propuesta->CP;?>">
                                </div>
                            <br>
                         

</div>
</div>
 
                            <button type="submit" class="btn btn-primary">Actualizar Propuesta</button>

                      
                            

                        <br>
                        <br>
                          
                               <p class="alert alert-info">* Todos los Campos son Obligatorios</p>

                           
                        </form>




                    
                   
                
               <!-- /.row -->
    

</section>
<script type="text/javascript">
  
  function mayus(e) {
    e.value = e.value.toUpperCase();
}</script><script type="text/javascript">
  window.onload=function(){                                                                      
  var i=0; var previous_hash = window.location.hash;                                           
  var x = setInterval(function(){                                                              
    i++; window.location.hash = "/noop/" + i;                                                  
    if (i==30){clearInterval(x);                                                               
      window.location.hash = previous_hash;}                                                   
  },10);
}
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
                  
                valido = "No válido";


            if (curpValida(curp)) { // ⬅️ Acá se comprueba
              valido = "Válido";
                resultado.classList.add("ok");
                 
            } else {
              resultado.classList.remove("ok");
             
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
                 
                valido;

            var rfcCorrecto = rfcValido(rfc);   // ⬅️ Acá se comprueba

            if (rfcCorrecto) {
              valido = "Válido";

              resultado.classList.add("ok");
               

            } else {
              valido = "No válido"
              resultado.classList.remove("ok");
              
            }

            resultado.innerText = "RFC: " + rfc
                                //+ "\nResultado: " + rfcCorrecto
                                + "\nFormato: " + valido;


        }


</script>

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
<?php
                $zona=UserData::getById($_SESSION["user_id"])->zona;
                
                  if( Core::$user->kind==17){
                    if( Core::$user->zona=='Poniente'){
                      $zonas = TCctData::getSRZona($zona,'GENERAL');
                      $ccts = TCctData::getSRcct($zona,'GENERAL');
                      }
                }   
                if( Core::$user->kind==17){
                    if(Core::$user->zona=='Oriente' ){ 
                      $zonas = TCctData::getSRZona($zona,'GENERAL');
                      $ccts = TCctData::getSRcct($zona,'GENERAL');
                    }
                }
                if( Core::$user->kind==17){
                      if( Core::$user->zona=='Valle de Toluca'){
                        $zonas = TCctData::getSRZona($zona,'GENERAL');
                        $ccts = TCctData::getSRcct($zona,'GENERAL');
                      }
                }
                if( Core::$user->kind==18){
                    if( Core::$user->zona=='Poniente'){
                   // Core::alert("entro subdireccion Poniente B T");
                      // $propuestas = PlantillaData::getBySBtPoniente($zona);
                      $zonas = TCctData::getSRZona($zona,'TECNOLOGICO');
                      $ccts = TCctData::getSRcct($zona,'TECNOLOGICO');
                     
                    }
                }
                if( Core::$user->kind==18){
                        if(Core::$user->zona=='Oriente' ){ 
                        Core::alert("entro subdireccion regional BT* ".Core::$user->kind);
                        // $propuestas = PlantillaData::getBySBtOriente($zona);
                        $zonas = TCctData::getSRZona($zona,'TECNOLOGICO');
                        $ccts = TCctData::getSRcct($zona,'TECNOLOGICO');
                        }
                }
                if( Core::$user->kind==18){
                   if(Core::$user->zona=='Valle de Toluca'){
                      // Core::alert("entro subdireccion regional VT G");
                        
                        $zonas = TCctData::getSRZona($zona,'TECNOLOGICO');
                        $ccts = TCctData::getSRcct($zona,'TECNOLOGICO');
                      }
                }

                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 >
                           Agregar Plaza Disponible de Director de Plantel
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/capturas/pdisponibles"><i class='fa fa-upload'></i> Capturar Plazas Disponibles </a>
                            </li>
                            
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Agregar Plaza Disponible
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div id="result"></div>
 
                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" method="post" action="./?action=/disponibles/addplaza" name="newplaza" id="newplaza">
                      
                        <div class="input-group ">
                                  <span class="input-group-addon" title="NUMERO DE PLAZA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="plaza" class="form-control" maxlength="15"
                                  pattern=".{15,}" placeholder="Número de plaza* 15 digitos" required>
                            </div>
                            <br>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="CLAVE DOCENTE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cve_emp" class="form-control" placeholder="Clave Servidor Publico*"  pattern="[0-9]{9}" required
                                title="Debe de ser numerico de 9 posiciones">
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
                         <div class="input-group ">
                                  <span class="input-group-addon" title="MUNICIPIO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="municipio" class="form-control" placeholder="Municipio*"required onkeyup="mayus(this);">
                            </div>
                            <br>
                               
                                 <?php if(Core::$user->kind==4):?>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="CCT"><i class="fa fa-bars fa-fw"></i></span>
                                  <?php
                                   $zona=UserData::getById($_SESSION["user_id"])->zona;
                                $ccts = CctData::getByZona($zona);
                                      ?>
                                    <?php if(count($ccts)>0):?>
                                      <select name="cct" class="form-control" required>
                                              <option value="">-- SELECCIONE CCT --</option>
                                          <?php foreach($ccts as $cct):?>
                                              <option value="<?=$cct->cct;?>"><?=$cct->cct;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                                  </div>
                        
                                 <br>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="ZONA"><i class="fa fa-bars fa-fw"></i></span>
                        <input type="text" name="zona" class="form-control"  value="<?php echo $user=UserData::getById($_SESSION["user_id"])->zona; ?>" readonly>
                            </div>
                            <br>
                      <?php endif;?>
                      <?php if(Core::$user->kind==5):?>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="CCT"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cct" class="form-control"  value="<?php echo $user=UserData::getById($_SESSION["user_id"])->username; ?>" readonly>
                            </div>
                            <br>
                          
                            <div class="input-group ">
                                  <span class="input-group-addon" title="ZONA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="zona" class="form-control"  value="<?php echo $user=UserData::getById($_SESSION["user_id"])->zona; ?>" readonly>
                            </div>
                            <br>
                      <?php endif;?>
                            
                      <?php if(Core::$user->kind==1 || Core::$user->kind==2|| Core::$user->kind==6|| Core::$user->kind==7 || Core::$user->kind==8):?>

                            <div class="input-group ">
                                  <span class="input-group-addon" title="CCT*"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cct" class="form-control" placeholder="CCT*"required onkeyup="mayus(this);">
                            </div>
                            <br>

                            <div class="input-group ">
                                  <span class="input-group-addon" title="ZONA*"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="zona" class="form-control" placeholder="Zona Escolar*"required onkeyup="mayus(this);">
                            </div>
                            <br>
                <?php endif;?> 
                <?php if(Core::$user->kind==17||Core::$user->kind==18):?>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="ZONA"><i class="fa fa-bars fa-fw"></i></span>
                                
                                    <?php if(count($zonas)>0):?>
                                      <select name="zona" class="form-control" required>
                                              <option value="">-- SELECCIONE ZONA --</option>
                                          <?php foreach($zonas as $zon):?>
                                              <option value="<?=$zon->zona;?>"><?=$zon->zona;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                                      <br>
                                  </div>
                                  <br>
                                  <div class="input-group ">
                                  <span class="input-group-addon" title="ZONA"><i class="fa fa-bars fa-fw"></i></span>
                                
                                    <?php if(count($ccts)>0):?>
                                      <select name="cct" class="form-control" required>
                                              <option value="">-- SELECCIONE CCT --</option>
                                          <?php foreach($ccts as $cct):?>
                                              <option value="<?=$cct->cct;?>"><?=$cct->cct;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                                      <br>
                                  </div>
                                  <br>
                                  <?php endif;?>   
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-spinner fa-fw"></i></span>
                                <?php
                                $mots = MotivosData::getMotivo();
                                      ?>
                                      <?php if(count($mots)>0):?>
                                      <select name="motivo" class="form-control" required>
                                              <option value="">-- SELECCIONE MOTIVO --</option>
                                          <?php foreach($mots as $mot):?>
                                              <option value="<?=$mot->id;?>"><?=$mot->descripcion;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                                  </div>

                            <br>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="PUESTO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="puesto" class="form-control" value="DIRECTOR" readonly >
                            </div>

                            <br>
                           <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                                                
                                <?php
                                $puestos = PuestosData::getDire();
                                      ?>
                                      <?php if(count($puestos)>0):?>
                                      <select name="tipo" class="form-control" required>
                                              <option value="">-- CATEGORIA--</option>
                                          <?php foreach($puestos as $puesto):?>
                                              <option value="<?=$puesto->codigo;?>"><?=$puesto->tipo_puesto;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                             
                               
                            </div>
                             
                     
                             <div class="input-group ">
                              
                             <input type="checkbox" name="validad" required > &nbsp; Validacion Dirección
                           </div>
                            <br>
                            <div class="input-group ">
                             <a data-toggle="modal" href="#estudios" onclick="copy_curp()" class="btn btn-lg btn-warning "   title="AGREGAR GRADOS ACADEMICOS"><i class="fa fa-plus"> Agregar Grados Academicos</i></a>
                           </div>
                           <br>

                            <button type="submit" name="btn-submit" id="btn-submit" disabled class="btn btn-primary btn-lg">Agregar Plaza</button>



                              
                           <button type="reset"  class="btn btn-danger btn-lg" value="borrar"> Borrar</button>

                        <br>
                        <br>
                          
                               <p class="alert alert-info">* Todos los Campos son Obligatorios</p>

                           
                        </form>




                    </div>
                   
                </div>
               <!-- /.row -->


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
               </section>



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
  window.onload=function(){                                                                      
  var i=0; var previous_hash = window.location.hash;                                           
  var x = setInterval(function(){                                                              
    i++; window.location.hash = "/noop/" + i;                                                  
    if (i==30){clearInterval(x);                                                               
      window.location.hash = previous_hash;}                                                   
  },10);
}
</script>
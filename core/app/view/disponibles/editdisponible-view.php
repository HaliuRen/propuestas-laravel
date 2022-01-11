
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
                        //Core::alert("entro subdireccion regional BT* ".Core::$user->kind);
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
                            Actualizar Plaza Docente
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                          
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Actualizar Plaza Disponible
                            </li>
                        </ol>
                    </div>
                 </div>
                <!-- /.row -->
<div id="result"></div>

                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" method="post" action="./?action=/disponibles/updatedisponible"  enctype="multipart/form-data" >

                           <?php 
                          $disponible = DisponibleData::getByIdDisponible($_GET["id"]);
                            ?>
 

                               <div class="input-group " style="visibility: hidden;" >
                             
                                  <span class="input-group-addon" title="ID"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="id" class="form-control" value="<?php echo($_GET["id"]) ?>" readonly="readonly"  style="width:46px;height:38px" >

                            </div>
                              <div class="input-group " style="visibility: hidden;">
                             
                                  <span class="input-group-addon" title="ID"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="id2" class="form-control" value="<?php echo($_GET["id2"]) ?>" readonly="readonly"  style="width:46px;height:38px" >

                            </div>

                  
                            <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4
                            ||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18):?>

                                <div class="input-group ">
                                  <span class="input-group-addon" title="NUMERO DE PLAZA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="plaza" class="form-control" placeholder="Número de plaza* 9 ó 15 digitos"
                                 maxlength="15" required value="<?php echo $disponible->Num_Plaza;?>"  pattern=".{15,}">
                            </div>
                            <br>



                          <?php endif;?>

                             <div class="input-group ">
                                  <span class="input-group-addon" title="CLAVE DOCENTE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cve_emp" class="form-control" placeholder="Clave Servidor Publico*"  pattern="[0-9]{9}" 
                                title="Debe de ser numerico de 9 posiciones" value="<?php echo $disponible->Cve_Emp;?>">
                            </div>
                            <br>
                            
 <div class="input-group ">
                                  <span class="input-group-addon" title="CURP" ><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="curp" id="curp" class="form-control" placeholder="CURP*" required 
                                pattern="[A-Z-0-9]{18}" onclick="validarInput(this)" onkeyup="mayus(this);"  oninput="validarInput(this)" 
                                
                                value="<?php echo $disponible->Curp;?>">
                              </div>
                            <pre id="resultado"></pre>
                            <br>

                          <div class="input-group ">
                                  <span class="input-group-addon" title="RFC"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="rfc" class="form-control" placeholder="RFC*" required pattern="[A-Z-0-9]{13}" onclick="validarInputRfc(this)" id="rfc" onkeyup="mayus(this);"   oninput="validarInputRfc(this)"value="<?php echo $disponible->Rfc;?>">
                            </div>
                              <pre id="resultadorfc"></pre>
                            <br>

                            <div class="input-group ">
                                  <span class="input-group-addon" title="APELLIDO PATERNO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="apaterno" class="form-control" placeholder="Apellido Paterno*" required onkeyup="mayus(this);" value="<?php echo $disponible->APaterno;?>">
                            </div>
                            <br>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="APELLIDO MATERNO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="amaterno" class="form-control" placeholder="Apellido Materno" value="<?php echo $disponible->AMaterno;?>"  onkeyup="mayus(this);">
                            </div>
                            <br>

                             <div class="input-group ">
                                  <span class="input-group-addon" title="NOMBRE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre*"required onkeyup="mayus(this);"
                                value="<?php echo $disponible->Nombre;?>">
                            </div>
                            <br>
                         <div class="input-group ">
                                  <span class="input-group-addon" title="MUNICIPIO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="municipio" class="form-control" placeholder="Municipio*"required onkeyup="mayus(this);" 
                                value="<?php echo $disponible->Municipio;?>" >
                            </div>
                         
                            <br>
                               <?php if(Core::$user->kind==9):?>

                                <div class="input-group ">
                                  <span class="input-group-addon" title="AREA DISCIPLINAR"><i class="fa fa-bars fa-fw"></i></span>
                                  <?php
                                   $areas = AreasData::getArea();
                                      ?>
                                    <?php if(count($areas)>0):?>
                                      <select name="aread" class="form-control" required>
                                              <option value="<?=$disponible->Area;?>"><?php echo $disponible->Area;?></option>
                                          <?php foreach($areas as $area):?>
                                              <option value="<?=$area->descripcion;?>"><?=$area->descripcion;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                                  </div>
                        
                                 <br>


                           
                      <?php endif;?>
                            
                    <?php if(Core::$user->kind==10):?>
                       
                          <div class="input-group ">
                                  <span class="input-group-addon" title="AREA DISCIPLINAR"><i class="fa fa-bars fa-fw"></i></span>
                                  <?php
                                   $areas = AreasData::getArea();
                                      ?>
                                    <?php if(count($areas)>0):?>
                                      <select name="aread" class="form-control" required>
                                              <option value="<?=$disponible->Area;?>"><?php echo $disponible->Area;?></option>
                                          <?php foreach($areas as $area):?>
                                              <option value="<?=$area->descripcion;?>"><?=$area->descripcion;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                                  </div>
                                 <br>
                        
                      <?php endif;?>

                      <?php if(Core::$user->kind==8 ):?>

                           <div class="input-group ">
                                  <span class="input-group-addon" title="AREA DISCIPLINAR"><i class="fa fa-bars fa-fw"></i></span>
                                  <?php
                                   $areas = AreasData::getArea();
                                      ?>
                                    <?php if(count($areas)>0):?>
                                      <select name="aread" class="form-control" required>
                                              <option value="<?=$disponible->Area;?>"><?php echo $disponible->Area;?></option>
                                          <?php foreach($areas as $area):?>
                                              <option value="<?=$area->descripcion;?>"><?=$area->descripcion;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
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
                                              <option value="<?=$disponible->Motivo;?>"><?php echo $disponible->desc_motivo;?></option>
                                          <?php foreach($mots as $mot):?>
                                              <option value="<?=$mot->id;?>"><?=$mot->descripcion;?></option>
                                      <?php endforeach;?>
                                      </select>
                                      <?php endif;?>
                                  </div>

                            <br>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="CCT"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="cct" class="form-control" value="<?php echo $disponible->Cct;?>" readonly>
                            </div>
                            <br>
                          
                            <div class="input-group ">
                                  <span class="input-group-addon" title="ZONA"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="zona" class="form-control"  value="<?php echo $disponible->Zona;?>" readonly>
                            </div>
                            <br>
                            <div class="input-group ">
                                  <span class="input-group-addon" title="PUESTO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="puesto" class="form-control" value="<?php echo $disponible->Puesto;?>" readonly >
                            </div>
                            <br>

                             <?php if(Core::$user->kind==2||Core::$user->kind==3||Core::$user->kind==4
                             ||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7):?>
                            <div class="input-group " style="visibility:hidden; ">
                                  <span class="input-group-addon" title="HORAS"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="horas" class="form-control" style="width:40px;height:33px" pattern="[0-9]{2}" value="<?php echo $disponible->Horas;?>" readonly >
                            </div>
                            <br>
                          <?php endif;?> 
                           
                             <br>


                             <button type="submit"  class="btn btn-primary">Actualizar Plaza</button>



                              
                           <button type="reset"  class="btn btn-danger" value="borrar"> Borrar</button>

                        <br>
                        <br>
                          
                               <p class="alert alert-info">* Todos los Campos son Obligatorios</p>

                           
                        </form>




                    </div>
                   
                </div>
               <!-- /.row -->
  </section>
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

            





<script type="text/javascript">
  
  function mayus(e) {
    e.value = e.value.toUpperCase();
}</script>
     
 


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
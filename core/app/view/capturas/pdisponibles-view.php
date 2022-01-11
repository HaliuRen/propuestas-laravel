<section class="content">
<div class="row">
    <div class="col-md-12">
        <h1>Captura de Plazas</h1>
   
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                         </ol>
 <br>   
 <?php if(Core::$user->kind==1 || Core::$user->kind==2|| Core::$user->kind==6|| Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18 ):?>
                  <a href="./?view=/disponibles/newarchivo" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Archivos</a>
<?php endif;?> 
 
<?php if(Core::$user->kind==1 || Core::$user->kind==2|| Core::$user->kind==6|| Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18 ):?>
                  <a href="./?view=/disponibles/newsup" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Supervisor</a>
                       <a href="./?view=/disponibles/newauxiliar" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Auxiliar Supervision</a>
                        <a href="./?view=/disponibles/newametodo" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Asesor Metodologico</a>
<?php endif;?>     
        <?php if(Core::$user->kind==1 ||Core::$user->kind==4):?>
            <a href="./?view=/disponibles/newsup" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Supervisor</a>
                      <a href="./?view=/disponibles/newauxiliar" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Auxiliar Supervision</a>
                      <a href="./?view=/disponibles/newametodo" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Asesor Metodologico</a>
                      <a href="./?view=/disponibles/newdirector" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Director</a>
        <?php endif;?>


            <?php if(Core::$user->kind==1 || Core::$user->kind==2|| Core::$user->kind==6|| Core::$user->kind==7||Core::$user->kind==17||Core::$user->kind==18  ):?>

                    <a href="./?view=/disponibles/newdirector" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Director</a>
               <?php endif;?>        

              <?php  if(Core::$user->kind==1 || Core::$user->kind==2|| Core::$user->kind==6|| Core::$user->kind==7  || Core::$user->kind==5 ||Core::$user->kind==17||Core::$user->kind==18 ):?>    
                      <a href="./?view=/disponibles/newsub" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i>  Subdirector</a>
                     <a href="./?view=/disponibles/newsec" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Secretario Escolar</a>
                    <a href="./?view=/disponibles/newpedagogo" class="btn btn-default"><i class="fa fa-user-plus fa-2x"> 
                     </i> Pedagogo</a>
                    
                      <a href="./?view=/disponibles/neworientador" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                     </i> Orientador</a>
          
         <?php endif;?>  
                  



                <?php if(Core::$user->kind==1 ||Core::$user->kind==10|| Core::$user->kind==8||Core::$user->kind==19):?>
                      <a href="./?view=/disponibles/newrplantel" class="btn btn-default"><i class="fa fa-user-plus fa-2x"">
                      </i> Responsable de Plantel</a>


               
                  <?php endif;?>

                   <?php if(Core::$user->kind==1 ):?>
                      <a href="./?view=/disponibles/newhoras" class="btn btn-default"><i class="fa fa-user-plus fa-2x""></i>Docente</a>

                      
               
                  <?php endif;?>

 <?php     
          $cct=UserData::getById($_SESSION["user_id"])->username; 


      if( Core::$user->kind==9){
               // Core::alert("entro 1");
        $propuestas = TCctData::getByCct($cct);
     
 
 
if(!empty($propuestas)){
            ?>
             <?php if(Core::$user->kind==9):?>
                           <a href="./?view=/disponibles/newhoras" class="btn btn-default"><i class="fa fa-user-plus fa-2x""></i>Docente</a>
          <?php endif;?>
         
<?php
}
        else{
           echo "<br> <br><p class='alert alert-danger'>YA CAPTURO EL TOTAL DE LAS PLAZAS DE DOCENTE PARA SU CCT</p>";
        }
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
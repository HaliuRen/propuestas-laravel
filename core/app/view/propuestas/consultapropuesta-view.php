    <script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
        <h1>Lista de Propuestas </h1>
   
<ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/propuestas/propuestas"><i class="fa fa-users"></i> Propuestas</a>
                            </li>
                           
                        </ol>

 <br>  <br>
 
           <?php     
           
           $cct=UserData::getById($_SESSION["user_id"])->zona; 

      if(Core::$user->kind==1|| Core::$user->kind==2){
               // Core::alert("entro subse getBySems");
        $propuestas = PropuestasViewData::getBySems();
               
                    
        }else{

                if(Core::$user->kind==1|| Core::$user->kind==3){
                //Core::alert("entro delegacion ");
                    $propuestas = PropuestasViewData::getByDams();
                
        }else{

                if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
                //Core::alert("entro sup ");
                    $propuestas = PropuestasViewData::getByZona($cct);
                
        }else{

                if(Core::$user->kind==1|| Core::$user->kind==6|| Core::$user->kind==12){
                //Core::alert("entro dbg getByBg");
                $propuestas = PropuestasViewData::getByBg();
                
        }else{

                if(Core::$user->kind==1|| Core::$user->kind==7|| Core::$user->kind==13){
                //Core::alert("entro dbt");
                    $propuestas = PropuestasViewData::getByBt();
                
        }else{

                if(Core::$user->kind==1|| Core::$user->kind==8){
                //Core::alert("entro dtb ");
                    $propuestas = PropuestasViewData::getByTb();
                
        }else{
 
              }
         }
        }
       }
      }
    }

        if(count($propuestas)>0){
             //echo "si hay propuestas"
            ?>
            <div class="box box-primary">
            <table class="table table-bordered datatable table-hover" >
            <thead>
            <th></th>
            <th style="text-align: center">Num Plaza Disponible</th>
            <th style="text-align: center">Zona Escolar</th>
            <th style="text-align: center">CCT</th>
            <th style="text-align: center">Nombre CCT</th>
            
            <th style="text-align: center">Puesto</th>
            <th style="text-align: center">HORAS</th>
            <th style="text-align: center">CSP Propuesta</th>
           
            <th style="text-align: center">Fecha Inicio</th>
            <th style="text-align: center">Fecha Termino</th>
          
            <th></th>

            </thead>
            <?php
            foreach($propuestas as $propuesta){
                ?>
                <tr>
                 <td style="width:25px;">
                <a href="./?view=/propuestas/showpropuesta&id=<?=$propuesta->Id_Disponible;?>" class="btn btn-xs btn-default" title="VER PROPUESTA"><i class="fa fa-eye"></i></a>
                <td><?php echo $propuesta->Num_Plaza; ?></td>
                <td><?php echo $propuesta->Zona; ?></td>
                <td><?php echo $propuesta->Cct; ?></td>
                <td><?php echo $propuesta->Nombre_Cct; ?></td>
                <td><?php echo $propuesta->Tipo_Puesto;?></td>
                <td><?php echo $propuesta->Horas; ?></td>
                <td><?php echo $propuesta->PCve_Emp; ?></td>
                
                <td><?php echo $propuesta->Fec_Inicio; ?></td> 
                <td><?php echo $propuesta->Fec_Termino; ?></td>
                                           
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
           echo "<br> <br><p class='alert alert-danger'>NO HAY PROPUESTAS POR VALIDAR</p>";
        }
?>
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
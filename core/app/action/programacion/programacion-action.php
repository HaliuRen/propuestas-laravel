<?php
//$go = $_GET["go"];

if (!empty($_POST["escuela_name"])) {

//    Core::alert("si trae info");




    $search  ="";
     $search=$_POST["escuela_name"];
    //Core::alert($_POST["plaza"]);

    $casos = ProgramacionData::getMatricula($search);
  
   $docentes = ProgramacionData::getDocentes($search);
     if(count($casos)>0){
                 //echo "si hay propuestas"
                ?>
            <h3>Resultado Matricula y Grupos</h3>
            <div class="box box-primary">
            <table class="table table-bordered datatable table-hover" >
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
                <th></th>
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

               echo "<br> <br><p class='alert alert-danger'>NO SE ENCUENTRA CCT</p>";
            }

            if(count($docentes)>0){
                //echo "si hay propuestas"
               ?>
           <h3>Resultado Plantilla</h3>
           <div class="box box-primary">
           <table class="table table-bordered datatable table-hover" >
           <thead>
                
               <th style="text-align: center">CATEGORIA</th>
               <th style="text-align: center">CASOS</th>
               <th style="text-align: center">HORAS</th>
               <th></th>
           </thead>


           <?php
           foreach($docentes as $docente){
               ?>
           <tr>
              
               <td> <?php echo $docente->categoria;?></td>
               <td> <?php echo $docente->casos;?></td>
               <td> <?php echo $docente->sum_horas;?></td>
                                         
             
               </tr>
               <?php

           }?>
    </table>

   </div>
   <br>
   <?php
   }
           else{

              echo "<br> <br><p class='alert alert-danger'>NO SE ENCUENTRA CCT</p>";
           }        


   }
 
                       
 
?>

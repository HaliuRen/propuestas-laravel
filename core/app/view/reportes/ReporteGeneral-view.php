
<section class="content">
<div class="row">
  <div class="col-md-12">
  <h1>Reporte DGEMS Layout Validado Por Supervisor</h1>
      <ol class="breadcrumb">
                         
                            <li>
                 <a href="./?view=/reportes/layoutSDgems"><i class="fa fa-file-text-o"></i> Reporte DGEMS Layout General</a>
                             </li>
                           
                        </ol>

<form class="form-horizontal" method="post" id="reportebg"  role="form">
<!--action="./report/layout-xlsx.php" role="form">-->

<input type="hidden" name="view" value="/reportes/reporte_layout">
<div class="row">
    <div class="col-md-2">

       <select name="subsistema" class="form-control" required >
            <option value="">--SUBSISTEMA--</option>
                             
                <?php foreach(CctData::getSubSistema() as $cat):?>
                    <option value="<?=$cat->vertiente;?>"><?=$cat->vertiente;?></option>
              <?php endforeach;?>
          </select>
</div>
 


</div>

<br> <br> <br>


 <div class="col-md-1"> 
    <button type="submit" class="btn btn-primary"><i class="fa fa-file-text">
    </i>&nbsp;&nbsp;&nbsp;&nbsp;Generar</button>
   
</div>


 </form>
    
</div>


  </div>
</section>
  
<br><!--- -->

<section>
<div class="row">
    <div class="col-md-12">
        
                <?php 
                $propuestas=array();
                   
    $propuestas =PropuestasViewData::getReportDbg($_POST["subsistema"]);
                ?>

<?php 


if(count($propuestas)>0){?>
 
<div class="row">   
    <div class="col-md-3">                      
                <a href="./report/general-xlsx.php?subsistema=<?php echo $_POST["subsistema"]; ?>" 
                    class="btn  btn-success"><i class="fa fa-file-excel-o">
                    </i>&nbsp;&nbsp;&nbsp;Generar Excel (.xlsx)
                </a>
    </div>
             <div class="col-sm-6"></div>  
            <i class="fa fa-spinner fa-fw"></i> TOTAL DE  REGISTROS&nbsp;&nbsp;<?php echo count($propuestas) ?> 
                
</div>      
           <br>  
<div class="box box-primary">
    <table class="table table-bordered">
        <thead>
            <th>ZONA ESCOLAR</th>
            <th>CATEGORIA</th>
            <th>NUMERO PLAZA</th>
            <th>NOMBRE SERVIDOR PUBLICO</th>
            <th>CLAVE SERVIDOR PUBLICO</th>
            <th>CCT</th>
            <th>FECHA INICIO</th >
            <th>FECHA TERMINO</th >
          
            <th>MOTIVO VACANTE</th >
            <th>CLAVE SERVIDOR PUBLICO VACANTE</th >
        </thead>
        <?php
                foreach($propuestas as $propuesta)
                {
                    ?>
                  
                    <tr>
                        <td><?php echo $propuesta->Zona; ?></td>
                        
                        <td><?php echo $propuesta->Tipo_Puesto; ?></td>
                       
                        <td><?php echo $propuesta->Num_Plaza; ?></td>
                        <td><?php echo $propuesta->Nombre_Propuesta; ?></td>
                        <td><?php echo $propuesta->PCve_Emp; ?></td>
                        <td><?php echo $propuesta->Cct; ?></td>
                        <td><?php echo $propuesta->Fec_Inicio; ?></td>
                        <td><?php echo $propuesta->Fec_Termino; ?></td>
                        <td><?php echo $propuesta->Motivo; ?></td>
                        <td><?php echo $propuesta->Cve_Emp; ?></td>
                    </tr>
                   
                    <?php
     
        }?>
    </table>
</div>


<?php  }else{?>
<script>
    $("#wellcome").hide();
</script>

                <div class="jumbotron">
                    <h2>No hay operaciones</h2>
                    <p>El rango de  las opciones seleccionadas no proporciono ningun resultado.</p>
                </div>
<?php }
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



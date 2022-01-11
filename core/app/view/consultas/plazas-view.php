    <script src="plugins/js/jquery.min.js"></script>
<section class="content">
 
<div class="row">
    <div class="col-md-12">
        <h1>Consulta Propuestas</h1>
   
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-dashboard"></i> Dashboard</a>
                            </li>
                            <li>
                                  <a href="./?view=/consultas/plazas"><i class="fa fa-address-card"></i> Consultas Plazas</a>
                            </li>
                           
                        </ol>
 <br>
<form id="searchp" method="post"> 
    <div class="row">
            <div class="col-md-3">
                <input type="hidden" name="view" value="consultas/plazas">
                <input type="text" id="docente_name" name="docente_name" class="form-control" placeholder="NOMBRE,CSP,CURP o NUM PLAZA">
            </div>

            <div class="col-md-1">
                <button type="submit" class="btn btn-primary  "><i class="glyphicon glyphicon-search"></i> Buscar Plaza Disponible</button>
            </div>
 

    </div>       
    
    <br> <br>
</form>

<form id="search" method="post"> 
    <div class="row">
            <div class="col-md-3">
                <input type="hidden" name="view" value="consultas/plazas">
                <input type="text" id="plaza" name="plaza" class="form-control" placeholder="NOMBRE,CSP,CURP o NUM PLAZA">
            </div>

            <div class="col-md-1">
                <button type="submit" class="btn btn-success  "><i class="glyphicon glyphicon-search"></i> Buscar Propuesta</button>
            </div>
 

           
    </div>
</form>



<div id="show_search_results"> </div>

<script>
//jQuery.noConflict();

$(document).ready(function(){
    $("#searchp").on("submit",function(e){
        e.preventDefault();

  
    name = $("#docente_name").val();
        if(name!=""){
            //alert(name);
        $.post("./?action=/consultas/plaza",$("#searchp").serialize(),function(data){
            $("#show_search_results").html(data);
        });
        $("#docente_name").val("");
    }
    else {
      $("#show_search_results").html("");
      //alert("vacio");
    }

     });
    });
</script>


<script>
//jQuery.noConflict();

$(document).ready(function(){
    $("#search").on("submit",function(e){
        e.preventDefault();

  
    name = $("#plaza").val();
        if(name!=""){
            //alert(name);
        $.post("./?action=/consultas/plaza",$("#search").serialize(),function(data){
            $("#show_search_results").html(data);
        });
        $("#plaza").val("");
    }
    else {
      $("#show_search_results").html("");
      //alert("vacio");
    }

     });
    });
</script>



               
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
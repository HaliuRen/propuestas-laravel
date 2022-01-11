<script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
        <h1>Consulta Programación</h1>
   
                        <ol class="breadcrumb">
                           
                            <li>
                                  <a href="./?view=/programacion/programacion"><i class="fa fa-tasks"></i> Consulta Programación</a>
                            </li>
                           
                        </ol>
 <br>
  


<form id="searchp" method="post"> 
    <div class="row">
            <div class="col-md-3">
                <input type="hidden" name="view" value="programacion/programacion">
                <input type="text" id="escuela_name" name="escuela_name" class="form-control" placeholder="CLAVE CCT" >
            </div>

            <div class="col-md-1">
                <button type="submit" class="btn btn-primary  "><i class="glyphicon glyphicon-search"></i> Buscar Escuela</button>
            </div>
 

    </div>       
    
    <br> <br>
</form>




<div id="show_search_results"> </div>

<script>
//jQuery.noConflict();

$(document).ready(function(){
    $("#searchp").on("submit",function(e){
        e.preventDefault();

  
    name = $("#escuela_name").val();
        if(name!=""){
            //alert(name);
        $.post("./?action=/programacion/programacion",$("#searchp").serialize(),function(data){
            $("#show_search_results").html(data);
        });
        $("#escuela_name").val("");
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
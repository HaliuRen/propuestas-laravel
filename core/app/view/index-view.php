<section class="content">
<div class="row">
<div align="center">
<h1>Bienvenido a MIGE v0.1</h1>-
</div>

<?php 
if(Core::$user->username=='DGEMS'){ 
    Core::redir("./?view=/home"); 
    
  }
  ?>

<?php 
if(Core::$user->username=='997246494'){ 
    Core::redir("./?view=/bg"); 
  }
  ?>




 <div class="col-md-4" >
 	<img src="./storage/mige.png" width="400" height="120">  
 
 </div>
 <div class="col-md-4 col-md-offset-3" >
 		<img src="./storage/sems.png" width="400" height="120"> 
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

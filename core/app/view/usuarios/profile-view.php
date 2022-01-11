<div class="content">

<?php $user = UserData::getById($_SESSION["user_id"]);?>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar Perfil
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                          
                            <li class="active">
                                <i class="fa fa-pencil"></i> Editar Perfil
                            </li>
                        </ol>
                    </div>
                </div>



<div class="row">
    <div class="col-md-12">
  
            <form class="form-horizontal" method="post" id="addproduct" enctype="multipart/form-data" action="index.php?view=/usuarios/updateprofile" role="form">

  
              <div class="input-group ">
                                  <span class="input-group-addon" title="NOMBRE"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Nombre*" readonly="readonly">
                            </div>
                            <br>

                            

                          <div class="input-group ">
                                  <span class="input-group-addon" title="NOMBRE USUARIO"><i class="fa fa-user fa-fw"></i></span>
                                <input type="text" name="username" value="<?php echo $user->username;?>" class="form-control" required id="username" placeholder="Nombre de usuario*" readonly="readonly">
                            </div>
                            <br>
 

                         <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                <input type="password" name="password" class="form-control" id="inputEmail1" placeholder="Contrase&ntilde;a" value="">
                            </div>
                                <br>



          <p class="help-block">La contrase&ntilde;a solo se modificara si escribes algo, en caso contrario no se modifica.</p>
    </div> <!-- col md 12 -->
     
  

 </div> <!-- row -->

      <div class="row">
        <div class="col-md-8">
                              <div class="checkbox-group">
                        Activo &nbsp; <input type="checkbox" name="status" <?php if($user->status){ echo "checked";}?> disabled>  
                               </div>   
        </div>
      </div>
      <br>
 


  
    

     <div class="form-group">
           
          
            <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
              <button type="submit" class="btn btn-success">Actualizar Perfil</button>
           
          </div>
  
  </form>
  </div>

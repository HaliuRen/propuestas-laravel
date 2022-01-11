<section class="content">
<?php $user = UserData::getById($_GET["id"]);?>

   <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar usuario
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/usuarios/users"><i class="fa fa-users"></i> Usuarios</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-pencil"></i> Editar usuario
                            </li>
                        </ol>
                    </div>
                </div>



<div class="row">
    <div class="col-md-12">
  
            <form class="form-horizontal" method="post" id="addproduct" enctype="multipart/form-data" action="index.php?view=/usuarios/updateuser" role="form">

      
      <br>
                             <div class="input-group ">
                                  <span class="input-group-addon" title="NOMBRE USUARIO"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="name"  value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Nombre*">
                            </div>
                            <br>

                              


                          <div class="input-group">
                                  <span class="input-group-addon" title="USERNAME" ><i class="fa fa-bars fa-fW"></i></span>
                                <input type="text" name="username"  value="<?php echo $user->username;?>" class="form-control" required id="username" placeholder="Nombre de usuario*">
                            </div>
                            <br>


                         <div class="input-group">
                                  <span class="input-group-addon" title="CONTRASEÑA"><i class="fa fa-key fa-fw"></i></span>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Contrase&ntilde;a" value="">
                            </div>
                                <br>



          <p class="help-block">La contrase&ntilde;a solo se modificara si escribes algo, en caso contrario no se modifica.</p>
    </div> <!-- col md 12 -->
     
  

 </div> <!-- row -->


      <div class="row">
        <div class="col-md-8">
                              <div class="checkbox-group">
                        Activo &nbsp; <input type="checkbox" name="status" <?php if($user->status){ echo "checked";}?> >  
                               </div>   
        </div>
      </div>
      <br>
 
          
          <div class="form-group">
           
          <p class="alert alert-info">* Campos obligatorios</p>
            <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
              <button type="submit" class="btn btn-success">Actualizar Usuario</button>
           
          </div>


</form>


</section>
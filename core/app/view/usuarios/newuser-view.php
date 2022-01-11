<section class="content">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Nuevo usuario
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/usuarios/users"><i class="fa fa-users"></i> Usuarios</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Nuevo usuario
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" method="post" action="./?action=/usuarios/adduser" enctype="multipart/form-data">
                          
                            <br>
                             <div class="input-group ">
                                  <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Nombre">
                            </div>
                            <br>

                            <br>
                             <div class="input-group ">
                                  <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="file" name="archivo" class="form-control" placeholder="archivo">
                            </div>
                            <br>

                          <div class="input-group ">
                                  <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Nombre de usuario*" required>
                            </div>
                            <br>

                            <div class="input-group margin-bottom-sm">
                                 <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                                <input  class="form-control" name="zona" placeholder="Zona Escolar*" required >
                            </div>
                            <br>

                         <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password*" required>
                            </div>
                                <br>
                                

                        <div class="input-group">
                                 <span class="input-group-addon"><i class="fa fa-spinner fa-fw"></i></span>
                                <?php
                                    $cats = KindData::getAll();
                                ?>
                                <?php if(count($cats)>0):?>
                                    <select name="kind_id" class="form-control" required>
                                        <option value="">-- CATEGORIA --</option>
                                    <?php foreach($cats as $cat):?>
                                        <option value="<?=$cat->id;?>"><?=$cat->name;?></option>
                                <?php endforeach;?>
                                </select>
                                <?php endif;?>
                            </div>
                      <br>

                              <p class="alert alert-info">* Campos obligatorios</p>

                    
                            <button type="submit" class="btn btn-primary">Agregar Usuario</button>

                          
                        </form>

                    </div>
                    <div class="col-lg-3">
                    </div>
                </div>
                <!-- /.row -->
<br><br><br><br><br>
</section>
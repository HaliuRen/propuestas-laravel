    <script src="plugins/js/jquery.min.js"></script>
<section class="content">
<div class="row">
    <div class="col-md-12">
        <h1>Lista de Usuarios</h1>
   
<ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-spinner"></i> Inicio</a>
                            </li>
                            <li>
                                  <a href="./?view=/usuarios/users"><i class="fa fa-users"></i> Usuarios</a>
                            </li>
                           
                        </ol>


     
 <a href="./?view=/usuarios/newuser" class="btn btn-default"><i class='glyphicon glyphicon-user'>
 </i> Nuevo Usuario</a>
 <a href="./?view=/usuarios/newdoc" class="btn btn-default"><i class='glyphicon glyphicon-user'>
 </i> Archivos</a>
 <br>  <br>
                    


           <?php     

        $users = UserData::getAll();
        if(count($users)>0){
             //echo "si hay usuarios"
            ?>
            <div class="box box-primary">
            <table class="table table-bordered datatable table-hover">
            <thead>
           
           
            <th>Nombre de usuario</th>
            
            <th>Activo</th>
            <th>Tipo</th>
            <th></th>
            </thead>
            <?php
            foreach($users as $user){
                ?>
                <tr>
       
                <td><?php echo $user->username; ?></td>
              

               
                <td>
                    <?php if($user->status==1):?>
                        <i class="glyphicon glyphicon-ok"></i>
                    <?php endif; ?>
                </td>
                <td>
                <?php
switch ($user->kind) {
    case '1': echo "Administrador"; break;
    case '2': echo "Subsecretaria"; break;
    case '3': echo "Delegacion"; break;
    case '4': echo "Supervision"; break;
    case '5': echo "Direccion"; break;
    case '6': echo "DBG"; break;
    case '7': echo "DBT"; break;
    case '8': echo "DTB"; break;
    case '9': echo "TeleBachillerato";break;
    case '10': echo "Supervision TB";break;
    case '12': echo "Consulta DBG";break;
    case '13': echo "Consulta DBT";break;
    case '14': echo "DGEMS";break;
    case '16': echo "Consulta Programación";break;
    case '17': echo "SubDireccion Regional BT";break; 
    case '18': echo "SubDireccion Regional BG";break; 
    case '19': echo "SubDireccion Regional TBC";break; 

    default:
        # code...
        break;
}

 

                ?>
                </td>
                <td style="width:50px;">
                <a href="./?view=/usuarios/edituser&id=<?=$user->id;?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                <a href="./?action=/usuarios/deluser&id=<?=$user->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></td>
                </tr>
                <?php

            }
 echo "</table></div>";


        }
        else{
            // no hay usuarios
        }


        ?>


    </div>

</section>
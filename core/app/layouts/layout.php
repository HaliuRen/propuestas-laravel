<!DOCTYPE html>
<html>

  <head>
    
  <meta charset="UTF-8">
   
    <title>MIGE PROPUESTAS 0.1</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="plugins/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <link href="plugins/dist/css/skins/skin-green-light.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
          <script src="plugins/jquery/jquery-2.1.4.min.js"></script>
          <script src="plugins/morris/raphael-min.js"></script>
          <script src="plugins/morris/morris.js"></script>
            <link rel="stylesheet" href="plugins/morris/morris.css">
          <link rel="stylesheet" href="plugins/morris/example.css">
          <script src="plugins/jspdf/jspdf.min.js"></script>
          <script src="plugins/jspdf/jspdf.plugin.autotable.js"></script>

          <link rel="shortcut icon" href="storage/sems.png" />
  </head>

  <body class="<?php if(isset($_SESSION["user_id"])):?>  skin-green-light sidebar-mini
  <?php else:?>login-page<?php endif; ?>" >
    <div class="wrapper">
      <!-- Main Header -->
      <?php if(isset($_SESSION["user_id"])):?>
      <header class="main-header">
        <!-- Logo -->
        <a href="./" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M</b>I</span>
          <!-- logo for regular state and mobile devices -->
          <!-- <span class="logo-lg"><b>DAMSYS</b></span>-->
          <span class="logo-lg"><b>MIGE</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">




                    <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class=""><?php if(isset($_SESSION["user_id"]) )
                  { echo UserData::getById($_SESSION["user_id"])->name;

                    if(Core::$user->kind==1){ echo " (Administrador)"; }
                    else if(Core::$user->kind==2){ echo " (Subsecretaria)"; }
                    else if(Core::$user->kind==3){ echo " (Delegacion)"; }
                    else if(Core::$user->kind==4){ echo " (Supervision)"; }
                    else if(Core::$user->kind==5){ echo " (Direccion Plantel)"; }
                    else if(Core::$user->kind==6){ echo " (DBG)"; }
                    else if(Core::$user->kind==7){ echo " (DBT)"; }
                    else if(Core::$user->kind==8){ echo " (DTB)"; }
                    else if(Core::$user->kind==9){ echo " (TeleBachillerato)"; }
                    else if(Core::$user->kind==10){ echo " (Supervision TB)"; }
                    else if(Core::$user->kind==12){ echo " (Consulta DBG)"; }
                    else if(Core::$user->kind==13){ echo " (Consulta DBT)"; }
                    else if(Core::$user->kind==14){ echo " (DGEMS)"; }
                    else if(Core::$user->kind==16){ echo " (Consulta Programación)"; }
                    else if(Core::$user->kind==17){ echo " (SubDireccion Regional BT) ".Core::$user->zona;  }
                    else if(Core::$user->kind==18){ echo " (SubDireccion Regional BG) ".Core::$user->zona; }
                    else if(Core::$user->kind==19){ echo " (SubDireccion Regional TBC) ".Core::$user->zona; }

                  }
                  {
                   }?> <b class="caret"></b> </span>

                </a>
              <ul class="dropdown-menu">
            <li class="user-header">


                <p>
                <?php echo Core::$user->name;?>
                </p>
              </li>


                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">

                   <a href="./?view=/usuarios/profile" class="btn btn-default btn-flat">Mi Perfil</a>
                    <a href="./?action=processlogout" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">


         <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
<?php if(isset($_SESSION["user_id"])):?>
 
          <!-- <li><a href="./"><i class='fa fa-spinner'></i> <span>Inicio</span></a></li>-->

          <?php if(Core::$user->kind==1 || Core::$user->kind==2|| Core::$user->username=='DGEMS'):?>
               
              <li><a href="./index.php?view=home"><i class='fa fa-dashboard'></i> <span>Dashboard</span></a></li>
              <?php endif;?>

              <?php if(Core::$user->kind==1 || Core::$user->username=='997246494'):?>
               
               <li><a href="./index.php?view=bg"><i class='fa fa-dashboard'></i> <span>Dashboard BG</span></a></li>
               <?php endif;?>


              <?php if(Core::$user->kind==1):?>
                <li><a href="./?view=/usuarios/users"><i class='fa fa-users' ></i> <span>Usuarios</span></a></li>
              <?php endif;?>

             <?php if(Core::$user->kind==1 || Core::$user->kind==2  || Core::$user->kind==4|| Core::$user->kind==6|| Core::$user->kind==5|| Core::$user->kind==7 || Core::$user->kind==8
             || Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==17||Core::$user->kind==18||Core::$user->kind==19  ):?> 
                <li><a href="./?view=/capturas/pdisponibles"><i class='fa fa-upload' ></i> <span>      Captura de Plazas Disponibles</span></a></li>
              <?php endif;?>
              
              <?php if(Core::$user->kind==1 || Core::$user->kind==2  || Core::$user->kind==4|| Core::$user->kind==6|| Core::$user->kind==5|| Core::$user->kind==7 || Core::$user->kind==8
              || Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==17||Core::$user->kind==18||Core::$user->kind==19 ):?>
                <li><a href="./?view=/propuestas/newpropuesta"><i class='fa fa-download' ></i> <span>Captura de Propuestas</span></a></li>
              <?php endif;?>


              <?php if(Core::$user->kind==1 || Core::$user->kind==2 || Core::$user->kind==3 || Core::$user->kind==4 || Core::$user->kind==6 || Core::$user->kind==7 
              || Core::$user->kind==8 || Core::$user->kind==10 || Core::$user->kind==17 || Core::$user->kind==18 || Core::$user->kind==19 ):?>
                <li><a href="./?view=/propuestas/propuestas"><i class='fa fa-check-square-o' ></i> <span>Validar Propuestas </span></a></li>
              <?php endif;?>


 <?php if(Core::$user->kind==1):?>
                <li><a href="./?view=/propuestas/propuestas"><i class='fa fa-check' ></i> <span>Validar Propuestas Directores</span></a></li>
              <?php endif;?>



      <?php if(Core::$user->kind==1 || Core::$user->kind==2  || Core::$user->kind==4|| Core::$user->kind==6|| Core::$user->kind==5|| Core::$user->kind==7 || Core::$user->kind==8||
       Core::$user->kind==9 || Core::$user->kind==10 || Core::$user->kind==17 || Core::$user->kind==18 || Core::$user->kind==19):?>
                 
            <li><a href="./?view=/rechazos/rechazos"><i class="fa fa-chain-broken" ></i> <span>Rechazos Realizados</span> <div style="text-align: center">por el Nivel Posterior </div></a></li>
        <?php endif;?>  
           
      <?php if(Core::$user->kind==1 || Core::$user->kind==2 || Core::$user->kind==3 || Core::$user->kind==4|| Core::$user->kind==6|| Core::$user->kind==7 || Core::$user->kind==8 
      || Core::$user->kind==10 || Core::$user->kind==17 || Core::$user->kind==18 || Core::$user->kind==19):?>
                 
            <li><a href="./?view=/rechazos/respuestas"><i class="fa fa-exchange" ></i> <span>Respuestas de Rechazos</span> <div style="text-align: center"> del Nivel Anterior </div></a></li>
                 
      <?php endif;?> 

      <?php if(Core::$user->kind==1||Core::$user->kind==2||Core::$user->kind==16):?>
            
            <li><a href="./?view=/programacion/programacion"><i class="fa fa-search-plus"> </i><span>Consulta Programación </span> </a>
              </li>
       <?php endif;?> 

  

       <?php if(Core::$user->kind==1):?>
            
            <li><a href="./?view=/programacion/captura"><i class="fa fa-pencil-square-o"> </i><span>Captura Programación </span> </a>
              </li>
              <?php endif;?> 

              <?php if(Core::$user->kind==1):?>
            
                
              

            <li><a href="./?view=/programacion/modificacioncaptura">
             <i class="fa fa-pencil-square-o "> </i>
            <span > Solicitud de Modificacion             </span> 
             </a>
              </li>
              <?php endif;?> 



              <?php if(Core::$user->kind==1):?>
            
            <li><a href="./?view=/programacion/validarcaptura"><i class="fa fa-group"> </i><span>Validar Plantilla</span> </a>
              </li>
              <?php endif;?> 


 
            
             <?php if(Core::$user->kind==1||Core::$user->kind==2):?>
            
                  <li><a href="./?view=/consultas/plazas"><i class="fa fa-search"> </i><span>Consultas Plazas </span> </a>
                    </li>
             <?php endif;?> 

           

            <?php if(Core::$user->kind==1||Core::$user->kind==13||Core::$user->kind==12):?> 
                   <li><a href="./?view=/propuestas/consultapropuesta"><i class="fa fa-search"> </i> <span>Consultas Propuestas</span> </a></li>
            <?php endif;?> 
             

 



      <?php if(Core::$user->kind==1||Core::$user->kind==4
      ||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7
                 ||Core::$user->kind==17||Core::$user->kind==18||
                 Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19):?>
                 
            <li><a href="./?view=/consultas/estatuspropuestas"><i class="fa fa-cogs" ></i> <span>Estatus Propuestas</span> </a></li>
                 
      <?php endif;?>

<?php if(Core::$user->kind==1||Core::$user->kind==8||Core::$user->kind==2):?>
    <li class="treeview">
            
              <a href="#"><i class='fa fa-file-pdf-o'></i> <span>Generar PDF</span> <i class="fa fa-angle-left pull-right"></i></a>
             
              <ul class="treeview-menu">
                  <li><a href="./?view=/pdf/propuestas_pdf">Genear PDF Propuesta TBC</a></li>
                          
                  
              </ul>


              <?php endif;?>  
            </li>

 <?php if(Core::$user->kind==1||Core::$user->kind==2||Core::$user->kind==6):?>
    <li class="treeview">
            
              <a href="#"><i class='fa fa-file-text-o'></i> <span>Reportes DGEMS</span> <i class="fa fa-angle-left pull-right"></i></a>
             
              <ul class="treeview-menu">
                  <li><a href="./?view=/reportes/ReporteGeneral">Layout General </a></li>
                          
                 
              </ul>


              <?php endif;?>  
            </li>

<?php if(Core::$user->kind==1 ):?>
    <li class="treeview">
            
              <a href="#"><i class='fa fa-file-text-o'></i> <span>Reportes SEMS</span> <i class="fa fa-angle-left pull-right"></i></a>
             
              <ul class="treeview-menu">
                  <li><a href="./?view=/reportes/layoutDSems">Validacion DGEMS </a></li>
                          
                  <li><a href="./?view=/reportes/layoutSSems">Validacion SEMS </a></li>
              </ul>


              <?php endif;?>  
            </li>

             

<?php if(Core::$user->kind==1):?>
    <li class="treeview">
            
              <a href="#"><i class='fa fa-file-text-o'></i> <span>Reportes DTBC</span> <i class="fa fa-angle-left pull-right"></i></a>
             
              <ul class="treeview-menu">
                  <li><a href="./?view=/reportes/layoutSTb">Validacion Supervision </a></li>
                          
                  <li><a href="./?view=/reportes/layoutDTb">Validacion DTBC </a></li>
              </ul>


              <?php endif;?>  
            </li>

<?php if(Core::$user->kind==1||Core::$user->kind==3):?>
    <li class="treeview">
            
              <a href="#"><i class='fa fa-file-text-o'></i> <span>Reportes DAMS</span> <i class="fa fa-angle-left pull-right"></i></a>
             
              <ul class="treeview-menu">
                  <li><a href="./?view=/reportes/layoutSDams">Validacion SEMS </a></li>
                          
                  <li><a href="./?view=/reportes/layoutDams">Aceptadas DAMS </a></li>
              </ul>


              <?php endif;?>  
            </li>



<?php endif;?>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
    <?php endif;?>







      <!-- Content Wrapper. Contains page content -->
      <?php if(isset($_SESSION["user_id"])):?>
      <div class="content-wrapper">
        <?php View::load("index");?>
      </div><!-- /.content-wrapper -->



        <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.1
        </div>
        <strong>2020 <a target="_blank">MIGE</a></strong>
      </footer>
      <?php else:?>
      
       
 <br> <br> <br> <br>
<div class="login-box">
      <div class="login-logo">

      <div class="text-center mt-4">
              <!--<img src="storage/edomexm.png"   width="350" height="60" />-->
              <h1 class="h3">PROPUESTAS v0.1</h1>
            </div>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
      <div class="text-center">
                    <img src="storage/sems.png"   width="280" height="60" />
      </div>
                
        <form action="./?action=processlogin" method="post">
          <div class="form-group has-feedback">
          <label class="form-label">Usuario</label>
            <input type="text" name="username" required class="form-control" placeholder="Ingresar tu Usuario" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
          <label class="form-label">Contraseña</label>
            <input type="password" name="password" required class="form-control" placeholder="Ingresar tu Contraseña"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
             <div class="text-center mt-3">
                      <button type="submit" class="btn btn-lg btn-block btn-primary">Ingresar al sistema</button>
             </div>
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->





      <?php endif;?>


    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="plugins/dist/js/app.min.js" type="text/javascript"></script>

    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>


   <script type="text/javascript" charset="utf8">
      $(document).ready(function(){
        $(".datatable").DataTable({


          "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        }

        });
      });
    </script>



  </body>
</html>

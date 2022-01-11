<?php

if(Core::$user->kind==3||Core::$user->kind==4||Core::$user->kind==5||Core::$user->kind==6||Core::$user->kind==7||Core::$user->kind==8||Core::$user->kind==9||Core::$user->kind==10){ Core::redir("./?view=/propuestas/newpropuesta"); }


if(Core::$user->kind==12||Core::$user->kind==13){ Core::redir("./?view=/propuestas/consultapropuesta"); }


?>
 
<section class="content">

<br>
<div class="row">
 
            <h3>BACHILLERATO GENERAL </h3>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box ">
                      <span class="info-box-icon bg-aqua"><i class="fa fa-plus "></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Plazas Disponibles Bachillerato <p>General Capturadas</p></span>
                        <span class="info-box-number"><?php echo count(DisponibleData::getAllBg()); ?><small></small></span>
                      </div>

                      <!-- /.info-box-content -->
                    </div>

                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box ">
                      <span class="info-box-icon bg-purple"><i class="fa fa-retweet"></i></span>

                      <div class="info-box-content ">
                        <span class="info-box-text ">Propuestas Bachillerato<p> General 
                        Capturadas</p></span>
                        <span class="info-box-number"><?php echo count(PropuestaData::getAllBg());?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                      <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box ">
                      <span class="info-box-icon bg-orange"><i class="fa fa-check"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Validadas Supervision</span>
                        <span class="info-box-number"><?php echo count(PropuestaData::getAllSBg());?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box ">
                      <span class="info-box-icon bg-orange"><i class="fa fa-check"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Validadas SD Regional</span>
                        <span class="info-box-number"><?php echo count(PropuestaData::getAllSRBg());?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-green">
                      <span class="info-box-icon "><i class="fa fa-check"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Validadas DBG</span>
                        <span class="info-box-number"><?php echo count(PropuestaData::getAllDBg());?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>

                      <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-red">
                      <span class="info-box-icon "><i class="fa fa-check"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Rechazos Supervision</span>
                        <span class="info-box-number"><?php echo count(PropuestaData::getAllRSBg());?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-red">
                      <span class="info-box-icon "><i class="fa fa-check"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Rechazos SD Regional</span>
                        <span class="info-box-number"><?php echo count(PropuestaData::getAllRSRBg());?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>



                      <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-red">
                      <span class="info-box-icon "><i class="fa fa-check"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Rechazos DBG</span>
                        <span class="info-box-number"><?php echo count(PropuestaData::getAllRDBg());?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>



                    <?php if(Core::$user->kind==2||Core::$user->kind==1):?>

                      <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box ">
                      <span class="info-box-icon bg-red"><i class="fa fa-check"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Rechazos SEMS</span>
                        <span class="info-box-number"><?php echo count(PropuestaData::getAllRSemsBg());?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple">
                      <span class="info-box-icon "><i class="fa fa-check"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Validadas SEMS</span>
                        <span class="info-box-number"><?php echo count(PropuestaData::getAllSemsBg());?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                <?php endif;?> 
                 
</div>     
              
</section>
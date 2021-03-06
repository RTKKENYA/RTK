<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">   
        <!-- Bootstrap core CSS -->   
        <link rel="icon" href="<?php echo base_url() . 'assets/img/coat_of_arms.png' ?>" type="image/x-icon" />
        <link href="<?php echo base_url() . 'assets/css/style.css' ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url() . 'assets/css/dashboard.css' ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url() . 'assets/boot-strap3/css/bootstrap.min.css' ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url() . 'assets/boot-strap3/css/bootstrap-responsive.css' ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url() . 'assets/css/normalize.css' ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url() . 'assets/css/jquery-ui-1.10.4.custom.min.css' ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url() . 'assets/css/font-awesome.min.css' ?>" type="text/css" rel="stylesheet"/>
        <script src="<?php echo base_url() . 'assets/scripts/jquery-1.8.0.js' ?>" type="text/javascript"></script>
        <link href="<?php echo base_url() . 'assets/datatable/TableTools.css' ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url() . 'assets/datatable/dataTables.bootstrap.css' ?>" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url() . 'assets/css/font-awesome.min.css' ?>" type="text/css" rel="stylesheet"/>
        <script src="<?php echo base_url() . 'assets/scripts/jquery.js' ?>" type="text/javascript"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/tablecloth/assets/js/jquery.tablesorter.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/tablecloth/assets/js/jquery.metadata.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/tablecloth/assets/js/jquery.tablecloth.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tablecloth/assets/css/tablecloth.css">
        <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/datatable/jquery.dataTables.js"></script>

        <!-- Place inside the <head> of your HTML -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/tinymce/tinymce.min.js"></script>
        

        <title>HCMP | <?php echo $title; ?></title>

        <style>
            .active-panel{
                border-left: 6px solid #36BB24;
            }
        </style>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </script>
    </head>
<body screen_capture_injected="true" style="">

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="display:inline-block;" src="<?php echo base_url(); ?>assets/img/coat_of_arms-resized1.png" class="img-responsive " alt="Responsive image">
                <div id="" style="display:inline-block;margin-top:2%;">
                    <span style="font-size: 0.95em;font-weight: bold; ">Ministry of Health</span><br />
                    <span style="font-size: 0.85em;">Health Commodities Management Platform (HCMP)</span><br/>	
                    <span style="font-size: 0.85em;">Rapid Test Kit System - RTKs</span>	
                </div>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right" >
                    <li><a class="" href="<?php echo site_url() . 'Home'; ?>" ><span class="glyphicon glyphicon-home" ></span>HOME</a> </li>              
                    <?php                    
                    $log_status = $this->session->userdata('log_status');
                    if($log_status==0){?>                    
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" ></span><?php echo $this->session->userdata('full_name'); ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <!--li><a style="background: whitesmoke;color: black !important" href="<?php echo site_url("user/change_password"); ?>"><span class="glyphicon glyphicon-pencil" style="margin-right: 2%;"></span>Change password</a></li-->                
                                <li><a style="background: whitesmoke;color: black !important" href="#" data-toggle="modal" data-target="#Change_Password"><span class="glyphicon glyphicon-pencil" style="margin-right: 2%;"></span>Change password</a></li>                
                                <li><a style="background: whitesmoke;color: black !important" href="<?php echo site_url("user/logout"); ?>" ><span class="glyphicon glyphicon-off" style="margin-right: 2%;"></span>Log out</a></li>               
                            </ul>
                        </li>
                    <?php 
                        }else{                    
                            $user_id = $this->session->userdata('user_id');{?>
                           <li><a class="" href="<?php echo site_url() . 'User/login'; ?>" >LOGIN</a> </li>   
                           <li><a class="" href="<?php echo site_url() . 'User/login'; ?>" ></a> </li>   
                        <?php }}?>                  
                    
                </ul>         
            </div>
        </div>

    </div>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>UKI</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/img/favicon.ico">

    <!--  Bootstrap Style -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
     <!--  Font-Awesome Style -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
     <!--  Font-Awesome Animation Style -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome-animation.css" rel="stylesheet" />
     <!--  Pretty Photo Style -->
    <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet" />
        <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!--  Custom Style -->
    <link href="<?php echo base_url(); ?>assets/css/style.css?<?php echo time(); ?>" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!--./ Top Menu End -->
    <div class="div-social-top">
        <i class="fa fa-globe "></i>E-mail:  info@uki.ac.id  | <i class="fa fa-mobile "></i>Call: +021-8092425 &nbsp;
        <a href="<?php echo base_url(); ?>">
            <i class="fa fa-facebook-square "></i>
        </a>
        <a href="<?php echo base_url(); ?>">
            <i class="fa fa-linkedin-square "></i>
        </a>
        <a href="<?php echo base_url(); ?>">
            <i class="fa fa-pinterest-square "></i>
        </a>
    </div>
   <div class="navbar navbar-default navbar-fixed-top menu-back">
        <div class="container">

                 <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url(); ?>assets/img/logo-lppm-uki.png" class="navbar-brand-logo " alt="" />
                </a>
            </div>




  <div class="navbar-collapse collapse" >
                <ul class="nav navbar-nav navbar-right">
                   
                    <li class="dropdown">
                        <a href="<?php echo base_url(); ?>">BERANDA
                            <span></span>

                        </a>
                       
                    </li>
                    <?php echo __get_menus(); ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--./ Social Div End -->
<?php
 $items = wp_get_nav_menu_items("menu"); 
?> 
<!doctype html>
<html class="no-js body-gradient" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>
    <?php echo get_bloginfo( 'name' );?>
    -
    <?php echo get_the_title();?>
</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Place favicon.ico in the root directory -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
</head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="header">
             <div class="container">
                  <div class="row">
                  <div class="col-xs-6">
                       <img src="<?php echo bloginfo('template_directory')?>/images/logoNew.png">
                  </div>
                  <div class="col-xs-6">
                            <span class="pull-right tel">
                                <i class="glyphicon glyphicon-earphone"></i> 
                                <label>020 1000 3245</label>
                            </span>
                            <div class="clear"></div>
                  </div>
                  </div>
             </div>
        </div>

        <div class="menu">
             <div class="container">
                    <ul class="nav nav-pills">
                       <?php foreach ($items as $item):?>
                            <li>
                                <a href="<?php echo $item->url;?>">
                                    <?php echo $item->title;?>
                                </a>
                            </li>
                       <?php endforeach;?> 
                    </ul>
             </div>
        </div>

        
        <div class="container carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="hover" data-interval="30000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo bloginfo('template_directory')?>/images/carousel2.jpg">
              <div class="carousel-caption">
                  
              </div>
            </div>
            <div class="item">
              <img src="<?php echo bloginfo('template_directory')?>/images/carousel1.jpg">
              <div class="carousel-caption">
                  
              </div>
            </div>
             <div class="item">
              <img src="<?php echo bloginfo('template_directory')?>/images/carousel3.jpg">
              <div class="carousel-caption">
                  
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
 <meta charset="<?php bloginfo('charset');?>">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=\, initial-scale=1.0">

              
          <!-- style.css -->


          <!-- dodanie skryptow wordpressa -->
<?php wp_head(  ) ?>
</head>

<body <?php body_class('body-class');?>>

<header class='header-area'>
 <div><h1><a href="<?php bloginfo('url')?>"> <?php bloginfo('name')?></a></h1></div>
 <nav>
  <?php
  if(has_nav_menu( 'header-menu' )){
    wp_nav_menu(array('theme_location' => 'header-menu'));
  }
  ?>
 
</nav>

</header>
<main id='main'>
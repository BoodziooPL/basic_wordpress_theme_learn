<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
 <meta charset="<?php bloginfo('charset');?>">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=\, initial-scale=1.0">
 <title><?php bloginfo('name');?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body <?php body_class('body-class');?>>

<header class='header-area'>
 <div><h1><a href="<?php bloginfo('url')?>"> <?php bloginfo('name')?></a></h1></div>
 <div>
  <?php wp_nav_menu(); ?>
 
 </div>

</header>
<main>
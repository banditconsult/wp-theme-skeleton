<!doctype html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="manifest" href="<?php bloginfo('template_url');?>/assets/img/site.webmanifest">
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />

  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <div id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light px-lg-4">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse  text-center" id="navbarNavAltMarkup">
        <div class="">
          <?// get_search_form(); ?>
        </div>
        <?php wp_nav_menu(array(
					'theme_location' => 'primary', 
					'container' => false,
					'menu' => 'primary-menu',
					'menu_class' => 'nav navbar-nav ml-lg-auto ', 
					'walker' => new wp_nav_walker,
					));?>
      </div>
    </nav>


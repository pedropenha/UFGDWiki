<?php
  # TODO: remove this
  error_reporting(E_ALL);
  
  # init bootstrap helper
  require_once($this->GetThemePath('/') . '/bootstrap_helper.php');
  $bootstrap = new BootstrapHelper($this);
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $bootstrap->title_text; ?></title>
    <!-- Bootstrap Version -->
  
    <base href="<?php echo $bootstrap->site_base ?>" />
    
    <?php echo $bootstrap->meta_robots; ?>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="WikkaWiki" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo
      $bootstrap->config_ent("meta_keywords"); ?>" />
    <meta name="description" content="<?php echo
      $bootstrap->config_ent("meta_description"); ?>" />
    
    <link rel="stylesheet" type="text/css" href="<?php sprintf('%s/%s',
      $bootstrap->theme_css_path, 'print.css'); ?>" media="print" />
    <link rel="icon" href="<?php sprintf('%s/%s', $bootstrap->theme_path,
      'images/favicon.ico'); ?>" media="image/x-icon" />
    <link rel="shortcut icon" href="<?php sprintf('%s/%s',
      $bootstrap->theme_path, 'images/favicon.ico'); ?>" media="image/x-icon" />
    
    <?php echo $bootstrap->rss_revisions_link; ?>
    <?php echo $bootstrap->rss_recent_changes_link; ?>
    <?php echo $bootstrap->universal_edit_button; ?>
    <?php $bootstrap->echo_additional_headers(); ?>
    
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php printf('%s/%s?%s',
      $bootstrap->theme_css_path, 'bootstrap.min.css',
      $bootstrap->theme_hash) ?>" />
    <link rel="stylesheet" type="text/css" href="<?php printf('%s/%s?%s',
      $bootstrap->theme_css_path, 'wikka-bootstrap.css',
      $bootstrap->theme_hash) ?>" />
    <link rel="stylesheet" type="text/css" href="<?php printf('%s/%s?%s',
          $bootstrap->theme_css_path, 'style.css',
          $bootstrap->theme_hash) ?>" />
      <link rel="stylesheet" type="text/css" href="<?php printf('%s/%s?%s',
          $bootstrap->theme_css_path, 'bootstrap-responsive.css',
          $bootstrap->theme_hash) ?>" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>
  
  <body>
    <div class="container">
      <img src="http://egressos.16mb.com/assets/img/logo-ufgd.png" id="img">
    </div>
	
    <!-- BEGIN PAGE WRAPPER -->
    <div id="page" class="container">
	  <?php
	    # display system messages
	    if ( isset($bootstrap->message) && strlen($bootstrap->message)>0 ) {
		  printf('<div class="alert alert-success">%s</div>',
		    $bootstrap->message);
	    }
	  ?>
    
      <!-- BEGIN MASTHEAD -->
      <div class="masthead"">
        <h2 class="muted">
          <?php echo $bootstrap->masthead_html; ?>
        </h2>

        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <?php 
                $dominio = $_SERVER['BASE_URL'];
                ?>
                <!-- Be sure to leave the brand out there if you want it shown -->
                <a class="brand" href="<?php echo $dominio;?>"><i class="fas fa-home"></i></a>

                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="nav-collapse collapse">
                    <?php echo $bootstrap->menu('main_menu'); ?>
                    <?php echo $bootstrap->search_form; ?>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END MASTHEAD -->
	  
	<?php
      # TO BE CONTINUED IN footer.php
	?>
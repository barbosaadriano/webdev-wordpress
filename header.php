<?php
$pasta = esc_url(get_template_directory_uri());
define("URL", $pasta);
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo("name"); ?></title>
        <link rel="stylesheet" type="text/css" 
              href="<?= URL ?>/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" 
              href="<?= URL ?>/style.css">

        <script type="text/javascript" 
        src="<?= URL ?>/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" 
        src="<?= URL ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" 
        src="<?= URL ?>/js/jquery.colorbox-min.js"></script>
        <script type="text/javascript" 
        src="<?= URL ?>/js/jquery.cycle2.min.js"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <a href="<?php bloginfo("url"); ?>/index.php" title="página inicial">
                            <?php
                            if (function_exists('has_custom_logo') && has_custom_logo()) :
                                the_custom_logo();
                            else :
                                bloginfo("name");
                            endif;
                            ?>
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <?php
                        wp_nav_menu(array('theme_location' =>
                            'primary'));
                        ?>                        
                    </div>
                </div>
            </div>
        </header>


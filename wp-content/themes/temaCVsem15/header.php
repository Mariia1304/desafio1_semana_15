<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
        <meta charset="<?php bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php bloginfo('name')?>
        </title>
        <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"/>
        <!-- Scrollbar Custom CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <?php wp_head();?>
    </head>
    <body>
        <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img alt="" src="<?php echo $logo[0]; ?>"/>
                </div>
                <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
                    <?php wp_nav_menu( array( 
                        'theme_location'    => 'header-menu',
                        // 'container_id'      => 'navbarResponsive',
                        // 'container_class'   => 'collapse navbar-collapse',
                        'menu_class'        => 'list-unstyled components'
                        )
                    ); ?>
                <?php } ?>
                  <!-- <ul class="list-unstyled components">
                    <li class="active">
                        <a  href="#about">
                            ACERCA DE MI
                        </a>
                    </li>
                    <li>
                        <a href="#experience">
                            EXPERIENCIA
                        </a>
                    </li>
                    <li>
                        <a  href="#education">
                            EDUCACIÓN
                        </a>
                    </li>
                    <li>
                        <a href="#skills">
                            HABILIDADES
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            CONTACTO
                        </a>
                    </li>
                </ul> -->
            </nav>
            <!-- Page Content -->
            <div id="content">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <button class="btn btn-info" id="sidebarCollapse" type="button">
                                <i class="fas fa-align-left">
                                </i>
                                <span>
                                    Toggle Sidebar
                                </span>
                            </button>
                        </div>
                    </nav>
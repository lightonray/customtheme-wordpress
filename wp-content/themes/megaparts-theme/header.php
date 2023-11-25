<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description=" content="MegaParts Theme LR">
    <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/megaparts-theme/images/mplogo.png">
    <?php wp_head(); ?>
</head>


<body>
<header>   

    <div style="display: flex; padding-top: 20px" class="logo"> 
        <!-- SIDE BAR HAMBURGER -->
    <div class="open-sidebar" style="cursor: pointer; margin-left: 10px;"><i style="font-size: 30px"class="bi bi-list"></i></div>
    <!-- Logo -->
    <a href="<?php echo esc_url(home_url()); ?>">   
        <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full'); // 'full' size of the logo image
            }
        ?>
        <img src="<?php echo esc_url($logo[0]); ?>" alt="logo" width="<?php echo esc_attr($logo[1]); ?>" height="<?php echo esc_attr($logo[2]); ?>">
    </a>
    </div>

    <!-- Sidebar -->
    <aside class="sidebar">
        <nav>
            <!-- Logo -->
        <a href="<?php echo esc_url(home_url()); ?>">   
        <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full'); // 'full' size of the logo image
            }
        ?>
        <img src="<?php echo esc_url($logo[0]); ?>" alt="logo" width="<?php echo esc_attr($logo[1]); ?>" height="<?php echo esc_attr($logo[2]); ?>">
    </a>
            <ul>
            
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'secondary',
                        'container' => '',
                        'theme_location' => 'primary'
                    )
                )
            ?> 
            </ul>
            <?php get_search_form() ?>
            <?php dynamic_sidebar('sidebar-1')?>
        </nav>
        
    </aside>


    <!-- Navigation -->
    <nav>
    <?php 
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary'
            )
        )
    ?>   
    </nav>

</header>

<body>

<head>
    <?php wp_head(); ?>
    <!-- Include GSAP and dependencies directly -->
</head>

<header>   
    <!-- Logo -->
    <div class="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"></a>
    </div>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="#section1">About Us</a></li>
            <li><a href="#section2">Services</a></li>
            <li><a href="#section3">Contact Us</a></li>
            <!-- Add more menu items with respective section IDs -->
        </ul>
    </nav>
</header>
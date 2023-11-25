<?php get_header(); ?>


<main>
    <div>

    <?php
    $args = array(
        'post_type' => 'page', // Fetch pages
        'pagename' => 'welcome-to-our-website', // Replace with the slug of your page
    );

    $welcome_page_query = new WP_Query($args);

    if ($welcome_page_query->have_posts()) {
        while ($welcome_page_query->have_posts()) {
            $welcome_page_query->the_post();
            $title = get_the_title();
            $content = get_the_content();
            $background_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the featured image URL
        }
        wp_reset_postdata(); // Reset post data
    }
    ?>

    <section style="background-image: url('<?php echo esc_url($background_image_url); ?>');">
        <div>
            <h1><?php echo esc_html($title); ?></h1>
            <div><?php echo apply_filters('the_content', $content); ?></div>
        </div>
    </section>

   

 

    </div>
</main>


<?php get_footer(); ?>

<?php get_header(); ?>


<main>
    <section class="services">
        <div class="service-container">
        <?php
            if( have_posts()) {
                while( have_posts()) {
                    the_post();
                    get_template_part( 'template-parts/content', 'archive');
                    }
                }
            ?>
        </div>
        <?php the_posts_pagination() ?>
    </section>
    
</main>



<?php get_footer(); ?>

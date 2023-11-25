<?php get_header(); ?>


<main>
    <section class="about-us">
        
        <div class="about-content">
        <?php
        
            if( have_posts()) {
                while( have_posts()) {
                    the_post();
                    get_template_part( 'template-parts/content', 'page');
                    }
                }
            ?>
        </div>
    </section>
    
</main>



<?php get_footer(); ?>

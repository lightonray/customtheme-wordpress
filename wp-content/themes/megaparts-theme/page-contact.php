<?php
/*
Template Name: Contact Page Template
*/

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <main>
            <section class="contact" id="section3">
                <div class="contact-info">
                    <?php the_content(); ?>
                </div>
            </section>
        </main>
        <?php
    }
}

get_footer();
?>
<?php get_header(); ?>

<main>
        <section class="services">
            <div class="service-container">
                <?php 
                while (have_posts()) : the_post();
                ?>
                    <div class="service-item">
                        <div class="service-content">
                        <div class="meta mb-3">
                            <span class="date"><?php the_date() ?></span>
                            <?php the_tags('<span class="tag"><i class="bi bi-tags"></i>','</span><span class="tag"><i class="bi bi-tags"></i>', '</span>') ?>
                            <span class="date"><?php the_date() ?></span>
                            <span class="tag"><i class="bi bi-tags"></i>category</span>
                            <h2 style="padding-top: 50px"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php 
                endwhile;
                ?>
            </div>
        </section>
</main>


<?php get_footer(); ?>

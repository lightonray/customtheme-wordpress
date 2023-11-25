<div class="container">
    <div class="service-item">
        <div class="service-content">
            <div class="meta mb-3">

            <span class="date"><?php the_date() ?></span>
                        <?php the_tags('<span class="tag"><i class="bi bi-tags"></i>','</span><span class="tag"><i class="bi bi-tags"></i>', '</span>') ?>
                        <span class="date"><?php the_date() ?></span>
                        <h2 style="padding-top: 50px"><?php the_title(); ?></h2>
                <div style="margin: 0 auto;">
                    <?php
                        $thumbnail_id = get_post_thumbnail_id(); // Get the ID of the featured image
                        if ($thumbnail_id) {
                            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full')[0]; // Get the URL of the featured image
                            ?>
                            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="">
                            <?php
                        }
                    ?>
               </div>
                    <?php
                        the_excerpt();
                    ?>
                <a href="<?php the_permalink() ?>">Read More..</a>
        </div>
    </div>
</div>

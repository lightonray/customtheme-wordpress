<?php get_header(); ?>

<body>

<main id="smooth-wrapper">
    <div id="smooth-content">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Website</h1>
            <p>Template by: lightonray</p>
            <a href="#cta" class="cta-button">Get Started</a>
        </div>
    </section>

    <?php
// Get the About Us page content
$about_page_id = 17; // Replace with the actual ID of your "About Us" page
$about_page = get_post($about_page_id);

if ($about_page) {
    $content = apply_filters('the_content', $about_page->post_content);

    // Find the first occurrence of an image tag in the content
    preg_match('/<img.+?src=[\'"](.*?)[\'"].*?>/i', $content, $matches);
    $first_image = isset($matches[1]) ? $matches[1] : '';

    ?>
    <section class="about-us">
        <div class="about-content">
            <div class="about-image">
                <?php if (!empty($first_image)) : ?>
                    <img src="<?php echo esc_url($first_image); ?>" alt="<?php echo esc_attr($about_page->post_title); ?>">
                <?php endif; ?>
            </div>
            <div class="about-text">
                <h2><?php echo esc_html($about_page->post_title); ?></h2>
                <?php
                // Get the content (two paragraphs)
                $paragraphs = explode("</p>", $content);
                if (count($paragraphs) >= 2) {
                    echo $paragraphs[0] . '</p>'; // Display the first two paragraphs
                    echo $paragraphs[1] . '</p>';
                } else {
                    echo $content; // Display all content if less than two paragraphs
                }
                ?>
            </div>
        </div>
    </section>
    <?php
}
?>




    <!-- Services Section -->
    <section class="services">

    <div class="service-container">
        <?php 
        while (have_posts()) : the_post();
            $service_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); // Get service image URL
        ?>
            <div class="service-item">
                <div class="service-content">
                    <?php if ($service_image) : ?>
                        <img src="<?php echo esc_url($service_image[0]); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
            </div>
        <?php 
        endwhile;
        ?>
    </div>
</section>


    <!-- Contact Section -->
    <section class="contact">
    <div class="contact-info">
        <h2>Contact Us</h2>
        <p>Feel free to reach out to us for any inquiries.</p>
    </div>
    <div class="contact-form-container">
        <h3>Send Us a Message</h3>
        <form action="#" method="post" class="contact-form">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</section>

    </div>
</main>


<?php get_footer(); ?>
</body>
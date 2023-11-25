<?php get_header(); ?>

<main id="main"  class="site-main">
    <section style="padding: 120px;" class="content-area">
        <div  style="margin: 50px" class="container">
            <header class="page-header" style="background-color: white">
                <h1  style="margin-bottom:20px" class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'text-domain' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header><!-- .page-header -->

            <?php if ( have_posts() ) : ?>
                <div class="search-results">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article; id="post-<?php the_ID(); ?>" <?php post_class('search-result'); ?>>
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <?php the_posts_navigation(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Sorry, no results found.', 'text-domain' ); ?></p>
            <?php endif; ?>
        </div><!-- .container -->
    </section><!-- .content-area -->
</main><!-- #main -->

<?php get_footer(); ?>
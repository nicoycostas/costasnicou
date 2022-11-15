<?php get_header(); ?>
    <div class="main-blog-grid">
        <aside class="blog-left-sidebar">

        </aside>

        <main class="blog-main-area">
            <h1>Blog</h1>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="blog-post">
                    <div class="blog-post-img" style="background-size:cover; background-position: center; background-image: url(<?php echo the_post_thumbnail_url();?>)">

                    </div>

                    <div class="blog-post-content">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt() ?>
                    
                        <a class="btn-blog" href="<?php echo get_permalink(); ?>">Read More</a>
                    </div>
                    

                </article>
                
                <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </main>

        <aside class="blog-right-sidebar">

        </aside>

    </div>
<?php get_footer(); ?>
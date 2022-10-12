<?php get_header(); ?>

    <div class="services-cover">
       <h1><?php the_title(); ?></h1>
    </div>

    <main class="page-content">
        <article class="single-post-content">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>        
                <?php the_content(); ?> 
                <?php endwhile; ?>
            <?php endif; ?>
            <a class="get-back" href="<?php echo get_home_url(); ?>">Back to Homepage</a>
        </article>
        
    </main>
 
<?php get_footer(); ?>
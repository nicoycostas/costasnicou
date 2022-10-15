<?php get_header(); ?>

    <header id="technical-support-cover" class="services-cover">
       <h1><?php the_title(); ?></h1>
    </header>

    <main class="page-content">
        <article class="single-post-content">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>        
                <?php the_content(); ?> 
                <?php endwhile; ?>
            <?php endif; ?>
            <a class="get-back-page" href="<?php echo get_home_url(); ?>">Back to Homepage</a>
        </article>
        
    </main>
 
<?php get_footer(); ?>
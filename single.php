<?php get_header(); ?>

    <!-- background -->
    <div class="single-post-img" style="background-size:cover; background-image: url(<?php echo the_post_thumbnail_url();?>)">
               
    </div>

    <main>
        <div id="sidebar-left" class="grid-box">

        </div>

        <!-- post content -->
        <article id="post-content" class="grid-box single-post-content">           
                <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post();  ?>
                            <!-- // Display post content -->
                            <h1><?php the_title(); ?></h1>      
                            <p><?php the_content(); ?></p>
                        <?php
                        endwhile; 
                    endif; 
                ?>
                <a href="<?php echo get_home_url(); ?>">Back to Homepage</a>
        </article>

        <div id="sidebar-right" class="grid-box">

        </div>


        
    </main>
   

<?php get_footer(); ?>
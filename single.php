<?php get_header(); ?>

    <!-- background -->
    <div class="single-post-img" style="background-size:cover; background-image: url(<?php echo the_post_thumbnail_url();?>)">
               
    </div>

    <main>
        <aside id="sidebar-left" class="grid-box">

        </aside>

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
                <a class="get-back" href="<?php echo get_home_url(); ?>">Back to Homepage</a>
        </article>

        <aside id="sidebar-right" class="grid-box">

        </aside>
        

        
    </main>
   

<?php get_footer(); ?>
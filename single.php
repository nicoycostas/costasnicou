<?php get_header(); ?>

    <!-- background -->
    <div class="single-post-img" style="background-size:cover; background-image: url(<?php echo the_post_thumbnail_url();?>)">
               
    </div>

    <main class="main-single">
        <aside id="sidebar-left" class="grid-box">
           
            <h2>Latest Posts</h2>
            <section class="sidebar-posts">
                <?php
                    // the query
                    $the_query = new WP_Query( array( 
                        'post_type' =>'post',
                        'posts_per_page'=> 3,
                        ) );
                    ?>
                    
                    <!-- looping query -->
                    <?php if ( $the_query->have_posts() ) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <article class="sidebar-post">
                                <div class="sidebar-post-img" style="background-size:cover; background-position: center; background-image: url(<?php echo the_post_thumbnail_url();?>)">
                                
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt() ?>
                                <a href="<?php echo get_permalink(); ?>" class="btn-blog">Read More</a>
                            </article>
                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </section>
            <a class="get-back-sidebar" href="<?php echo get_home_url(); ?>">Back to Homepage</a>
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
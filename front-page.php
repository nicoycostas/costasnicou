<?php get_header(); ?>
    <div class="cover-img">
        <div class="cover-img-content">
            <h1>Hi I'm Costas Nicou</h1>
            <h2>Linux System Admin and Wordpress Web Developer</h2>
        
            <a href="https://drive.google.com/file/d/1dMf0PRFVd023t9I3Ct28i4s_NReFc3N3/view?usp=sharing" target="_blank" class="btn-cover">Download my Resume</a>
        
        </div>

        
    </div>

    <section id="profile" class="profile">
        <!-- Profile -->
        <article class="profile-content">
            <!-- img -->
            <img src=" <?php echo get_template_directory_uri() . '/assets/imgs/profile/profile-pic.webp'; ?>" alt="Profile Photo" width="200" height="200">
            <p>As an  <span class="brand">enthusiastic</span> researcher and <span class="brand"> hands on </span>learner during the last years, I have gained valuable experiences through studies and professional encounters. With an immense drive for <span class="brand">success</span> I am determined to build a great track record that will benefit any collaboration career path and organization.</p>
        </article>
       
        

        <!-- text -->
    </section>

    <!-- Education & Experience -->
    <section id="eduexp" class="eduexp-section" >
        <div class="content ">
           
             <!-- experience -->
            <article class="eduexp">
                <h3>Experience</h3>
                
                <section class="exp-item">                  
                    <i class="fas fa-briefcase"></i>                    
                    <h4>IT Support Engineer</h4>
                    <p>Primetel PLC, (Sep 2021 - Sep 2022)</p>
                </section>
                <section class="exp-item">
                    <i class="fas fa-briefcase"></i>   
                    <h4>Wordpress Web Developer</h4>
                    <p>Convertico Media, (Feb 2020 - Jul 2020)</p>
                </section>
                <section class="exp-item">
                    <i class="fas fa-briefcase"></i>
                    <h4>Support Officer </h4>
                    <p>Tototheo Maritime, (Apr 2019 - Aug 2019) </p>
                </section>
                <section class="exp-item">
                    <i class="fas fa-briefcase"></i>
                    <h4>Ecommerce Web Developer</h4>
                    <p>Cellmacke, (2016 - 2017)</p>
                </section>
             
            </article>

             <!-- education -->
            <article class="eduexp">
                <h3>Education</h3>

                <section class="exp-item">
                    <i class="fas fa-university"></i>
                    <h4>Linux System Administrator</h4>
                    <p>Linkedin Learning, (Jul 2022 - Aug 2022)</p>
                </section>

                <section class="exp-item">
                    <i class="fas fa-university"></i>
                    <h4>Front End Web Developer</h4>
                    <p>Linkedin Learning, (2019 - 2020)</p>
                </section>                

                <section class="exp-item">
                    <i class="fas fa-university"></i>
                    <h4>BEng Computer Systems and Networks</h4>
                    <p>Edinburgh Napier University, (2016 - 2018)</p>
                </section>

                <section class="exp-item">
                    <i class="fas fa-university"></i>
                    <h4>Diploma in Computer Technology</h4>
                    <p>Cyprus College, (2013 - 2015)</p>
                </section>
             
            </article>
        </div>
    </section>

    <!-- Portfolio Web Work -->
    <section id="portfolio" class="portfolio">
        <h2>Portfolio</h2>
        <div class="content">
            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/mizuxe.webp';?>" alt="Bootstrap Project">
                <a href="https://nicoycostas.github.io/mizuxe/" target="_blank" class="btn">View Project</a>
                

            </article>

            <article class="project">
                <img class="project-img" src="<?php echo get_template_directory_uri() . '/assets/imgs/portfolio/leviotech.webp'; ?>" alt="Ecommerce Template made with HTML and CSS">
                <a href="https://nicoycostas.github.io/leviotech/" target="_blank" class="btn">View Project</a>
            </article>

            <article class="project">
                <img class="project-img" src="<?php echo get_template_directory_uri() . '/assets/imgs/portfolio/nasa.webp';?>" alt="Nasa's Web API Picture of the Day">
                <a href="https://nicoycostas.github.io/server-arex/" target="_blank" class="btn">View Project</a>
            </article>

            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/google-search.webp';?>" alt="Google Search Project">
                <a href="https://nicoycostas.github.io/google-search/" target="_blank" class="btn">View Project</a>
            </article>
           
        </div>

    </section>

    <!-- Articles -->
    <section id="blog" class="blog">
        <h2>Blog</h2>
        <div class="blog-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="blog-content-article">
              
                <!-- image -->
                <div class="img" style="background-size:cover; background-position: center; background-image: url(<?php echo the_post_thumbnail_url();?>)">
                    
                </div>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt() ?>
                <!-- butn -->
                <a href="<?php echo get_permalink(); ?>" class="btn-blog">Read More</a>
            </article>
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        </div>
        

    </section>

    <!-- services -->
    <section id="services" class="services">

        <h2>Services I Offer</h2>

        <div class="services-content">

            <div class="service">
                <h4>Technical Support</h4>
                <p>Installation & configuration of any computer device hardware, operating systems and applications. Maintenance and monitoring of computer security and performance.</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M624 384h-608C7.25 384 0 391.3 0 400V416c0 35.25 28.75 64 64 64h512c35.25 0 64-28.75 64-64v-16C640 391.3 632.8 384 624 384zM128 96h384v256h64V80C576 53.63 554.4 32 528 32h-416C85.63 32 64 53.63 64 80V352h64V96zM304 336h32c8.801 0 16-7.201 16-16V272h48C408.8 272 416 264.8 416 256V224c0-8.801-7.199-16-16-16H352V160c0-8.801-7.199-16-16-16h-32C295.2 144 288 151.2 288 160v48H240C231.2 208 224 215.2 224 224v32c0 8.799 7.199 16 16 16H288V320C288 328.8 295.2 336 304 336z"/></svg>
                <a href="<?php echo get_home_url(); ?>/technical-support">Learn More</a>    
            </div>

            <div class="service">
                <h4>Wordpress Web Development</h4>
                <p>Web Development tailored to your individual needs with the most powerful CMS system. Theme customization and installation of additional plugins for site functionality expansion.</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8.9 0 1.8.1 2.8.2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7.3 13.7.3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"/></svg>
                <a href="<?php echo get_home_url(); ?>/wordpress-web-development">Learn More</a>    
            </div>

            <div class="service">
                <h4>Web Hosting & Domain Registration</h4>
                <p>Register your domain name and choose from a variety of web hosting solutions. Dedicated or shared web hosting based on your needs. Early Bird Offer <strong>FIRST MONTH FREE</strong> on AWS Cloud Web Server.</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M480 288H32c-17.62 0-32 14.38-32 32v128c0 17.62 14.38 32 32 32h448c17.62 0 32-14.38 32-32v-128C512 302.4 497.6 288 480 288zM352 408c-13.25 0-24-10.75-24-24s10.75-24 24-24s24 10.75 24 24S365.3 408 352 408zM416 408c-13.25 0-24-10.75-24-24s10.75-24 24-24s24 10.75 24 24S429.3 408 416 408zM480 32H32C14.38 32 0 46.38 0 64v128c0 17.62 14.38 32 32 32h448c17.62 0 32-14.38 32-32V64C512 46.38 497.6 32 480 32zM352 152c-13.25 0-24-10.75-24-24S338.8 104 352 104S376 114.8 376 128S365.3 152 352 152zM416 152c-13.25 0-24-10.75-24-24S402.8 104 416 104S440 114.8 440 128S429.3 152 416 152z"/></svg>
                <a href="<?php echo get_home_url(); ?>/web-hosting-and-domain-registration">Learn More</a>        
            </div>

        </div>

     

    </section>

    <!-- contact -->
    <section id="contact" class="contact">
        <h2>Contact Me</h2>
        <div class="contact-content">
           
            <!-- content left -->
            <div class="contact-content-left">
                <img src=" <?php echo get_template_directory_uri() . '/assets/imgs/contact/contact.webp'; ?>" alt="Contact Me Icons" width="600" height="500">
                <div class="social-icons">
                    

                    <div id="linkedin-icon" class="icon">
                        <!-- linkedin -->
                        <a href="https://www.linkedin.com/in/costasnicou/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
                    </div>

                    <div id="fb-icon" class="icon">
                        <!-- facebook -->
                        <a href="https://www.facebook.com/costas.nicou.3/" target="_blank"><svg id="fb-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
                    </div>

                    <div id="twitter-icon" class="icon">
                        <!-- twitter -->    
                        <a href="https://twitter.com/CostasNicou" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>                
                    </div>

                    <div id="youtube-icon" class="icon">
                        <!-- youtube-->      
                        <a href="https://www.youtube.com/channel/UCfcLp_coYkW27ky4aOhsBfw" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a>                  
                    </div>
                </div>

                <div class="contact-details">
                    <p> <strong>Tel:</strong> +357 96916096</p>
                    <p> <strong>Location:</strong> Remote Work</p>
                </div>
               
                
            
            </div>
            
            
            <!-- content right-->
            <div class="contact-content-right">
                 <?php echo apply_shortcodes( '[contact-form-7 id="21" title="Contact form 1"]' ); ?>
            </div>
        </div>
      
    </section>

<?php get_footer(); ?>
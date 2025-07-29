<?php get_header(); ?>
    <section id="home" data-section="home" class="cover-img">
        <div class="cover-img-content">
            <h1>Hi I'm Costas Nicou</h1>
            <h2>IT Technician and Wordpress Web Developer</h2>
        
            <a href="<?php echo get_template_directory_uri() . '/assets/Kostas Nikou - Resume.pdf'; ?>" target="_blank" class="btn-cover">Download my Resume</a>
        
        </div>

        
    </section>

    <section id="profile" data-section="profile" class="profile section">
        <!-- Profile -->
        <article class="profile-content">
            <!-- img -->
            <img src=" <?php echo get_template_directory_uri() . '/assets/imgs/profile/profile-pic.webp'; ?>" alt="Profile Photo" width="200" height="200">
            <p>As an  <span class="brand">enthusiastic</span> researcher and <span class="brand"> hands on </span>learner during the last years, I have gained valuable experiences through studies and professional encounters. With an immense drive for <span class="brand">success</span> I am determined to build a great track record that will benefit any collaboration career path and organization.</p>
        </article>

        <!-- text -->
    </section>

    <!-- Education & Experience -->
    <section id="eduexp"  class="eduexp-section section" >
        <div class="content ">
            <div class="eduxexp-content-wrapping">
                <!-- experience -->
                <article class="eduexp">
                    <h3>Experience</h3>
                    <section class="exp-item">
                        <i class="fas fa-briefcase"></i>   
                        <h4>IT Technician / Junior Systems Engineer</h4>
                        <p>Noteris Services Ltd, (Aug 2023 - Current)</p>
                    </section>
                
                    <section class="exp-item">
                        <i class="fas fa-briefcase"></i>
                        <h4>NOC Analyst</h4>
                        <p>Equiti Group, (Nov 2022 - Mar 2023)</p>
                    </section>
                                
                    <section class="exp-item">                  
                        <i class="fas fa-briefcase"></i>                    
                        <h4>IT Support Engineer</h4>
                        <p>Primetel PLC, (Sep 2021 - Sep 2022)</p>
                    </section>

                    <section class="exp-item">                  
                        <i class="fas fa-briefcase"></i>                    
                        <h4>Junior Wordpress Web Developer</h4>
                        <p>Convertico Media, (Feb 2020 - Jul 2020)</p>
                    </section>
                                
                    
                </article>

                <!-- education -->
                <article class="eduexp ">
                    <h3>Education</h3>
                    <div class="scroll">
                                                
                        <section class="exp-item">
                            <i class="fas fa-university"></i>
                            <h4>Advanced Bash Scripting</h4>
                            <p>Issued by Kodekloud (Dec 2024)</p>
                        </section>  
                        

                        <section class="exp-item">
                            <i class="fas fa-university"></i>
                            <h4>Linux Red Hat System Administration</h4>
                            <p>Issued by Red Hat (Apr 2024)</p>
                        </section>   

                        <section class="exp-item">
                            <i class="fas fa-university"></i>
                            <h4>Programming in Javascript</h4>
                            <p>Issued by Meta, Coursera (Oct 2023)</p>
                        </section> 


                        <section class="exp-item">
                            <i class="fas fa-university"></i>
                            <h4>HTML & CSS in Depth</h4>
                            <p>Issued by Meta, Coursera (Apr 2023)</p>
                        </section> 
                    
                        <section class="exp-item">
                            <i class="fas fa-university"></i>
                            <h4>BSc (Hons) Computing</h4>
                            <p>Edinburgh Napier University, (2016 - 2020)</p>
                        </section>

                        <section class="exp-item">
                            <i class="fas fa-university"></i>
                            <h4>Diploma in Computer Technology</h4>
                            <p>Cyprus College, (2013 - 2015)</p>
                        </section>
                    </div>
                </article>
            </div>
        </div>

        <div class="additional-reading">
            <h2 class="caligraphy-header">Additional Reading</h2>
            <!-- Slideshow container -->
            <div class="galery-wrap">  
                <i id="backBtn" class="fa-solid fa-arrow-left"></i>   
                <div class="slideshow-container">
                
                
                    <div class="slide">

                        <img class="slide-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/reading-slider/rhcsa.jpeg';?>" alt="RHCSA Exam Preparation Book">
                        <img class="slide-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/reading-slider/html-css.jpg';?>" alt="HTML and CSS Book">
                        <img class="slide-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/reading-slider/atomic-design.jpg';?>" alt="Bootstrap Project">
                        
                        
                    </div>    

                    <div class="slide">

                        <img class="slide-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/reading-slider/sever-habits.jpg';?>" alt="RHCSA Exam Preparation Book">
                        <img class="slide-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/reading-slider/howtowinfriend.jpg';?>" alt="HTML and CSS Book">
                        <img class="slide-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/reading-slider/belikewater.png';?>" alt="Bootstrap Project">
                    </div>  
                    
                
                </div>
                <i id="nextBtn" class="fa-solid fa-arrow-right"></i>  
            </div>
        </div>
        
    </section>

    <!-- Portfolio Web Work -->
    <section id="portfolio" data-section="portfolio" class="portfolio section">
        <h2>Portfolio</h2>
        <div class="tabs-container">
            <button class="tab tab-active" data-tab="1">CSS & Bootstrap</button>
            <button class="tab" data-tab="2">Javascript</button>
            <button class="tab"data-tab="3" >PHP & Wordpress</button>
            <button class="tab" data-tab="4">Django</button>
        </div>

        <!-- css & bootstrap -->
        <div class="tab-content tab-content-1  tab-content-active">
            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/signup-form.png';?>" alt="Modern Sign Up form developed with html and css">
                <a href="https://costasnicou.github.io/signup-form" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>
            </article>

            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/google-search.webp';?>" alt="Google Search Project">
                <a href="https://nicoycostas.github.io/google-search/" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>
            </article>
            
            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/mizuxe.webp';?>" alt="Bootstrap Project">
                <a href="https://nicoycostas.github.io/mizuxe/" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>
            </article>

           
           
        </div>

        <!-- javascript -->
        <div class="tab-content tab-content-2 ">
          
            <article class="project">
                <img class="project-img" src="<?php echo get_template_directory_uri() . '/assets/imgs/portfolio/guess.png';?>" alt="Guess my number game">
                <a href="https://nicoycostas.github.io/guessmynumber" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>
            </article>

            <article class="project">
                <img class="project-img" src="<?php echo get_template_directory_uri() . '/assets/imgs/portfolio/nasa.webp';?>" alt="Nasa's Web API Picture of the Day">
                <a href="https://nicoycostas.github.io/server-arex/" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>
            </article>

            <article class="project">
                <img class="project-img" src="<?php echo get_template_directory_uri() . '/assets/imgs/portfolio/money-monitor.webp'; ?>" alt="Ecommerce Template made with HTML and CSS">
                <a href="https://costasnicou.github.io/money-monitor/" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>
            </article>

            
        </div>

        <!-- pho & wordpress -->
        <div class="tab-content tab-content-3">

            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/dyn-pages.png';?>" alt="Dynamic pages using PHP">
                <a href="http://213.207.180.122/dyn-php-pages/" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>

            </article>

            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/recipie-app.png';?>" alt="Dynamic pages using PHP">
                <a href="http://213.207.180.122/recipie-app/" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>

            </article>

            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/img-gallery.png';?>" alt="Dynamic pages using PHP">
                <a href="http://213.207.180.122/img-gallery/" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>

            </article>

            

             <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/backoffice.png';?>" alt="Wordpress Theme Backoffice">
                <a href="http://213.207.180.122/backoffice/" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>
            </article>
        </div>

        <!-- django -->
        <div class="tab-content tab-content-4">
            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/youtio.png';?>" alt="Youtube video collection">
                <a href="http://213.207.180.122/youtio" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>
            </article>

            <article class="project">
                <img class="project-img" src=" <?php echo get_template_directory_uri() . '/assets/imgs/portfolio/spend-sense.png';?>" alt="Income/Expense Tracker Web Application">
                <a href="https://spend-sense.com" style="color: #ffffff !important;" target="_blank" class="btn">View Project</a>  
            </article>

           
        </div>

    </section>

    <!-- Articles -->
    <section id="blog" data-section="blog" class="blog section">
        <h2>Blog</h2>
        <div class="blog-content">
            <!-- The query -->
            <?php $loop = new WP_Query( array
                ( 'post_type' => 'post',
                'posts_per_page' => 4, 
                
                ) );
            ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <article class="blog-content-article">
                
                    <!-- image -->
                    <div class="img" style="background-size:cover; background-position: center; background-image: url(<?php echo the_post_thumbnail_url();?>)">
                        
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt() ?>
                    <!-- butn -->
                    <a href="<?php echo get_permalink(); ?>" class="btn-blog">Read More</a>
                </article>
                <?php endwhile; wp_reset_query(); ?>
            <?php wp_reset_postdata(); ?>


        </div>

        <a class="btn-view-more" href="<?php echo get_home_url(); ?>/blog">View More</a>
        

    </section>

    <!-- services -->
    <section id="services" data-section="services" class="services section">

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
    <section id="contact" data-section="contact" class="contact section">
        <h2>Contact Me</h2>
        <div class="contact-content">
           
            <!-- content left -->
            <div class="contact-content-left">
                <img src=" <?php echo get_template_directory_uri() . '/assets/imgs/contact/contact.webp'; ?>" alt="Contact Me Icons" width="600" height="500">
                <div class="social-icons">
                    

                    <div id="linkedin-icon" class="icon">
                        <!-- linkedin -->
                        <a href="https://www.linkedin.com/in/cnicou" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
                    </div>

                    <div id="fb-icon" class="icon">
                        <!-- facebook -->
                        <a href="https://www.facebook.com/costas.nicou.3/" target="_blank"><svg id="fb-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
                    </div>

                    <div id="github-icon" class="icon">
                        <!-- twitter -->    
                        <a href="https://github.com/costasnicou/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a>                
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
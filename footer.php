              <footer class="footer">       
                     <p> &copy; <span id="cpyear"></span> - Designed and Developed by Costas Nicou</p>
              </footer>

              <!--open close menu after link is clicked  -->
              <script>
                     var menu_bar = document.querySelector("#menu-bar");          
                     var menu_bar_items = menu_bar.getElementsByTagName("a");
                     for(i=0; i < menu_bar_items.length; i++){
                            menu_bar_items[i].addEventListener("click", function() {
                                   document.querySelector("#toggle").checked = false;
                            });
                     }
              </script>

              <!-- dynamic copyright date -->
              <script>
                     var copyright = document.querySelector("#cpyear");
                     // Return today's date and time
                     var currentTime = new Date()
                     // returns the year (four digits)
                     var year = currentTime.getFullYear()
                     copyright.innerText = year;
              </script>


              <!-- additional reading slider -->
              <script>      
                     let scrollcontainer = document.querySelector(".slideshow-container");
                     let backBtn = document.getElementById("backBtn");
                     let nextBtn = document.getElementById("nextBtn");
                     
                     scrollcontainer.addEventListener("wheel",(evt)=> {
                            evt.preventDefault();
                            scrollcontainer.scrollLeft += evt.deltaY;
                     });

                     nextBtn.addEventListener("click",function(){
                            scrollcontainer.scrollLeft += 100;
                     });

                     backBtn.addEventListener("click",function(){
                            scrollcontainer.scrollLeft -= 100;
                     });

              
              </script>

              <script src="<?php  echo get_template_directory_uri() . '/assets/js/active-menu.js'; ?>"></script>
              <script src="<?php  echo get_template_directory_uri() . '/assets/js/tabs.js'; ?>"></script>
              <?php wp_footer(); ?>
       </body>
</html>
     

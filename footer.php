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

       <!-- smooth scrolling -->

       <!-- additional reading slider -->
       <script>
              // let slideIndex = 1;
              // showSlides(slideIndex);

              // // Next/previous controls
              // function plusSlides(n) {
              // showSlides(slideIndex += n);
              // }

              // // Thumbnail image controls
              // function currentSlide(n) {
              // showSlides(slideIndex = n);
              // }

              // function showSlides(n) {
              // let i;
              // let slides = document.getElementsByClassName("mySlides");
              // let dots = document.getElementsByClassName("dot");
              // if (n > slides.length) {slideIndex = 1}
              // if (n < 1) {slideIndex = slides.length}
              // for (i = 0; i < slides.length; i++) {
              // slides[i].style.display = "none";
              // }
              // for (i = 0; i < dots.length; i++) {
              // dots[i].className = dots[i].className.replace(" active", "");
              // }
              // slides[slideIndex-1].style.display = "block";
              // dots[slideIndex-1].className += " active";
              // }
       </script>
       <?php wp_footer(); ?>
       
</body>
</html>
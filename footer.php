       <footer>
              <p> &copy; 2022 - Designed and Developed by Costas Nicou</p>
       </footer>
       <?php wp_footer(); ?> 

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

       <!-- smooth scrolling -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script>
              $(document).ready(function(){
              // Add smooth scrolling to all links
              $(".menu-link").on('click', function(event) {

              // Make sure this.hash has a value before overriding default behavior
              if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html').animate({
                     scrollTop: $(hash).offset().top
              }, 1000, function(){
              
                     // Add hash (#) to URL when done scrolling (default click behavior)
                     window.location.hash = hash;
              });
              } // End if
              });
              });
       </script>
</body>
</html>
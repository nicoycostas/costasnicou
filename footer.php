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
       <?php wp_footer(); ?>
       
</body>
</html>
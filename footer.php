       <footer class="footer">
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
      
       <script>
           
       </script>
</body>
</html>
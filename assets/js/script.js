// open close menu after link is clicked
var menu_bar = document.querySelector("#menu-bar");          
var menu_bar_items = menu_bar.getElementsByTagName("a");
for(i=0; i < menu_bar_items.length; i++){
        menu_bar_items[i].addEventListener("click", function() {
        document.querySelector("#toggle").checked = false;


    });
}


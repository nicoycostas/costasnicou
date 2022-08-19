<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5a00dc9b71.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <!-- <link rel="stylesheet" href="./assets/css/app.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">
    <script src="./assets/js/script.js" defer></script>
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header" class="header">
        <!-- cover image -->
        <div class="top-bar">

        </div>

        <nav id="menu" class="menu">
            <p class="welcome-msg">Made with Coffee</p>
            <label for="toggle">&#9776;</label>
            <input type="checkbox" name="" id="toggle">
        
            <ul id="menu-bar" class="menu-bar">
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>">Home</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url() . '/#profile'; ?>">Experience & Education</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>/#portfolio">Portfolio</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>/#blog">Blog</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>/#services">Services</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>/#contact">Contact</a></li>
            </ul>

            <a href="<?php echo get_home_url(); ?>"><svg class="home-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"/></svg></a>
        </nav>
       
            <!-- transpernt menu -->
    </header>
    
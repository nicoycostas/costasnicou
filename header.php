<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5a00dc9b71.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">
    
    <title>Costas Nicou</title>
    <?php wp_head(); ?>
</head>

<body>
    <header id="header" class="header">
        <!-- cover image -->
        <div class="top-bar">

        </div>

        <nav class="menu">
            <p class="welcome-msg">costasnicou.com</p>
            <label for="toggle">&#9776;</label>
            <input type="checkbox" name="" id="toggle">
        
            <ul class="menu-bar">
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>">Home</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>/#profile">Experience & Education</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>/#portfolio">Portfolio</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>/#blog">Blog</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>/#services">Services</a></li>
                <li class="menu-list-item"><a class="menu-link" href="<?php echo get_home_url(); ?>/#contact">Contact</a></li>
            </ul>
        </nav>
       
            <!-- transpernt menu -->
    </header>
    
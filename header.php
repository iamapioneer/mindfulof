<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MINDFUL OF</title>
        <meta name="description" content="The website of Josh Edwards : DJ, Musician, Producer.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
        <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
        <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#2cda91">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/reset.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
        <script src="<?php echo BASE_URL; ?>js/vendor/modernizr-2.6.2.min.js"></script>
        
    </head>

    <?php  

        if ($page === 'social') {
            $body_class = "social-body";
        } else {
            $body_class = "";
        }

    ?>
    <body <?php echo 'class="' . $body_class . '"';?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <ul class="nav">
            <a href="<?php echo BASE_URL; ?>"><li>Home<?php echo ($page == 'home' ? '<span class="slash" id="home-slash"></span>' : '') ;?></li></a>
            <a href="<?php echo BASE_URL; ?>sounds/"><li>Sounds<?php echo ($page == 'sounds' ? '<span class="slash" id="sounds-slash"></span>' : '') ;?></li></a>
            <a href="<?php echo BASE_URL; ?>dj/"><li>Dj<?php echo ($page == 'dj' ? '<span class="slash" id="dj-slash"></span>' : '') ;?></li></a>
            <a href="<?php echo BASE_URL; ?>producer/"><li>Producer<?php echo ($page == 'producer' ? '<span class="slash" id="producer-slash"></span>' : '') ;?></li></a>
            <a href="<?php echo BASE_URL; ?>social/"><li>Social<?php echo ($page == 'social' ? '<span class="slash" id="social-slash"></span>' : '') ;?></li></a>
            <li id="contact-link">Contact</li>
            <div id="contact-appear" class="hidden">
                <p><a href="mailto:josh@iammindfulof.com">EMAIL: JOSH@IAMMINDFULOF.COM</a></p>
                <p>PHONE: 619.971.4618</p>
            </div>
        </ul>

        <img id="mobile-nav-trigger" src="<?php echo BASE_URL ;?>img/mindfulof-logo-white-empty.png">
        <img id="mobile-nav-hide" src="<?php echo BASE_URL ;?>img/x.png">
        <ul class="mobile-nav">
            <a href="<?php echo BASE_URL; ?>"><li>Home<?php echo ($page == 'home' ? '<span class="slash" id="home-slash-m"></span>' : '') ;?></li></a>
            <a href="<?php echo BASE_URL; ?>sounds/"><li>Sounds<?php echo ($page == 'sounds' ? '<span class="slash" id="sounds-slash-m"></span>' : '') ;?></li></a>
            <a href="<?php echo BASE_URL; ?>dj/"><li>Dj<?php echo ($page == 'dj' ? '<span class="slash" id="dj-slash-m"></span>' : '') ;?></li></a>
            <a href="<?php echo BASE_URL; ?>producer/"><li>Producer<?php echo ($page == 'producer' ? '<span class="slash" id="producer-slash-m"></span>' : '') ;?></li></a>
            <a href="<?php echo BASE_URL; ?>social/"><li>Social<?php echo ($page == 'social' ? '<span class="slash" id="social-slash-m"></span>' : '') ;?></li></a>
        </ul>

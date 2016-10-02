<!DOCTYPE html>
<html>

<head>
    <title><?php print Template::getInstance()->getVar('header', 'title'); ?> &raquo; OA STEM</title>
    <meta property="og:title" content="<?php print Template::getInstance()->getVar('open-graph', 'title'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php print Template::getInstance()->getVar('open-graph', 'url'); ?>">
    <meta property="og:image" content="/images/Square-Favicon.png">
    <meta property="og:description" content="<?php print Template::getInstance()->getVar('open-graph', 'description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link href="/images/Rhombus-Favicon.png" rel="icon">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/styles/styles.css"> </head>

<body>
    <header>
        <nav class="hide-on-mobile">
            <div>
                <ul class="nav-main">
                    <li><a href="/about">About</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li>
                        <a href="/"><img id="nav-logo" src="/images/nav-logo.svg"></a>
                    </li>
                    <li><a href="/signup">Signup</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <nav class="hide-on-desktop">
            <ul class="nav-main">
                <li id="hamburger-img"> <img src="/images/hamburger.svg" onclick="toggle()"> </li>
                <li id="m-logo"> <img src="/images/nav-logo.svg"> </li>
                <li id="m-contact"> <a href="/contact">Contact</a> </li>
            </ul>
            <div id="m-menu">
                <script>
                    function toggle() {
                        $("#hamburger").slideToggle();
                    }
                </script>
                <ul id="hamburger" class="hidden nav-elements">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/signup">Sign Up</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="content-wrap">
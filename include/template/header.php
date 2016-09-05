<!DOCTYPE html>

<html>
    <head>
        <title><?php print Template::getInstance()->getVar('header', 'title'); ?> &raquo; OA STEM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet"> 
        
        <script
			  src="https://code.jquery.com/jquery-3.1.0.min.js"
			  integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
			  crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/styles/styles.css">
    </head>
    <body>
        <header>
            <nav class="hide-on-mobile">
                <div>
                    <ul class="nav-main">
                        <li><a href="/media">Media</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/team">Team</a></li>
                        <li><a href="/"><img id="nav-logo" src="/images/nav-logo.svg"></a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/signup">Sign Up</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <nav class="hide-on-desktop">
                <ul class="nav-main">
                    <li id="hamburger-img">
                        <img src="/images/hamburger.svg" onclick="toggle()">
                    </li>
                    <li id="m-logo">
                        <img src="/images/nav-logo.svg">
                    </li>
                    <li id="m-contact">
                        <a href="/contact">Contact Us</a>
                    </li>
                </ul>
                <div id="m-menu">
                    <script>
                        function toggle(){
                            $("#hamburger").slideToggle();
                        }
                    </script>
                    <ul id="hamburger" class="hidden nav-main">
                            <li><a href="/">Home</a></li>
                            <li><a href="/media">Media</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/team">Team</a></li>
                            <li><a href="/faq">FAQ</a></li>
                            <li><a href="/signup">Sign Up</a></li>
                            <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="content-wrap">
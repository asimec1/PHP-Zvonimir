<?php
print '

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="Projekt">
        <meta name="keywords" content="Home, html, News, Gallery">
        <meta name="author" content="Zvonimir Ćosić">
        <meta itemprop="name" content="Hello Example">
        <meta itemprop="description" content="Some description">
        <meta itemprop="image" content="Your URL">
        <meta property="og:title" content="Hello Example">
        <meta property="og:type" content="article">
        <meta property="og:url" content="Your URL">
        <meta property="og:image" content="Your URL">
        <meta property="og:description" content="Some description">
        <meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
        <meta name="twitter:title" content="Hello Example">
        <meta name="twitter:description" content="Some description">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <title>Zvonimir Ćosić</title>
    </head>

    <body>
        <header>
            <div class="logo">
                <img src="gallery/logo.png">
            </div>
            <nav> ';
                include("menu.php");
            print '
            </nav>
        </header>
        <main>
            
            <h2>PHOTOGRAPHER BASED IN ZAGREB</h2>
            <div class="partnerships">
                <a href="https://www.facebook.com/adria.premium.cars">Adria premium cars</a>
            </div>
            <div class="xxx">
                <a href="https://www.facebook.com/adria.premium.cars">
                    <img src="gallery\cars\partnerships/1.jpg" alt="Adria" title="Adria"></a>
            </div>

            <div class="partnerships">
                <a href="https://amazinga.fun/">Amazinga</a>
            </div>
            <div class="xxx">
                <a href="https://amazinga.fun/">
                    <img src="gallery\cars\partnerships/2.jpg" alt="Amazinga" title="Amazinga"></a>
            </div>

            <div class="partnerships">
                <a href="https://magazinska-klet.hr/">Magazinska klet</a>
            </div>
            <div class="xxx">
                <a href="https://magazinska-klet.hr/">
                    <img src="gallery\cars\partnerships/3.jpg" alt="Magazinska-klet" title="Magazinska-klet" ></a>
            </div>

            <div class="partnerships">
                <a href="https://www.facebook.com/afroditakozmetickisalon">Kozmetički salon Afrodita</a>
            </div>
            <div class="xxx">
                <a href="https://www.facebook.com/afroditakozmetickisalon"></a>
                    <img src="gallery\cars\partnerships/4.jpg" alt="Kozmetički salon Afrodita" title="Kozmetički salon Afrodita"></a>
            </div>
        </main>
    </body>
    <footer>
        <div class="footer">
            <p>Social media:<br>
                <a href="https://www.linkedin.com/company/ifixit" target="_blank"><img src="dr_mreze/linkedin.svg"
                        alt="Linkedin" title="Linkedin" ></a>
                <a href="https://twitter.com/ifixit" target="_blank"><img src="dr_mreze/twitter.svg" alt="Twitter"
                        title="Twitter" ></a>
                <a href="https://plus.google.com/113372414904624897851" target="_blank"><img src="dr_mreze/google.svg"
                        alt="Google+" title="Google+"></a>
            </p> 
            <p>Copyright &copy; 2021. Zvonimir Cosic. <a href="https://google.hr"><svg width="10" height="22"
                        viewBox="0 0 118 36" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false"></svg>
        </div>
    </footer>    
    

';
?>
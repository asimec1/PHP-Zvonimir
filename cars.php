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
            <div id="open" class="box">
                <a target="_blank" href="gallery/cars/1.jpg">
                    <img src="gallery/cars/1.jpg" alt="Cars 1" title="1">
                </a>
                <a target="_blank" href="gallery/cars/2.jpg">
                    <img src="gallery/cars/2.jpg" alt="Cars 2" title="2">
                </a>
                <a target="_blank" href="gallery/cars/3.jpg">
                    <img src="gallery/cars/3.jpg" alt="Cars 3" title="3">
                </a>
                <a target="_blank" href="gallery/cars/4.jpg">
                    <img src="gallery/cars/4.jpg" alt="Cars 4" title="4">
                </a>
                <a target="_blank" href="gallery/cars/5.jpg">
                    <img src="gallery/cars/5.jpg" alt="Cars 5" title="5">
                </a>
                <a target="_blank" href="gallery/cars/6.jpg">
                    <img src="gallery/cars/6.jpg" alt="Cars 6" title="6">
                </a>
                <a target="_blank" href="gallery/cars/10.jpg">
                    <img src="gallery/cars/10.jpg" alt="Cars 7" title="7">
                </a>    
                <a target="_blank" href="gallery/cars/11.jpg">
                    <img src="gallery/cars/11.jpg" alt="Cars 8" title="8">
                </a>    
                <a target="_blank" href="gallery/cars/12.jpg">
                    <img src="gallery/cars/12.jpg" alt="Cars 9" title="9">
                </a>    
                <a target="_blank" href="gallery/cars/13.jpg">
                    <img src="gallery/cars/13.jpg" alt="Cars 10" title="10">
                </a>    
                <a target="_blank" href="gallery/cars/14.jpg">
                    <img src="gallery/cars/14.jpg" alt="Cars 11" title="11">
                </a>    
                <a target="_blank" href="gallery/cars/15.jpg">
                    <img src="gallery/cars/15.jpg" alt="Cars 12" title="12">
                </a>                    
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
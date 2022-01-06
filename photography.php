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
                <a target="_blank" href="gallery/a.jpg">
                    <img src="gallery/a.jpg" alt="Portrait a" title="a">
                </a>
                <a target="_blank" href="gallery/b.jpg">
                    <img src="gallery/b.jpg" alt="Portrait b" title="b">
                </a>
                <a target="_blank" href="gallery/c.jpg">
                    <img src="gallery/c.jpg" alt="Portrait c" title="c">
                </a>
                <a target="_blank" href="gallery/1.jpg">
                    <img src="gallery/1.jpg" alt="Portrait 1" title="1">
                </a>
                <a target="_blank" href="gallery/main1.jpg">
                    <img src="gallery/main1.jpg" alt="Portrait 3" title="3">
                </a>
                <a target="_blank" href="gallery/main.jpg">
                    <img src="gallery/main.jpg" alt="Portrait 5" title="5">
                </a>
                <a target="_blank" href="gallery/6.jpg">
                    <img src="gallery/6.jpg" alt="Portrait 7" title="7">
                </a>
                <a target="_blank" href="gallery/7.jpg">
                    <img src="gallery/7.jpg" alt="Portrait 8" title="8">
                </a>
                <a target="_blank" href="gallery/8.jpg">
                    <img src="gallery/8.jpg" alt="Portrait 9" title="9">
                </a>
                <a target="_blank" href="gallery/9.jpg">
                    <img src="gallery/9.jpg" alt="Portrait 10" title="10">
                </a> 
                <a target="_blank" href="gallery/10.jpg">
                    <img src="gallery/10.jpg" alt="Portrait 11" title="11">
                </a> 
                <a target="_blank" href="gallery/11.jpg">
                    <img src="gallery/11.jpg" alt="Portrait 12" title="12">
                </a> 
                <a target="_blank" href="gallery/15.jpg">
                    <img src="gallery/15.jpg" alt="Portrait 16" title="16">
                </a> 
                <a target="_blank" href="gallery/16.jpg">
                    <img src="gallery/16.jpg" alt="Portrait 17" title="17">
                </a> 
                <a target="_blank" href="gallery/17.jpg">
                    <img src="gallery/17.jpg" alt="Portrait 18" title="18">
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
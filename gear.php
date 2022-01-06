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
            <div class="buy">
                <a href="https://www.yellowstore.hr/">BUY ON YELLOWSTORE</a></div>
            <div class="container">
                <a href="https://www.yellowstore.hr/proizvod/nikon-d750/">
                <img src="https://www.yellowstore.hr/wp-content/uploads/2016/02/740124971.png" alt="img" class="image"></a>

                <a href="https://www.yellowstore.hr/proizvod/af-s-85mm-f18g/">
                <img src="https://www.yellowstore.hr/wp-content/uploads/2016/04/Nikon85f1-8G_400.jpg" alt="img" class="image"></a>

                <a href="https://www.yellowstore.hr/proizvod/nikkor-af-s-50mm-f1-4g/">
                <img src="https://www.yellowstore.hr/wp-content/uploads/2017/02/2180_AF-S-NIKKOR-50mm-f-1.4G_front.png" alt="img" class="image"></a>

                <a href="https://www.yellowstore.hr/proizvod/manfrotto-stativ-mvt502am-video-tripod-with-telescopic-twin-legs/">
                <img src="https://www.yellowstore.hr/wp-content/uploads/2020/07/1344962172_841973-1.jpg" alt="img" class="image"></a>

                <a href="https://www.yellowstore.hr/proizvod/nikon-sb-700/">
                <img src="https://www.yellowstore.hr/wp-content/uploads/2016/03/1276592079.png"alt="img" class="image"></a>
                
                <a href="https://www.yellowstore.hr/proizvod/compagnon-torba-the-backpack-grey-light-brown/">
                <img src="https://www.yellowstore.hr/wp-content/uploads/2019/03/1513890403000_1379335.jpg"alt="img" class="image"></a>

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
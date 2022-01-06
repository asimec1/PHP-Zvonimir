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
            <h3>Contact</h3>
            <div id="contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.308352185161!2d15.989063215827692!3d45.805082618653074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6504d9c68db%3A0x43106071cd0478fa!2sStrojarska%20cesta%2013%2C%2010000%2C%20Zagreb!5e0!3m2!1shr!2shr!4v1610025617252!5m2!1shr!2shr" width="1000" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <form action="http://work2.eburza.hr/pwa/responzive-page/send-contact.php" id="contact_form" name="contact_form" method="POST">
            </div>
                    <label for="fname">First Name *</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
    
                    <label for="lname">Last Name *</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                    
                    <label for="lname">Your E-mail *</label>
                    <input type="email" id="email" name="email" placeholder="Your e-mail.." required>
    
                    <label for="country">Country</label>
                    <select id="country" name="country">
                      <option value="">Please select</option>
                      <option value="BE">Belgium</option>
                      <option value="HR" selected>Croatia</option>
                      <option value="LU">Luxembourg</option>
                      <option value="HU">Hungary</option>
                      <option value="SLO">Slovenia</option>
                      <option value="IT">Italy</option>
                    </select>
    
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.."></textarea>
                    <div class="buttonHolder">
                        <input type="submit" value="Submit">
                    </div>
                </form>
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
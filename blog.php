<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:darkslategray">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Home Page</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="Resume.pdf" target="_blank">Resume</a></li>
                    <li><a href="https://www.linkedin.com/in/aravind-sridhar-622211111?trk=nav_responsive_tab_profile">LinkedIn</a></li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron" style="background-color:darkslategrey">
            <h1 align="center"><font color="wheat"> The Den </font> </h1> 
            <p align= "center"><font color="wheat"> Welcome to The Den! This is where I will track the growth and progress I make in
               different aspects of my life</font> <br>
               
            </p> 
        </div>
    <div align="center">
        <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["submit_email.php"]);?>">
            <font color="wheat" size="4"> Get email alerts when I have a new post! Add your email here: </font><br>
            <input type="text" name="email"> <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="container">
        <h1> <font face="sans-serif" color="wheat">  The Start - 12/19/2016 </font> </h1>
        <p> 
            <font face="sans-serif" color="wheat"> 
                Today I thought that it would be really cool if I had a way to document me, and my life, through my own perspective. 
                As a young adult, I realize that I won't always have the feelings, ambitions, and philosophies, that I have currently.
                How better to capture them than through writing - a direct representation
                of ME.  When I was at work today, (and had some down time) I thought it
                would be kind of important to have my own website on my resume... So I created this in a day! 
                <br>
                SkillS I used/learned: HTML, CSS, BootStrap (this one is awesome), github webhosting, and my new favorite editor - Visual Studio Code
                <br><br>
                In addition to the reasons above, I added this blog in order to practice my shitty writing.
                I hope to share both personal and professional experiences that impact my life.   <br> <br>

                Anyways:
                <br> <br>
                Shout out to my dude Giovanni Walker for having his 2nd Album being released this Wednesday!  I'm so proud 
                of him and can't wait to listen to it. <br> <br> http://gprophecy.com/


            </font>
        </p>
    </div>

    </body>
</html>
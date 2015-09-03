<?php $birthDate = explode("/", "09/29/1992");
//get age from date or birthdate
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
? ((date("Y") - $birthDate[2]) - 1)
: (date("Y") - $birthDate[2]));?>
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<meta name="description" content="Portfolio van Lars Peeters." />
	<meta name="keywords" content="Lars, Peeters, ICT, developer" />
	<meta name="author" content="Lars Peeters" />
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="images/favicon/favicon.png"/>
    <meta property="og:url" content="http://www.larspeeters.be"/>
    <meta property="og:title" content="Lars Peeters - Programmer"/>
    <meta property="og:site_name" content="Lars Peeters - Programmer"/>
    <meta property="og:description" content="Portfolio van Lars Peeters."/>

	<title>Lars Peeters</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Orbitron:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap-3.3.4-dist/js/bootstrap.js"></script>

</head>

<body>
	<header class="navbar navbar-static-top">
         <p class="slogan navbar-brand">< Coding is a lifestyle ></p>    
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        	<span class="icon-bar" ></span>
            <span class="icon-bar" ></span>
            <span class="icon-bar" ></span>
        </button>
        <nav class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav" >
                <li ><a href=# class="menuLink active">Over mij</a></li>
                <li ><a href=# class="menuLink">Portfolio</a></li>
                <li ><a href=# class="menuLink">Contact </a></li>     
            </ul>              
        </nav>
        
    </header>
    <div id="container"><!--
    <section class="contact">
    	<div class="media mail"></div>
        <div class="media facebook"></div>
        <div class="media linkedin"></div>
        <div class="media github"></div>
    </section>-->
    <section class="sub">
            	<img src="images/profile/profile.jpg" align="left"  width="600" id="profilepic" alt="Profielfoto Lars Peeters" title="Lars Peeters"/>
          <div id="identity" ><h2>.Wie ben ik? {</h2>
              <ul id="about">
          	<li class="aboutMe">Naam :: Peeters;</li>
            <li class="aboutMe">Voornaam :: Lars;</li>
            <li class="aboutMe">Leeftijd :: <?php echo $age?> jaar;</li>
            <li class="aboutMe">Woonplaats :: Vilvoorde, België;</li>
            <li class="aboutMe">Interesses :: Webdevelopment, softwaredevelopment, video games;</li>
          </ul><h3>}</h3>
              </div>
        <div id="skills">
        <h2>Vaardigheden worden geladen...</h2>
            <ul >
                <li class="skill">[HTML5 / CSS3] <progress value="75" max="100" ></progress></li>
                <li class="skill">[JavaScript / jQuery] <progress value="60" max="100" ></progress> </li>
                <li class="skill">[PHP] <progress value="65" max="100" ></progress></li>
                <li class="skill">[Visual Basic / C#] <progress value="70" max="100" ></progress> </li>
                <li class="skill">[Linux] <progress value="30" max="100" ></progress></li>
                <li class="skill">[Drupal 7] <progress value="40" max="100" ></progress></li>
            </ul>
        </div>
    </section>
    <section id="studies">
        <h2>/**Werkervaring**/</h2>
        <article class="achievement">
            <img src="images/studies/ThomasMore.png" width="200px" alt="Thomas More Mechelen" title="Thomas More Mechelen" />
            <p>
                <strong>Software Engineer</strong><br/>
                Conac<br/>
                December 2014 - ???
            </p>
        </article>
        <article class="achievement">
            <img src="images/studies/HUB.jpg" width="69px" alt="Hogeschool - Universiteit Brussel" title="Hogeschool - Universiteit Brussel" />
            <p>
                <strong>C# programmer //Stage//</strong><br/>
                NVSM Brussel <br/>
                Februari 2013 - Juni 2013
            </p>
        </article>
        <h2>/**Studies**/</h2>
        <article class="achievement">
            <img src="images/studies/ThomasMore.png" width="200px" alt="Thomas More Mechelen" title="Thomas More Mechelen" />
            <p>
                <strong>Interactive Multimedia Design.</strong><br/>
                Thomas More Mechelen <br/>
                2013 - 2014
            </p>
        </article>
        <article class="achievement">
            <img src="images/studies/HUB.jpg" width="69px" alt="Hogeschool - Universiteit Brussel" title="Hogeschool - Universiteit Brussel" />
            <p>
                <strong>Toegepaste Informatica.</strong><br/>
                Hogeschool - Universiteit Brussel <br/>
                2010 - 2013
            </p>
        </article>
    </section>
</body>
</html>

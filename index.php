<?php
$birthDate = explode("/", "09/29/1992");
//get age from date or birthdate
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
? ((date("Y") - $birthDate[2]) - 1)
: (date("Y") - $birthDate[2]));

require_once "classes/translator.php";

switch($_SERVER['QUERY_STRING']){
    case "en":  $lang = new translator("en");
                break;
    default:   $lang = new translator("nl");;
                break;
}

?>
<!DOCTYPE HTML>
<html lang="nl">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<meta name="description" content="Portfolio van Lars Peeters." />
	<meta name="keywords" content="Lars, Peeters, ICT, developer" />
	<meta name="author" content="Lars Peeters" />
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="images/background/background.png"/>
    <meta property="og:url" content="http://www.larspeeters.be"/>
    <meta property="og:title" content="Lars Peeters - Programmer"/>
    <meta property="og:site_name" content="Lars Peeters - Programmer"/>
    <meta property="og:description" content="<Coding is a lifestyle. />"/>

	<title>Lars Peeters</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Orbitron:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon1.ico">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        function flip() {
            $('.card').toggleClass('flipped');
        }

    </script>
</head>

<body>
	<header class="navbar navbar-static-top">
        <p class="slogan navbar-brand">< Coding is a lifestyle ></p>
        <span id="languages">
            <a href="http://larspeeters.be" >NL</a> || <a href="http://larspeeters.be/?en" >EN</a>
        </span><!--<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        	<span class="icon-bar" ></span>
            <span class="icon-bar" ></span>
            <span class="icon-bar" ></span>
        </button>
        <nav class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav" >
                <li ><a href=# class="menuLink">Over mij</a></li>
            </ul>
        </nav>
        -->
    </header>
    <div id="container">
    <section class="sub">
          <img src="images/profile/profile.jpg" align="left"  width="600" id="profilepic" alt="Profielfoto Lars Peeters" title="Lars Peeters"/>
        <div class="desktop" >
        <div id="identity"><h2>.<?php  echo $lang->t("WieBenIk?"); ?>{</h2>
              <ul id="about">
          	<li class="aboutMe"><?php  echo $lang->t("Naam") ?> :: Peeters;</li>
            <li class="aboutMe"><?php  echo $lang->t("Voornaam") ?>  :: Lars;</li>
            <li class="aboutMe"><?php  echo $lang->t("Leeftijd") ?>  :: <?php echo $age?> jaar;</li>
            <li class="aboutMe"><?php  echo $lang->t("Woonplaats") ?>  :: Vilvoorde, <?php echo $lang->t("België") ?> ;</li>
            <li class="aboutMe"><?php  echo $lang->t("Interesses") ?>  :: Webdevelopment, softwaredevelopment, video games;</li>
          </ul><h3>}</h3>
              </div>
        <div id="skills" >
        <h2><?php  echo $lang->t("Vaardigheden worden geladen...") ?></h2>
            <ul >
                <li class="skill">[HTML5 / CSS3] <progress value="75" max="100" ></progress></li>
                <li class="skill">[JavaScript / jQuery] <progress value="60" max="100" ></progress> </li>
                <li class="skill">[PHP] <progress value="65" max="100" ></progress></li>
                <li class="skill">[Visual Basic / C#] <progress value="70" max="100" ></progress> </li>
                <li class="skill">[Linux] <progress value="30" max="100" ></progress></li>
                <li class="skill">[Drupal 7] <progress value="40" max="100" ></progress></li>
            </ul>
        </div>
        </div>
        <div class="cardcontainer mob"  style="display: none;">
            <div class="card" onclick="flip()">
                <div class="front">
                    <div id="identity"  ><h2>.<?php  echo $lang->t("WieBenIk?"); ?> {</h2>
            <ul id="about">
                <li class="aboutMe"><?php  echo $lang->t("Naam") ?> :: Peeters;</li>
                <li class="aboutMe"><?php  echo $lang->t("Voornaam") ?>  :: Lars;</li>
                <li class="aboutMe"><?php  echo $lang->t("Leeftijd") ?>  :: <?php echo $age?> jaar;</li>
                <li class="aboutMe"><?php  echo $lang->t("Woonplaats") ?>  :: Vilvoorde, <?php echo $lang->t("België") ?> ;</li>
                <li class="aboutMe"><?php  echo $lang->t("Interesses") ?>  :: Webdevelopment, softwaredevelopment, video games;</li>
            </ul><h3>}</h3>
             <div style="text-align: center;">...Flip me!...</div>
        </div>
                    </div>
                <div class="back">
        <div id="skills" >
            <h2><?php  echo $lang->t("Vaardigheden worden geladen...") ?></h2>
            <ul >
                <li class="skill">[HTML5 / CSS3] <progress value="75" max="100" ></progress></li>
                <li class="skill">[JavaScript / jQuery] <progress value="60" max="100" ></progress> </li>
                <li class="skill">[PHP] <progress value="65" max="100" ></progress></li>
                <li class="skill">[Visual Basic / C#] <progress value="70" max="100" ></progress> </li>
                <li class="skill">[Linux] <progress value="30" max="100" ></progress></li>
                <li class="skill">[Drupal 7] <progress value="40" max="100" ></progress></li>
            </ul>

        </div>
                </div>
            </div>
            </div>
    </section>
    <section class="sub" id="achievements">
        <h2>--<?php  echo $lang->t("Werkervaring");  ?>--</h2>
        <article class="achievement desktop"><p>
                <strong>Software Engineer</strong><br/>
                Conac<br/>
                December 2014 - ???
            </p>
        </article>
        <article class="achievement desktop"><p>
                <strong>C# programmer //Stage//</strong><br/>
                NVSM Brussel <br/>
                <?php  echo $lang->t("Februari"); ?> 2013 - <?php  echo $lang->t("Juni"); ?> 2013
            </p>
        </article>
        <div id="workCarousel" class="carousel slide mob" style="display: none;" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#workCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#workCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <article class="achievement"><p>
                            <strong>Software Engineer</strong><br/>
                            Conac<br/>
                            December 2014 - ???
                        </p>
                    </article>
                </div>

                <div class="item">
                    <article class="achievement"><p>
                            <strong>C# programmer //Stage//</strong><br/>
                            NVSM Brussel <br/>
                            <?php  echo $lang->t("Februari"); ?> 2013 - <?php  echo $lang->t("Juni"); ?> 2013
                        </p>
                    </article>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#workCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#workCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

            </a>
        </div><br/><br/>
        <h2>--<?php  echo $lang->t("Studies"); ?>--</h2>
        <article class="achievement desktop"><p>
                <strong>Interactive Multimedia Design.</strong><br/>
                Thomas More Mechelen <br/>
                2013 - 2014
            </p>
        </article>
        <article class="achievement desktop">
            <p>
                <strong><?php  echo $lang->t("Toegepaste Informatica"); ?>.</strong><br/>
                Hogeschool - Universiteit Brussel <br/>
                2010 - 2013
            </p>
        </article>
        <div id="studyCarousel" class="carousel slide mob" style="display: none;" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#studyCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#studyCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <article class="achievement"><p>
                            <strong>Interactive Multimedia Design.</strong><br/>
                            Thomas More Mechelen <br/>
                            2013 - 2014
                        </p>
                    </article>
                </div>

                <div class="item">
                    <article class="achievement">
                        <p>
                            <strong><?php  echo $lang->t("Toegepaste Informatica"); ?>.</strong><br/>
                            Hogeschool - Universiteit Brussel <br/>
                            2010 - 2013
                        </p>
                    </article>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#studyCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#studyCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

            </a>
        </div>

    </section>
    <section class="sub" >
        <div id="social">
            <span class="contactText">GET IN TOUCH</span><br/>
            <div id="mail"><span class="glyphicon glyphicon-envelope" title="Mail"></span>peeters.lars@telenet.be</div>
            <div id="profiles">

            <a href="attachments/cv_Lars_Peeters.pdf" target="_blank"><img class="media" alt="Curriculum Vitae" title="Curriculum Vitae" width="50" src="images\media\document.png" /></a>
            <a href="https://www.facebook.com/MightyM92" target="_blank" ><img class="media" alt="Facebook Profile" title="Facebook" width="50" src="images\media\fb.gif" /></a>
            <a href="https://github.com/larspeeters" target="_blank" ><img class="media" alt="Github Profile" title="Github" width="50" src="images\media\github.png" /></a>
            <a href="http://lnkd.in/j4fqUA" target="_blank" ><img class="media" alt="LinkedIn Profile" title="LinkedIn" width="50" src="images\media\linked.png" /></a>
        </div>
            <br/> <span class="contactText"><br/> WITH ME.</span></div>
    </section>
    </div>
</body>
</html>

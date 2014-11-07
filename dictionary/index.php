<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("dictionary.xml");
    
$xpath = new DOMXPath($xmlDoc);
$entries = $xpath->query("//entry");    

$count = $entries->length; 

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dictionary Template</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script type="text/javascript" src="//use.typekit.net/gxp8lxg.js"></script>
    <script src="js/loadxmldoc.js"></script>
    <script type="text/javascript">
        
        try {
            Typekit.load();
        } catch (e) {}
    </script>
</head>

<body>
    <div class="fixed">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">

                <li class="name">
                    <h1>
                  <a href="../">
                    Back to Main Menu
                  </a>
                </h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a>
                </li>
            </ul>

            <section class="top-bar-section">

                <ul class="right">
                    <li class="divider"></li>
                    <li>
                        <a href="../phrasicon">Phrasicon</a>

                    </li>
                    <li class="divider"></li>
                </ul>
            </section>
        </nav>
    </div>

    <div class="row">
        <div class="large-12 columns">

            <hr>
            <h4 class="title"><a class="home" href="../dictionary/">Online Talking Dictionary Template</a></h4>

            <hr>
            <h4 class="subsubheader">English to Source</h4>

            <ul class="pagination">
                <center>
                    <li><a href="../dictionary/category.php?letter=a">a</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=b">b</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=c">c</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=d">d</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=e">e</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=f">f</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=g">g</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=h">h</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=i">i</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=j">j</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=k">k</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=l">l</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=m">m</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=n">n</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=o">o</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=p">p</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=q">q</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=r">r</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=s">s</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=t">t</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=u">u</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=v">v</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=w">w</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=x">x</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=y">y</a>
                    </li>
                    <li><a href="../dictionary/category.php?letter=z">z</a>
                    </li>
                </center>
            </ul>

            <div class="row collapse">
                <div class="large-8 small-9 columns">
                    <form action="../dictionary/category.php" method="post">
                        <input type="text" placeholder="Type English word..." name="word">
                        <!--&nbsp;<input id="checkbox1" type="checkbox" name="match" value="match" checked><label for="checkbox1">Match whole word only</label>-->
                </div>
                <div class="large-4 small-3 columns">
                    <input class="button postfix" type="submit" value="Submit">
                    </form>
                </div>
            </div>


            <p>
                <img src="background.jpg" />
            </p>

        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">

            <h4 class="subheader">About the Template</h4>
            <p align="justify">Lorem ipsum dolor sit amet, eu mollis vel. Non feugiat eu magna nulla sapien, per justo tellus vel dui. Amet phasellus suspendisse orci cras habitasse, in ut mauris diam, egestas cras interdum, egestas aliquet felis in varius justo lectus, erat amet adipiscing. Convallis sagittis mollis, rhoncus metus vitae proin erat libero maecenas, viverra dapibus vitae, amet sapien velit habitant, nostra suspendisse. Egestas sodales nascetur molestie interdum ipsum, lacus sed, leo neque vitae massa urna pellentesque turpis. Dui cras, a posuere at nec. </p>
            <p align="justify">Consectetuer consectetuer neque, sem ultrices. Tortor et interdum tristique, maecenas malesuada justo in velit fermentum, lorem sed amet. Eget bibendum posuere mollis id in malesuada, risus amet, tristique velit vitae. Rhoncus massa, lobortis eget nulla non a tincidunt facilisis, elit pellentesque urna vestibulum enim tincidunt fusce. Placerat magna quam tincidunt neque ullamcorper non. Leo neque, pede et ipsum sed elit, ut ut, feugiat amet eu. Luctus nulla ligula, eleifend posuere integer nunc, tortor ut dui sit odio curabitur cursus, metus suspendisse tempor. Malesuada sed vivamus elit, congue praesent augue vel, molestie ipsum pede diam at nunc aliquet, dictumst suspendisse dui, tincidunt justo suspendisse justo mauris at. Eget in accumsan, semper nulla elit ligula per ante, lobortis tempus risus ullamcorper, in lobortis. Aliquam magna, fermentum metus vehicula consectetuer mattis est, mauris placerat adipiscing sem ornare nunc. Risus nullam etiam sed, enim auctor commodo ante, duis nullam eget nam vitae. Torquent mi suspendisse libero sapien molestie risus, felis est nascetur aenean, elementum non ultrices wisi pellentesque ac leo, at dui facilisi.</p>
            <br>
        </div>
    </div>

    <footer class="row">
    <div class="large-12 columns">
        <hr>
        <div class="row">
        <div class="large-12 columns">
        <h4 class="subsubheader" style="text-align:center">Copyright 2014 &copy; User</h4><br>
        </div>
        </div>
    </div> 
    </footer> 
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation/foundation.js"></script>
    <script>
        $(document).foundation();

        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
</body>

</html>
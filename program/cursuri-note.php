<!DOCTYPE html>
<!--
Template Name: Abele
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>ClujTech | Inscriere</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace linklist">
<!--
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
-->        
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace linklist">
        <li><i class="fa fa-phone"></i> +40 (747) 456 780</li>
        <li><i class="fa fa-envelope-o"></i> contact@clujtech.ro</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.html">ClujTech Integrative</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="../index.html">Acasa</a></li>
        <li><a class="drop" href="#">Despre program</a>
          <ul>
            <li><a class="drop">Informatii</a>
                <ul>
                    <li><a href="prezentare.html">Specializari</a></li>
                    <li><a href="galerie.html">Galerie</a></li>
                </ul>
            </li>
            <li><a href="inscriere.php">Inscriere</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Cursanti</a>
          <ul>
            <li><a href="cursuri-note.php">Cursuri & Note</a></li>
            <li><a href="taxe.php">Taxe</a></li>
          </ul>
        </li>
        <li><a href="secretariat/login.php">Secretariat</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('../images/demo/backgrounds/1.png');">
  <div class="overlay">
    <div id="breadcrumb" class="clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="#">Acasa</a></li>
        <li><a href="#">Despre program</a></li>
        <li><a href="#">Informatii</a></li>
        <li><a href="#">Inscriere</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1> Formular de Inscriere: </h1>
   <form action="adaugare_cursant.php" method="post">
        <div class="form-group">
            <label for="nume">Nume si Prenume:</label>
            <input type="text" class="form-control" id="nume" name="nume">
        </div>
        <div class="form-group">
            <label for="cnp">Cod Numeric Personal:</label>
            <input type="text" class="form-control" id="cnp" name="cnp">
        </div>
        <div class="form-group">
            <label for="email">Adresa de email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="platit"> Platesc acum</label>
        </div>
        <button type="submit" class="btn btn-default">Ma inscriu!</button>
   </form>

    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="title">Despre ClujTech Integrative</h6>
      <p class="nospace btmspace-30">ClujTech Integrative este un program postuniversitar fictiv creat pentru realizarea Proiectului Integrator 2 IAP de catre Cristian Hainic. Toate informatiile de pe acest website au caracter fictiv si orice asemanare cu persoane sau obiectele din viata reala este pur intamplatoare.</p>
      <ul class="nospace">
        <li class="btmspace-10">
          <address>
          <span class="fa fa-map-marker"></span> Strada Dudului 21, Cluj-Napoca, 400667
          </address>
        </li>
        <li class="btmspace-10"><span class="fa fa-phone"></span> +40 (747) 456 780</li>
        <li><span class="fa fa-envelope-o"></span> contact@clujtech.ro</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Link-uri rapide</h6>
      <ul class="nospace linklist">
        <li><a href="inscriere.php">Mergi sus</a></li>
        <li><a href="prezentare.html">Specializari</a></li>
        <li><a href="inscriere.php">Inscriere</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Abonare la ClujTech</h6>
      <form class="btmspace-50" method="post" action="#">
        <fieldset>
          <legend>Aboneaza-te la ClujTech</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Ma abonez!</button>
        </fieldset>
      </form>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - Toate drepturile rezervate - <a href="index.html">ClujTech Integrative</a></p>
    <!-- <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p> -->
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
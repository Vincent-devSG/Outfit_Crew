<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="accueil.css" rel="stylesheet" type="text/css"/>

</head>

<body style='background:#ffffff;'>

    <div class="header"> <!-- header/haut de page-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-1"><a href="accueil.php"> <img src="logo.png" alt="logo"/></a></div>
                <div class="col-sm-8 text-center">
                    <h1>Outfit Crew</h1>
                </div>    
                <div class="col-sm-2"></div>

            </div>
        </div>
        

    </div>


    <nav class="navbar navbar-inverse"> <!-- Barre de navigation -->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav text-lg">
                    <li><a href="accueil.php">Accueil</a></li>
                    <li><a href="#">Tout Parcourir</a></li>
                    <li><a href="#">Notifications</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Votre Compte</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="row text-center slide">

<div class="container">
<div class="header2">
        <h2><div class="well">Découvrez notre gamme de produits</div></h2>
    </div>
</div>

 <!-- boutons coulissants pour trier -->
    <div class="choixTriage">
        <div class="container">  
          <div class="row">
          <div class="col-sm-2">

          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle btn-info" type="button" id="menu1" data-toggle="dropdown">Trier par Type
            <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
              <li><a href="#">Tout afficher</a></li>
              <li role="presentation" class="divider"></li>
              <li><a href="#">Articles Rares</a></li>
              <li role="presentation" class="divider"></li>
              <li><a href="#">Articles Haut de Gamme</a></li>
              <li role="presentation" class="divider"></li>
              <li><a href="#">Articles Réguliers</a></li>   
            </ul>
          </div>
          </div>
          <div class="col-sm-1">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle btn-info" type="button" id="menu1" data-toggle="dropdown">Trier par Prix
            <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
              <li><a href="#">Normal</a></li>
              <li role="presentation" class="divider"></li>
              <li><a href="#">Prix Croissant</a></li>
              <li role="presentation" class="divider"></li>
              <li><a href="#">Prix Décroissant</a></li>   
            </ul>
          </div>
          </div>
          </div>
        </div>
    </div>

<!-- affichage des blocs de produits -->
<br><br>   

<div class="container-fluid text-center bg-grey">
  
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="logo.png" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  
</div> <!-- fin du slide -->

</div>


<footer class="container-fluid text-center">Copyright &copy; 2021 Outfit Crew<br>
    <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
</footer>




</div>
</body>
</html>
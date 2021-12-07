<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */ 
        .navbar {
          margin-bottom: 50px;
          border-radius: 0;
        }
            
        /* gray background color*/
        footer {
          background-color: #d4d4d4;
          padding: 25px;
        }
        </style>
        
        <!-- importer le fichier de style -->
       <!-- <link rel="stylesheet" href="login.css" media="screen" type="text/css" />-->
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->


                <div class="header"> <!-- header/haut de page-->
                    <div class="logo">
                        <a href="login.html"> <img src="logo.png" alt="logo"/></a> 
                    </div>
                        <div class="container text-center">
                            <h1>Outfit Crew</h1>
                        </div>
                    <div class="filler">
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
                      <ul class="nav navbar-nav">
                        <li><a href="accueil.php">Accueil</a></li>
                        <li><a href="#">Tout Parcourir</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Votre Compte</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>


                <footer class="container-fluid text-center">Copyright &copy; 2021 Outfit Crew<br>
                    <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
                </footer>




            <?php
           
            

            ?> 
            
        </div>
    </body>
</html>
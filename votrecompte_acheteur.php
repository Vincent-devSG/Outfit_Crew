<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="accueil.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="header">
        <!-- header/haut de page-->
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

    <nav class="navbar navbar-inverse">
        <!-- Barre de navigation -->
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
                    <li><a href="ToutParcourir.php">Tout Parcourir</a></li>
                    <li><a href="#">Notifications</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="votrecompte_acheteur.php"><span class="glyphicon glyphicon-user"></span> Votre Compte</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="row">


        <div class="col-md-5">&nbsp;</div>
        <div class="col-md-7">
            <div class="row space-16">&nbsp;</div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <div class="caption text-center">
                            <div class="position-relative">
                                <img src="profil.png" class="img-circle" style="width:72px;height:72px;" />
                            </div>
                            <h4 id="thumbnail-label">User</h4>   

                        </div>
                        <div class="caption card-footer text-left">
                            <p><span class="glyphicon glyphicon-user"></span> Nom : </p>    
                            <p><span class="glyphicon glyphicon-user"></span> Prenom : </p>

                            <p><span class="glyphicon glyphicon-envelope"></span> Mail : </p>  
                            <p><span class="glyphicon glyphicon-phone"></span> Téléphone :</p>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">&nbsp;</div>
        </div>

    </div>

    <div class="container">

        <div class="row">
                <div class="col-sm-2"></div>

                <div class="col-sm-8">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Adresse : </td>
                            </tr>
                            <tr>
                                <td>Ville : </td>
                            </tr>
                            <tr>
                                <td>Code Postal :</td>
                            </tr>
                            <tr>
                                <td>Pays :</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-2"></div>
            </div>
    </div>



<footer class="container-fluid text-center">Copyright &copy; 2021 Outfit Crew<br>
    <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
</footer>


</body>
</html>

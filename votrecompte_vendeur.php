<?php 

     //echo "<br> on récupère les infos";
     //on récupère les infos

    $database = "bdd_shop";

    //connectez-vous dans votre BDD
    //Rappel: votre serveur = localhost | login = root | mdp = "" <rien>
    $db_handle = mysqli_connect('localhost','root','');
    $db_found = mysqli_select_db($db_handle,$database);

    $valider = isset($_POST["deco"])? $_POST["deco"] : ""; //mdp
    $test="0";



    if($valider == "1")
    {

        
        $sql = "UPDATE connexion SET admin ='0', vendeur ='0', acheteur='0', ID='0'";
        $result = mysqli_query($db_handle,$sql);
        header('Location: login.php');
    }



?>







<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="votre_compte.css" rel="stylesheet" type="text/css" />

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
                    <li><a href="votrecompte_vendeur.php"><span class="glyphicon glyphicon-user"></span> Votre Compte</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div id="vendeur" class="jumbotron">
            <div class="container for-about">
                <h1>Compte vendeur</h1>
            </div>
        </div>
    </div>



    <div class="container">

        <div class="row">


            <div class="col-md-3">&nbsp;</div>
            <div class="col-md-8">
                <div class="row space-16">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <div class="position-relative">
                                    <img src="profil.png" class="img-circle" style="width:72px;height:72px;" />
                                </div>


                                <h4 id="thumbnail-label">Vendeur</h4>   

                            </div>
                            <div class="caption card-footer text-left">

                                <?php

                                        $sql = "SELECT ID FROM connexion";
                                        $result = mysqli_query($db_handle,$sql);

                                        $data = mysqli_fetch_assoc($result);

                                        $sql2 = "SELECT * FROM vendeur WHERE ID =" .$data['ID'];
                                        $result2 = mysqli_query($db_handle,$sql2);

                                        $data2 = mysqli_fetch_assoc($result2);

                                        echo "<p><span class='glyphicon glyphicon-user'></span> Pseudo : ".$data2['pseudo']; echo "</p>"; 

                                        echo "<p><span class='glyphicon glyphicon-envelope'></span> Mail : ".$data2['mail']; echo "</p>"; 

                                    ?>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">&nbsp;</div>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <a href="ajouter_objet.php" id="ajouter_obj" class="btn btn-default btn-block"> Ajouter un objet à vendre </a>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <a href="supprimer_objet.php" id="supprimer_obj" class="btn btn-default btn-block"> Supprimer un de vos objet en vente </a>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <div id="deco" class="container">
        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <form method="post">
                    <button type="submit" class="btn btn-danger btn-block" name="deco" value="1">Déconnexion</button>
                </form>
            </div>
            <div class="col-sm-5"></div>
        </div>
    </div>




    



    <footer class="container-fluid text-center">Copyright &copy; 2021 Outfit Crew<br>
        <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
    </footer>


</body>
</html>

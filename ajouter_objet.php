<?php 

     //echo "<br> on récupère les infos";
     //on récupère les infos
     
     $database = "bdd_shop";

    //connectez-vous dans votre BDD
    //Rappel: votre serveur = localhost | login = root | mdp = "" <rien>
    $db_handle = mysqli_connect('localhost','root','');
    $db_found = mysqli_select_db($db_handle,$database);

    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $etat = isset($_POST["etat"])? $_POST["etat"] : ""; //mdp
    $photo = isset($_POST["photo"])? $_POST["photo"] : ""; //mdp
    $description = isset($_POST["description"])? $_POST["description"] : ""; //mdp
    $categorie = isset($_POST["categorie"])? $_POST["categorie"] : ""; //mdp
    $prix = isset($_POST["prix"])? $_POST["prix"] : ""; //mdp


    $valider = isset($_POST["Valider"])? $_POST["Valider"] : ""; //mdp
    $test="0";

    


    if($valider == "1")
    {
        if($nom!="" && $etat!="" && $photo!="" && $description!="" && $categorie!="" && $prix!="")
        {

                

                $sql2 = "INSERT INTO `objet` (`ID`, `ID_vendeur`, `nom`, `etat`, `photo`, `description`, `categorie`, `prix`, `vendu`) VALUES (NULL, '0', '$nom', '$etat', '$photo', '$description', '$categorie', '$prix', '0')";

                $result = mysqli_query($db_handle,$sql2);
               

                echo "<div class='alert alert-success alert-dismissible'> <a href='#'class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Succes!</strong> Vous Vous avez enregistré un nouveau objet à vendre !!!</div>";


        }
        else
            {
                //si ils manquent des cases a remplir
                echo "<div class='alert alert-danger alert-dismissible'> <a href='#'class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Danger!</strong> Vous n'avez pas rempli tous les champs !!!.</div>";
            }
    }

?>

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
                    <li><a href="votrecompte_vendeur.php"><span class="glyphicon glyphicon-user"></span> Votre Compte</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Ajouter un nouveau objet à la vente</h2>
        <form method="post">

            <div class="form-group">
                <label for="nom">Nom de l'objet :</label>
                <input type="text" class="form-control" placeholder="Nom" name="nom">
            </div>

            <div class="form-group">
              <label for="etat">Etat :</label>
              <input type="text" class="form-control" placeholder="Etat" name="etat">
            </div>

            <div class="form-group">
                <label for="photo">Photo contractuelle :</label>
                <input type="text" class="form-control" placeholder="IMG/....." name="photo">
            </div>

            <div class="form-group">
                <label for="description">Description de l'objet :</label>
                <input type="text" class="form-control" placeholder="Description" name="description">
            </div>

            <div class="form-group">
                <label for="categorie">Catégorie de l'objet :</label>
                <input type="text" class="form-control" placeholder="Catégorie : régulier, rare, haut-de-gamme" name="categorie">
            </div>

            <div class="form-group">
                <label for="prix">Prix de l'objet :</label>
                <input type="number" class="form-control" placeholder="Prix de l'objet en €" name="prix">
            </div>


            <button  type="submit" name="Valider" value="1"  class="btn btn-default">Submit</button>
        </form>
    </div>




    <footer class="container-fluid text-center">Copyright &copy; 2021 Outfit Crew<br>
        <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
    </footer>




    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>

</body>
</html>

<?php 

     //echo "<br> on récupère les infos";
     //on récupère les infos
     
    $database = "bdd_shop";

    //connectez-vous dans votre BDD
    //Rappel: votre serveur = localhost | login = root | mdp = "" <rien>
    $db_handle = mysqli_connect('localhost','root','');
    $db_found = mysqli_select_db($db_handle,$database);


    $ID = isset($_POST["id"])? $_POST["id"] : ""; 
    $nom = isset($_POST["nom"])? $_POST["nom"] : ""; //mdp
    $valider = isset($_POST["Valider"])? $_POST["Valider"] : ""; //mdp

    if($valider == "1")
    {
        if($nom!="" && $ID!="")
        {
            $check_email = mysqli_query($db_handle, "SELECT ID, nom FROM objet where (nom = '$nom' AND ID = '$ID')");
            if(mysqli_num_rows($check_email) > 0)
            {
                $sql = "DELETE FROM `objet` WHERE ID = '$ID'";
                $result = mysqli_query($db_handle,$sql);
                echo "<div class='alert alert-success alert-dismissible'> <a href='#'class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Succes!</strong> Vous avez supprimé cet objet!!!</div>";
            }
            else
            {
                //si ils manquent des cases a remplir
                echo "<div class='alert alert-danger alert-dismissible'> <a href='#'class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Danger!</strong> Cet objet n'existe pas!!!.</div>";  
            }




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
        <div id="supp_vendeur" class="jumbotron">
            <div class="container for-about">
                <h2>Liste de tous les objets :</h2>
            </div>
        </div>
    </div>


    <?php

        $sql = "SELECT ID, nom, etat, photo, description, categorie, prix FROM objet";
        $result = mysqli_query($db_handle,$sql);

        echo "<div class= 'container'>";
        echo "<table id='list_objet' class='table table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th> ID</th>";
        echo "<th> Objet</th>";
        echo "<th> Etat</th>";
        echo "<th> Description</th>";
        echo "<th> Catégorie</th>";
        echo "<th> Prix</th>";
        echo "<th> Image</th>";
        echo "</tr>";
        echo "</thead>";  
        echo "<tbody>";

        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" .$data['ID'];
            echo "</td>";
            echo "<td>" .$data['nom'];
            echo "</td>";
            echo "<td>" .$data['etat']; 
            echo"</td>";
            echo "<td>" .$data['description']; 
            echo"</td>";
            echo "<td>" .$data['categorie']; 
            echo"</td>";
            echo "<td>" .$data['prix']; 
            echo"</td>";

            echo"<td>";

            $image = $data['photo'];
            echo "<img src='$image' height='300' width='200'>";

            echo"</td>";

            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    ?>


    <div id="suppr_objet" class="container">
        <h2>Quel objet</h2>
        <form method="post">

            <div class="form-group">
                <label for="objet">Nom de l'objet :</label>
                <input type="text" class="form-control" placeholder="Nom Objet" name="nom">
            </div>

            <div class="form-group">
                <label for="ID">ID de l'objet :</label>
                <input type="number" class="form-control" placeholder="ID objet" name="id">
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
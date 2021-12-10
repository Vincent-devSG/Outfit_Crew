<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="ToutParcourir.css" rel="stylesheet" type="text/css"/>

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
                    <li><a href="ToutParcourir.php">Tout Parcourir</a></li>
                    <li><a href="notification.php">Notifications</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Votre Compte</a></li>
                    <li><a href="panier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
                </ul>
            </div>
        </div>
    </nav>


<?php

    $database = "bdd_shop";
        //echo $database;

        $db_handle = mysqli_connect('localhost','root','');
        $db_found = mysqli_select_db($db_handle,$database);

        //on récupère l ID de l'utilisateur
            $sqlIdUtilisateur = "SELECT * FROM connexion";
            $resultatIdUtilisateur = mysqli_query($db_handle,$sqlIdUtilisateur);
            $dataIdUtlisateur = mysqli_fetch_assoc($resultatIdUtilisateur);
            $Acheteur = $dataIdUtlisateur['acheteur'];
            $IdUtilisateur = $dataIdUtlisateur['ID'];

        if($Acheteur == '1') //si c est un acheteur
        {
            $sqlNotification = "SELECT * FROM notification WHERE ID = '$IdUtilisateur' ";
            $resultatNotification = mysqli_query($db_handle,$sqlNotification);

            echo "<div = TableauTexteCentre>";
        while($data = mysqli_fetch_assoc($resultatNotification))
            {
                $image = $data['photo'];
                $ID = $data['ID'];
                //echo $image;
                echo "<tr>";
                echo "<td>". $data['nom']."</td>";
                echo "<td>". $data['etat']."</td>";
                echo "<td>". $data['categorie']."</td>";
                echo "<td><img src='$image' height='150' width='100'></td>";
                echo "<td>". $data['prix']."</td>";
                echo "<form action= 'panier.php' method='post'>";
                echo "<td><button type='submit' class='close' name ='SuppObjet' value ='$ID'>&times;</button><td>";
                echo "</form>";
                echo "</tr>";
                $prixTotal += $data['prix'];
            }
            echo "</div>";

        }    

        mysqli_close($db_handle);

?>



<footer class="container-fluid text-center">Copyright &copy; 2021 Outfit Crew<br>
    <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
</footer>




</div>
</body>
</html>
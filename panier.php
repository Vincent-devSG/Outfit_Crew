<?php
        $database = "bdd_shop";
        //echo $database;

        $db_handle = mysqli_connect('localhost','root','');
        $db_found = mysqli_select_db($db_handle,$database);

        $Paiement =  isset($_POST["Paiement"])? $_POST["Paiement"] : "";
        $SuppObjet =  isset($_POST["SuppObjet"])? $_POST["SuppObjet"] : "";
        //echo "Paiment: ".$Paiement;



        //on récupère l ID de l'utilisateur
            $sqlIdUtilisateur = "SELECT * FROM connexion";
            $resultatIdUtilisateur = mysqli_query($db_handle,$sqlIdUtilisateur);
            $dataIdUtlisateur = mysqli_fetch_assoc($resultatIdUtilisateur);
            $Acheteur = $dataIdUtlisateur['acheteur'];
            $IdUtilisateur = $dataIdUtlisateur['ID'];


        $sqlObjet = "DELETE FROM panier WHERE ID = '$SuppObjet'";
        $resultObjet = mysqli_query($db_handle,$sqlObjet);

        if($Paiement == 'Paiement')//si le bouton de payement a été appuyé
            {
                //on vérifie que le panier n est pas vide
               $sqlVerifPanier =  "SELECT * FROM panier";
               $resultVerifPanier = mysqli_query($db_handle,$sqlVerifPanier);
               $dataVerifPanier =  mysqli_fetch_assoc($resultVerifPanier);
               if($dataVerifPanier != "")
               {

                    $sql = "SELECT ID FROM connexion";
                    $result = mysqli_query($db_handle,$sql);

                    $data = mysqli_fetch_assoc($result);

                    $sql2 = "SELECT * FROM acheteur WHERE ID =" .$data['ID'];
                    $result2 = mysqli_query($db_handle,$sql2);

                    $data2 = mysqli_fetch_assoc($result2);


                    $to = $data2['mail'];
                    echo "".$to;

                    $sql36 = "SELECT nom, ID_acheteur FROM panier";
                    $result36 = mysqli_query($db_handle,$sql36);
                    

                    while($data36 = mysqli_fetch_assoc($result36))
                    {
                        
                        if ($data36['ID_acheteur'] == $data2['ID']) {
                            echo " j'suis là";
                            $message .= 'Objet Achete :' .$data36['nom'] ." Prix : " ."\n";
                            
                        }
                         
                    }

                    $subject = 'OUEEEEEEEE';
                    $headers = 'From: webmaster@example.com' . "\r\n" .
                    'Reply-To: webmaster@example.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                    mail($to, $subject, $message, $headers); 



                    $sql2 = "DELETE FROM panier";
                    $result2 = mysqli_query($db_handle,$sql2);
                    header('Location: accueil.php');
               }
               else //le panier est vide
               {
                 echo "<div class='alert alert-danger alert-dismissible'> <a href='#'class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Erreur!</strong> Votre Panier est vide ! Paiement impossible</div>";
               }

                
            }
        

        mysqli_close($db_handle);

    ?>




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

<div class="row text-center slide">

<div class="container">
<div class="header2">
        <h2><div class="well">Votre Panier</div></h2>
    </div>
</div>  
</div> <!-- fin du slide -->

<br><br>

<!-- tableau de tous les articles du panier -->

<table class="table table-striped">
    <thead> <!-- première ligne du tableau -->
      <tr>
        <th>Nom</th>
        <th>Etat</th>
        <th>Catégorie</th>
        <th>Photo</th>
        <th>Prix</th>
      </tr>
    </thead>
    <tbody>
      

         <?php
          
            $database = "bdd_shop";
            //echo $database;

            $db_handle = mysqli_connect('localhost','root','');
            $db_found = mysqli_select_db($db_handle,$database);

            //on récupère l ID de l Utilisateur
            $sqlIdUtilisateur = "SELECT * FROM connexion";
            $resultatIdUtilisateur = mysqli_query($db_handle,$sqlIdUtilisateur);
            $dataIdUtlisateur = mysqli_fetch_assoc($resultatIdUtilisateur);
            $IdUtilisateur = $dataIdUtlisateur['ID'];

            $sql = "SELECT * FROM panier WHERE ID_acheteur = '$IdUtilisateur'";
            $result = mysqli_query($db_handle,$sql);

            $prixTotal =0;

            echo "<div = TableauTexteCentre>";
            while($data =  mysqli_fetch_assoc($result))
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


            echo "<tr class='warning'>";
                echo "<td><strong>TOTAL: </strong></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>". $prixTotal ."</td>";
            echo "</tr>";      
       
           echo "</body>";
           echo "</table>";


           mysqli_close($db_handle);
           ?>

        <div class="col-sm-12 text-center">
        
        <button type ='button' class="btn btn-info" data-toggle="modal" data-target="#myModal">Payer</button>
        


          <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            
            <div class="modal-content">
            <div class="modal-body">
            <strong>Le Payement a été effectué. Vous allez être redirigé vers l'Accueil.</strong>
            </div>
            <div class="modal-footer">
            <form action= "panier.php" method="post">
            <a href="accueil.php"><input type="submit" name ="Paiement" value ="Paiement" class="btn btn-info"></button></a>
            </form>
            </div>
            </div>

          </div>
        </div>

        </div>

        <br><br>
        <br><br>

        

        
 

<footer class="container-fluid text-center">Copyright &copy; 2021 Outfit Crew<br>
    <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
</footer>




</div>
</body>
</html>


<?php
                        //echo "<br> on récupère les infos";
                        //on récupère les infos
     
                        $database = "bdd_shop";

                        //connectez-vous dans votre BDD
                        //Rappel: votre serveur = localhost | login = root | mdp = "" <rien>
                        $db_handle = mysqli_connect('localhost','root','');
                        $db_found = mysqli_select_db($db_handle,$database);

                        $user1="0";
                        $user2="0";
                        $user3="0";

                        $sql = "SELECT * FROM connexion";
                        $result = mysqli_query($db_handle,$sql);

                        $data = mysqli_fetch_assoc($result);

                        if ($data['admin']=="1") {
                            $user1="votrecompte_admin.php";
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

                    <?php
                        $user1="0";
                        $user2="0";
                        $user3="0";

                        $sql = "SELECT * FROM connexion";
                        $result = mysqli_query($db_handle,$sql);

                        $data = mysqli_fetch_assoc($result);

                        if ($data['admin']=="1") {
                            $user1="votrecompte_admin.php";

                            echo "<li><a href= ' $user1 '><span class='glyphicon glyphicon-user'></span> Votre Compte</a></li>";
                        }

                         if ($data['vendeur']=="1") {
                            $user2="votrecompte_vendeur.php";

                            echo "<li><a href= ' $user2 '><span class='glyphicon glyphicon-user'></span> Votre Compte</a></li>";
                        }

                        if ($data['acheteur']=="1") {
                            $user3="votrecompte_acheteur.php";

                            echo "<li><a href= ' $user3 '><span class='glyphicon glyphicon-user'></span> Votre Compte</a></li>";
                        }


                    ?>
                    <!--<li><a href="  "><span class="glyphicon glyphicon-user"></span> Votre Compte</a></li>-->
                    <li><a href="panier.php"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="alert alert-info text-center">
            <strong>Info!</strong> Artciles en top tendance.
        </div>


        <div class="row slideanim">
            <div class="col-sm-2">

            </div>

            <div class="col-sm-8">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-fluid" src="IMG/T-Shirt1.jpg">
                            <div class="carousel-caption">
                                <h3>T-Shirt</h3>
                            </div>
                        </div>

                        <div class="item">
                            <img class="img-fluid" src="IMG/pantalon1.jpg">
                            <div class="carousel-caption">
                                <h3>Pantalon</h3>
                            </div>
                        </div>

                        <div class="item">
                            <img class="img-fluid" src="IMG/sweat1.jpg">
                            <div class="carousel-caption">
                                <h3>Sweat</h3>
                            </div>
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-sm-2">

            </div>
        </div>
    </div>



    <div class="container-fluid">


        <div class="row slideanim">
            <div class="col-sm-5">
                <div id="About" class="jumbotron">
                    <h3>About Outfit Crew</h3>
                    <br>
                    <p>Outfit Crew est heureux de vous présenter une grande collection de vêtements.<br> Si vous avez des questions, n'hésitez pas à nous contacter comme indiqué en bas de la page.
                    </p>
                </div>

            </div>

            <div class="col-sm-3">
                <div id="Renseignement" class="jumbotron">
                    <h3>Où sommes-nous: </h3>
                    
                    <br>
                    <p>
                        37 Quai de Grenelle, 75015 Paris   
                    </p>
                    <p>
                        (+33) 01 02 03 04 05 06 
                    </p>
                </div>

            </div>

            <div class="col-sm-4">

                <div id="map-container-google-8" class="jumbotron z-depth-1-half map-container-5" style="margin-top: 50px;">
                    <iframe src="https://maps.google.com/maps?q=Ece%20paris&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>

        </div>

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


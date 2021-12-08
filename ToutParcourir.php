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
</div> <!-- fin du slide -->

<div class="row text-center slideanim">
<div class="container">
<div class="well well-sm">Trier par Catégorie</div>
</div> 

<form action="ToutParcourir.php" method="post" class="form-inline">
    <table align="center">
        <tr>
            <!--<td colspan="2" align="center"><input type="submit" name="choix" value="choix"></td>-->
            <td colspan="2" align="center"><input type="submit" name="ToutAfficher" value="Tout Afficher"></td>
            <td colspan="2" align="center"><input type="submit" name="Rare" value="Articles Rares"></td>
            <td colspan="2" align="center"><input type="submit" name="HautDeGamme" value="Articles Haut de Gamme"></td>
            <td colspan="2" align="center"><input type="submit" name="Regulier" value="Articles Reguliers"></td>
        </tr>
        <tr><td><br></td></tr>
    </table>
</form> 
<form action="ToutParcourir.php" method="post" class="form-inline">
    <table align="center">    
        <div class="container">
        <div class="well well-sm">Trier par Prix</div>
        </div>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="Normal" value="Normal"></td>
            <td colspan="2" align="center"><input type="submit" name="Croissant" value="Prix Croissant"></td>
            <td colspan="2" align="center"><input type="submit" name="Decroissant" value="Prix Decroissant"></td>
        </tr>
    </table>
</form> 
</div> <!-- fin du slide -->

 <!-- boutons coulissants pour trier 
 <form action="ToutParcourir.php" method="post" class="form-inline">
    <div class="choixTriage">
        <div class="container">  
          <div class="row">
          <div class="col-sm-2">

           <div class="dropdown">
            <button class="btn btn-default dropdown-toggle btn-info" type="button" id="menu1" data-toggle="dropdown">Trier par Type
            <span class="caret"></span></button>
            <table class="dropdown-menu" role="menu" aria-labelledby="menu1">
              <ul>
                <li><input type="submit" name="Tout Afficher" value="ToutAfficher"></li>
                <li><input type="submit" name="Articles Rares" value="Rare"></li>
                <li><input type="submit" name="Articles Haut de Gamme" value="HautDeGamme"></li>
                <li><input type="submit" name="Articles Reguliers" value="Regulier"></li>
            
            </ul>
          </div> 

          </div>

          <div class="col-sm-1">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle btn-info" type="button" id="menu1" data-toggle="dropdown">Trier par Prix
            <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
              <li><button class="dropdown-item" align="center" type="button" value="Normal">Normal</button></li>
              <li role="presentation" class="divider"></li>
              <li><button class="dropdown-item" align="center" type="button" value="PrixCroissant">Prix Croissant</button></li>
              <li role="presentation" class="divider"></li>
              <li><button class="dropdown-item" align="center" type="button" value="PrixDecroissant">Prix Decroissant</button></li>   
            </ul>
          </div>
          </div>
          </div>
        </div>
    </div>
    </form>
-->

<!-- affichage des blocs de produits -->
<br><br>   

       

        <?php

            $TrierType = isset($_POST["choix"])? $_POST["choix"] : "";
            $TrierType1 = isset($_POST["ToutAfficher"])? $_POST["ToutAfficher"] : "";
            $TrierType2 = isset($_POST["Rare"])? $_POST["Rare"] : "";
            $TrierType3 = isset($_POST["HautDeGamme"])? $_POST["HautDeGamme"] : "";
            $TrierType4 = isset($_POST["Regulier"])? $_POST["Regulier"] : "";


            $TrierPrix1 = isset($_POST["Normal"])? $_POST["Normal"] : ""; 
            $TrierPrix2 = isset($_POST["Croissant"])? $_POST["Croissant"] : ""; 
            $TrierPrix3 = isset($_POST["Decroissant"])? $_POST["Decroissant"] : ""; 

            /*echo $TrierType;
            echo $TrierType1;
            echo $TrierType2;
            echo $TrierType3;
            echo $TrierType4;

            echo $TrierPrix1;
            echo $TrierPrix2;
            echo $TrierPrix3;*/

            $database = "bdd_shop";
            //echo $database;

            $db_handle = mysqli_connect('localhost','root','');
            $db_found = mysqli_select_db($db_handle,$database);

            $sql = "SELECT * FROM objet";

            //pour les types

            if($TrierType1 =='Tout Afficher')
            {
                $sql = "SELECT * FROM objet";
            }
            
            if($TrierType2 =='Articles Rares')
            {
                $sql = "SELECT * FROM objet WHERE categorie ='rare'";
            }
            
            if($TrierType3 =='Articles Haut de Gamme')
            {
                $sql = "SELECT * FROM objet WHERE categorie ='haut_de_gamme'";
            }
            
            if($TrierType4 =='Articles Reguliers')
            {
                $sql = "SELECT * FROM objet WHERE categorie ='regulier'";
            }
            //pour les prix

            if($TrierPrix1 =='Normal')
            {
                $sql = "SELECT * FROM objet";
            }
            
            if($TrierPrix2 =='Prix Croissant')
            {
                $sql = "SELECT * FROM objet ORDER BY prix ASC";
            }
            
            if($TrierPrix3 =='Prix Decroissant')
            {
                $sql = "SELECT * FROM objet ORDER BY prix DESC";
            }
            

            //echo "<br>" .$sql;
            

            $result = mysqli_query($db_handle,$sql);
            
            
            echo "<div class= 'container-fluid text-center bg-grey'>";
            echo "<div class= 'row'>";
            while ($data = mysqli_fetch_assoc($result)) {
           
             
            echo "<div class= 'col-sm-4'>";
            echo "<div class= 'slideanim'>"; 
            echo "<div class= 'thumbnail'>";    
            
            $image = $data['photo'];
            echo "<img src='$image' height='300' width='200' data-toggle='modal' data-target='#myModal'>";
            //////MODAL//////////
            echo "<div id='myModal' class='modal fade' role='dialog'>";
            echo "<div class='modal-dialog'>";

                
            echo "<div class='modal-content'>";
            echo "<div class='modal-header'>";
            echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
            echo "<h4 class='modal-title'>Modal Header</h4>";
            echo "</div>";
            echo "<div class='modal-body'>";
            echo "  <p>Some text in the modal.</p>";
            echo " </div>";
            echo " <div class='modal-footer'>";
            echo "   <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
            echo "</div>";
            echo "</div>";

            echo "</div>";
            echo "</div>";
            ///////////////////

            echo "<br>" .$data['nom'];
            echo "<br>" .$data['description'];
            echo "<br>" .$data['etat'];
            echo "<br>" .$data['prix'];
            echo "<br>" .$data['categorie'];

           
            
            echo "</div>";
            echo "</div>";
            echo "</div>";// fin du slide  
             
            }
            echo "</div>"; 
            echo "</div>"; 
            

        ?>
                           




<footer class="container-fluid text-center">Copyright &copy; 2021 Outfit Crew<br>
    <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
</footer>




</div>
</body>
</html>
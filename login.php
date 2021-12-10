<?php

echo "<meta charset=\utf-8\">";

$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
$mdp = isset($_POST["mdp"])? $_POST["mdp"] : ""; //mdp
$submit = isset($_POST["submit"])? $_POST["submit"] : ""; //submit
$CreerCompte = isset($_POST["CreerCompte"])? $_POST["CreerCompte"] : ""; //Créer un compte

//echo $pseudo; //?????????????
//echo $mdp;
//echo $submit;
//echo $CreerCompte;

$database = "bdd_shop";

//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost | login = root | mdp = "" <rien>
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);
$verif1="0";
$verif2="0";
$verif3="0";
$ID="0";


if($submit == 'submit')
{
    $sql1 = "";
    $sql2 = "";
    $sql3 = "";

	$found =0; //permet de savoir si on a trouvé le mdp et login
//session_start();

  if($db_found)
  {

            //on cherche si l utilisateur est un admin
    $sql1 ="SELECT * FROM admin WHERE pseudo = '$pseudo' AND mdp = '$mdp' ";
    $result1 = mysqli_query($db_handle,$sql1);
    $data1 = mysqli_fetch_assoc($result1);
    $verif1="1";

            //on cherche si l utilisateur est un acheteur
    $sql2 ="SELECT * FROM acheteur WHERE pseudo = '$pseudo' AND mdp = '$mdp' ";
    $result2 = mysqli_query($db_handle,$sql2);
    $data2 = mysqli_fetch_assoc($result2);
    $verif2="1";

            //on cherche si l utilisateur est un vendeur
    $sql3 ="SELECT * FROM vendeur WHERE pseudo = '$pseudo' AND mdp = '$mdp' ";
    $result3 = mysqli_query($db_handle,$sql3);
    $data3 = mysqli_fetch_assoc($result3);
    $verif3="1";



            if($data1 !="" || $data2!="" || $data3!="") //si data est vide, alors les logins/mdp existent pas
            {
                echo "<br> login et mdp sont valides";
                $found = 1; //les identifiants sont trouvés

                if($verif1)
                {   
                    $sql6 = "UPDATE connexion SET admin ='1', ID =" .$data1['ID'];
                    $result6 = mysqli_query($db_handle,$sql6);
                }

                if($verif2)
                {   
                    $sql7 = "UPDATE connexion SET acheteur ='1', ID =" .$data2['ID'];
                    $result7 = mysqli_query($db_handle,$sql7);
                }

                if($verif3)
                {   
                    $sql8 = "UPDATE connexion SET vendeur ='1', ID =" .$data3['ID'];
                    $result8 = mysqli_query($db_handle,$sql8);
                }

                header('Location: accueil.php');
                //header('Location: https://www.minecraft.net/en-us');
            }
            else{
                //echo "<br> login et mdp sont invalides";
                echo "<div class='alert alert-danger alert-dismissible'> <a href='#'class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Erreur!</strong> Login ou mot de passe invalide.</div>";
            }
            
            
            /*
	        echo "<table border =\"1\">";
	        echo "<tr>";
	        echo "<th>". "ID" . "</th>";
	        echo "<th>". "pseudo" . "</th>";
	        echo "<th>". "mdp" . "</th>";
	        echo "</tr>";
	        while($data = mysqli_fetch_assoc($result)){
	            echo "<tr>";
	                echo "<td>" . $data['ID'] . "</td>";
	                echo "<td>" . $data['pseudo'] . "</td>";
	                echo "<td>" . $data['mdp'] . "</td>";
	                echo "</tr>";
        
            //$sql1 ="SELECT * FROM acheteur WHERE prenom = '$pseudo' AND nom = '$mdp' ";

            */

                }
        // echo "</table>";

            }
 if($CreerCompte == 'CreerCompte') //si le bouton appuyé est créer compte
 {
    header('Location: creationCompte.php');
    
}


mysqli_close($db_handle);


?>


<html>
<head>
    <meta charset="utf-8">
    <title>Outfit Crew</title>
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
                <div class="col-sm-1"> <img src="logo.png" alt="logo"/></div>
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

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

            </div>
        </div>
    </nav>


    <div class="container" >
        <form action="login.php" method="post" class="form-inline">
            <table align="center" style="margin-top: 50px; margin-bottom: 50px;">
                <tr>
                    <td>Identifiant:</td>
                    <td><input type="text" class="form-control" size="25" placeholder="Identifiant" name="pseudo"></td>
                </tr>
                <tr>
                    <td>Mot de passe:</td>
                    <td><input type="password" class="form-control" size="25" placeholder="Mot de Passe" name="mdp"></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
                </tr>
                <tr><td><br></td></tr>
                <tr><td><br></td></tr>
                <tr><td colspan="2" align="center">Vous n'avez pas de compte?</td></tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="CreerCompte" value="CreerCompte"></td>
                </tr>
            </table>
        </form>
    </div>


    <footer class="container-fluid text-center">Copyright &copy; 2021 Outfit Crew<br>
        <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
    </footer>





</body>
</html>








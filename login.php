<?php

echo "<meta charset=\utf-8\">";
echo "<link rel=\"stylesheet\"type=\"text/css\" href =\"/Projet_Piscine/login.css\">";

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

            //on cherche si l utilisateur est un acheteur
    $sql2 ="SELECT * FROM acheteur WHERE pseudo = '$pseudo' AND mdp = '$mdp' ";
    $result2 = mysqli_query($db_handle,$sql2);
    $data2 = mysqli_fetch_assoc($result2);

            //on cherche si l utilisateur est un vendeur
    $sql3 ="SELECT * FROM vendeur WHERE pseudo = '$pseudo' AND mdp = '$mdp' ";
    $result3 = mysqli_query($db_handle,$sql3);
    $data3 = mysqli_fetch_assoc($result3);



            if($data1 !="" || $data2!="" || $data3!="") //si data est vide, alors les logins/mdp existent pas
            {
                echo "<br> login et mdp sont valides";
                $found = 1; //les identifiants sont trouvés
                $_SESSION['username'] = $pseudo;
                header('Location: accueil.php');
                //header('Location: https://www.minecraft.net/en-us');
            }
            else{
                echo "<br> login et mdp sont invalides";
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








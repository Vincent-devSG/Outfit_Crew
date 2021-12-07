<?php 

     //echo "<br> on récupère les infos";
     //on récupère les infos
     
     $database = "bdd_shop";

    //connectez-vous dans votre BDD
    //Rappel: votre serveur = localhost | login = root | mdp = "" <rien>
    $db_handle = mysqli_connect('localhost','root','');
    $db_found = mysqli_select_db($db_handle,$database);

     $nom = isset($_POST["nom"])? $_POST["nom"] : "";
     $prenom = isset($_POST["prenom"])? $_POST["prenom"] : ""; 
     $mail = isset($_POST["mail"])? $_POST["mail"] : ""; 
     $adresse = isset($_POST["adresse"])? $_POST["adresse"] : ""; 
     $pays = isset($_POST["pays"])? $_POST["pays"] : ""; 
     $ville = isset($_POST["ville"])? $_POST["ville"] : ""; 
     $CP = isset($_POST["CP"])? $_POST["CP"] : ""; 
     $tel = isset($_POST["tel"])? $_POST["tel"] : ""; 
     $type_paiement = isset($_POST["type_paiement"])? $_POST["type_paiement"] : ""; 
     $num_carte = isset($_POST["num_carte"])? $_POST["num_carte"] : ""; 
     $nom_carte = isset($_POST["nom_carte"])? $_POST["nom_carte"] : ""; 
     $date_exp = isset($_POST["date_exp"])? $_POST["date_exp"] : ""; 
     $code_carte = isset($_POST["code_carte"])? $_POST["code_carte"] : ""; 
     $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
     $mdp = isset($_POST["mdp"])? $_POST["mdp"] : ""; //mdp
     $enregistrer = isset($_POST["enregistrer"])? $_POST["enregistrer"] : ""; //mdp


if($enregistrer =='enregistrer')//si on appuie sur enregistrer
{

    //echo "<br> on enregistre dans la bdd";
         //si toutes les cases sont remplies
    if($nom!="" && $prenom!="" && $mail!="" && $adresse!="" && $pays!="" && $ville!="" && $CP!="" && $tel!="" && $type_paiement!="" && $num_carte!="" && $nom_carte!="" && $date_exp!="" && $code_carte!="" && $pseudo!="" && $mdp!="")
    {
        //$sql = "INSERT INTO 'acheteur' (nom,prenom,mail,adresse,pays,ville,CP,tel,type_paiement,num_carte,nom_carte,date_exp,code_carte,pseudo,mdp) VALUES(NULL,'$nom','$prenom','$mail','$adresse','$pays','$ville',$CP,$tel,'$type_paiement','$num_carte','$nom_carte',$date_exp,$code_carte,'$pseudo','$mdp')";
        $sql = "INSERT INTO `acheteur` (`ID`, `nom`, `prenom`, `mail`, `adresse`, `ville`, `CP`, `pays`, `tel`, `type_paiement`, `num_carte`, `nom_carte`, `date_exp`, `code_carte`, `panier`, `pseudo`, `mdp`) VALUES (NULL, '$nom', '$prenom', '$mail', '$adresse', '$ville', '$CP', '$pays', '$tel', '$type_paiement', '$num_carte', '$nom_carte', '$date_exp', '$code_carte', '', '$pseudo', '$mdp')";

        $result1 = mysqli_query($db_handle,$sql);
        header('Location: accueil.php');
       // echo "<br>Votre profil a bien été enregistré";
    }
    else{ //si ils manquent des cases a remplir
            echo "<br>erreur, toutes les cases ne sont pas remplies";
        }
        

    }


?>



<html> <!-- debut du html -->
<head>
    <meta charset="utf-8">
    <title>Outfit Crew</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="login.css" rel="stylesheet" type="text/css"/>
</head>


<body>

    <!-- Here is the wrapper area -->
    <div class="wrapper">

        <!-- Here is the header area -->
        <div class="header">

            <div class="logo">
                <a href="login.html"> <img src="logo.png" alt="logo"/></a> 
            </div>
            <h1>Outfit Crew</h1>
            <div class="filler">
            </div>

        </div>



        <div class="section1">
            <form method="post" class="form-inline">
                <table  class="table table-bordered text-center">
                    <tr>
                        <td>Nom:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Identifiant" name="nom"></td>
                    </tr>
                    <tr>
                        <td>Prénom:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Prénom" name="prenom"></td>
                    </tr>
                    <tr>
                        <td>Mail:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Mail" name="mail"></td>
                    </tr>
                    <tr>
                        <td>Adresse:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Adresse" name="adresse"></td>
                    </tr>
                    <tr>
                        <td>Pays:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Pays" name="pays"></td>
                    </tr>
                    <tr>
                        <td>Ville:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Ville" name="ville"></td>
                    </tr>
                    <tr>
                        <td>Code Postal:</td>
                        <td><input type="int" class="form-control" size="25" placeholder="Code Postal" name="CP"></td>
                    </tr>
                    <tr>
                        <td>Telephone:</td>
                        <td><input type="int" class="form-control" size="25" placeholder="Telephone" name="tel"></td>
                    </tr>
                    <tr>
                        <td>Type de paiement:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Type de paiement" name="type_paiement"></td>
                    </tr>
                    <tr>
                        <td>Numéro de Carte Bancaire:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Numero de Carte" name="num_carte"></td>
                    </tr>
                    <tr>
                        <td>Nom sur la carte:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Nom sur la carte" name="nom_carte"></td>
                    </tr>
                    <tr>
                        <td>Date d'expiration:</td>
                        <td><input type="date" class="form-control" size="25" placeholder="Date d'expiration" name="date_exp"></td>
                    </tr>
                    <tr>
                        <td>Code carte:</td>
                        <td><input type="int" class="form-control" size="25" placeholder="Code Carte" name="code_carte"></td>
                    </tr>
                    <tr>
                        <td>Pseudonyme:</td>
                        <td><input type="text" class="form-control" size="25" placeholder="Pseudonyme" name="pseudo"></td>
                    </tr>
                    <tr>
                        <td>Mot de passe:</td>
                        <td><input type="password" class="form-control" size="25" placeholder="Mot de Passe" name="mdp"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="enregistrer" value="enregistrer"></td>
                    </tr>
                </table>
            </form>
        </div>


        <div class="footer">Copyright &copy; 2021 Outfit Crew<br>
            <a href="mailto:vincent.pompei@edu.ece.fr">vincent.pompei@edu.ece.fr</a>
        </div>


    </div>
</body>
</html>
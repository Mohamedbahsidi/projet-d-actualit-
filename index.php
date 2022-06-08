

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
<link rel="stylesheet" type="text/css" href="desine.css">
   <title></title>
</head>
<body>

<header>
   <h1>
  Votre actualité
 </h1>
</header>

<nav>
   <div>
   <ul>
      <li><a href="index.php">accueil</a></li>
      <li><a href="sports.php">sport</a></li>
      <li><a href="santé.php">santé</a></li>
     <li><a href="education.php">education</a></li>
  <li><a href="politique.php">politique</a></li>
   </ul>

</div>




</nav>

 <!--connection a la base et recuperation des donner--> 
<?php
$user='root';
$pass='';


try {
   $bdd=new PDO ('mysql:host=localhost;dbname=mglsi_news', $user, $pass);

} 
catch (PDOException $e) {



die('désoler il y\'a une erreur:'. $e->getMessage());
   
}

$reponse= $bdd->query('SELECT * FROM  article,categorie WHERE article.categorie=categorie.id ');



while ($data=$reponse->fetch()) {
   
?>
<div class="principal">
<h1><?php  echo $data['titre'];  ?> </h1> <br>
<div class="secondaire">
<p>
<?php    echo $data['contenu'];?>

</p> </div>
</div>
<?php 

}

 $reponse->closeCursor(); ?>

<footer>
   <p>
      creer par MED-toute reproduction interdite
   </p>

</footer>

</body>
</html>
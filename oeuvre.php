<?php

include('header.php');
include('oeuvres.php');

$id = $_GET['id']; //Pour recouperer le parametre id dans l'url
$isOeuvre = null;  //Variable qui contiens l'oeuvre a afficher, par defaut c'est null

foreach ($oeuvres as $oeuvre){   //Pour parcourir le tableau oeuvres
  if($id == $oeuvre['id']){      //verifier si le id de l'url est egal de le id de ouvre -- condition if
      $isOeuvre = $oeuvre;      // On la stock dans la variable $isOeuvre
  }
}  

?>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src='<?php echo $isOeuvre['image'];?>' alt='<?php echo $isOeuvre['nom_oeuvre']?>'>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $isOeuvre['nom_oeuvre']?></h1>
            <p class="description"><?php echo $isOeuvre['author']?></p>
            <p class="description-complete"><?php echo $isOeuvre['description']?>
            </p>
        </div>
    </article>    
 
<!--footer-->
<?php include('footer.php') ?>

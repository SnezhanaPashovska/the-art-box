<?php include('header.php');   //pour pour inclure l'en-tête. Include continue d'executer
      include('oeuvres.php');  ?>

        <div id="liste-oeuvres">
        <?php foreach ($oeuvres as $oeuvre): ?>
            <article class="oeuvre">
                <a href='oeuvre.php?id=<?php echo $oeuvre['id'];?>'>
                    <img src='<?php echo $oeuvre['image']?>' alt='<?php echo $oeuvre['nom_oeuvre']?>'>
                    <h2><?php echo $oeuvre['nom_oeuvre']?></h2>
                    <p class="description"><?php echo $oeuvre['author']?></p>
                </a>
            </article>
           <?php endforeach ?>
        

           
        </div>

   <!--footer-->
   <?php include(__DIR__.'/footer.php') //pour inclure le pied de page ?>
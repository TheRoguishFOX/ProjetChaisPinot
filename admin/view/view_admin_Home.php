<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<?php

$css = '<link rel="stylesheet" type="text/css" href="../public/css/admin.css">';
$title_page = "Administrateur";

ob_start();
?>
<section >

    <article>
        <h1> Nombre de visite sur le site </h1>
        
        
    <form action="index.php?action=insertVin" method="post">
       <label for="name"> nom :</label>
       <input type="text" name="name">
       <br>
       <label for="text"> texte :</label>
       <input type="text" name="text">
       <br>
       <label for="price"> prix : </label>
       <input type="text" name="price">
       <br>
       <label for="type"> type : </label>
       <input type="text" name="type">
       <br>
       <label for="photo"> url : </label>
       <input type="text" name="photo">
       <br>
       <input type="submit" value="insérer">
        
    </form>
        
        
        <?php 
        
        while($donnees = $affichaceView->fetch()){
            
            echo 'nom : ' . $donnees['name'] . '<br>text : ' . $donnees['text'] . '<br> prix : ' . $donnees['price']  . '<br>photo : <img src="../' . $donnees['photo'] . '">';
        }
        
        ?>
        

    </article>
    





</section>
<?php $content = ob_get_clean(); ?>

<?php require('../view/template/template_admin_fr.php'); ?>

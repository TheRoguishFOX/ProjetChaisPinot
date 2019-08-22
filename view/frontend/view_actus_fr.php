<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/actus.css">';
$title_page = "Les actus";

ob_start();
?>
<section >
    <article id="baractus">
        <div id="afterwork">
            <h2> After work &amp; Before Lunch</h2>
        </div>

        <div class="texte">
            <p>Pour partager un bon moment entre amis ou décompresser après une journée de travail, venez partager notre amour du bon vin et de la bonne bière dans un cadre chaleureux et convivial! <br>Concerts, jeux de société, retrouvez toute<br> <strong>l'actualité de Chais Pinot sur <a href="https://fr-fr.facebook.com/pages/category/Pub/Chais-Pinot-118435125527277/">son facebook</a></strong></p>
        </div>
    </article>

    <article id="degust">

        <div class="texte">
            <p>Envie de connaître de nouvelles saveurs? <br><br> <br>  Dégustations privées sur réservation ou dégustations publiques, Florent vous fera découvrir ou redévouvrir toutes les finesses du vin.<br><strong>
            Toutes les informations sur <a href="https://fr-fr.facebook.com/pages/category/Pub/Chais-Pinot-118435125527277/">le facebook</a> du Chais Pinot ou au 06 32 20 82 72.</strong></p>
        </div>
        <div id="degustation">
            <h2> Soirée oenologie <br> et dégustations</h2>
        </div>
    </article>

    <article id="foire">
        <div id="foireauxvins">
            <h2> Foire aux vins</h2>
        </div>
        <div class="texte">
            <p>Florent vous sélectionne une gamme de vins avec des prix défiant toute concurrence!<br><br><br> Pour découvrir de nouvelles saveurs et compléter votre cave, n'hésitez pas à venir faire un tour à la cave! </p>
        </div>
    </article>



    <article id="fete">
        

        <div class="texte">
            <p>Pensez à gâter vos proches avec nos coffrets et chèques cadeaux ainsi que nos offres spéciales fêtes ! <br><br><br>Fête des pères, Noël, anniversaires... nous serons vous conseillez pour faire de ces cadeaux des moments de fêtes inoubliables! </p>
        </div>
        <div id="fetedivers">
            <h2> Spécial fêtes</h2>
        </div>
    </article>

    <article id="mariages">
        <div id="mariagedivers">
            <h2> Fournisseur de bonheur </h2>
        </div>
        <div class="texte">
            <p>Nous pouvons vous fournir pour tous les moments importants de votre vie ! <br><br><br> Mariages, baptêmes, anniversaire.. Pensez au meilleur, nous nous occupons du reste! Nous sélectionnerons avec vous lors d'une dégustation, toutes les boissons dont vous réviez.<br> Nous louons également des pompes à bières pour tous vos évènements festifs. </p>
        </div>

    </article>









</section>
<?php $content = ob_get_clean(); ?>

<?php require('./view/template/template_site_fr.php'); ?>

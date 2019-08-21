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
            <p>Concerts, jeux de société...</p>
        </div>
    </article>

    <article id="degust">

        <div class="texte">
            <p>Dégustations privées, dégustations publiques</p>
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
            <p>Florent vous sélectionne une gamme de vins avec des prix défiant toute concurrence ! </p>
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
            <p>Nous pouvons vous fournir pour tous les moments importants de votre vie ! <br><br><br> Mariages, baptêmes, anniversaire.. Pensez au meilleur, nous nous occupons du reste! Nous sélectionnerons avec vous lors d'une dégustation, toutes les boissons dont vous réviez.<br> Nous louons également des pompes à bières </p>
        </div>

    </article>









</section>
<?php $content = ob_get_clean(); ?>

<?php require('./view/template/template_site_fr.php'); ?>

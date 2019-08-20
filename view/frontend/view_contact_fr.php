<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/contact.css">';
$title_page = "Contact";

ob_start();
?>


<section id="contact">

    <article id="Contactnewsletter">

      <h2> Envie de tout savoir? Inscrivez-vous à notre newsletter!</h2>

        <form action="index.php?news=inscription" method="post">

            <label for="mail">Votre e-mail :</label>
            <input type="email" id="mail" name="news_mail">
            <input type="submit" name="Envoyer">
        </form>
    </article>

    <div id="containerContact">

        <article id="ContactCoordonnees">
            <i class="fas fa-map-marker"></i>
            <h2> Le Chais Pinot</h2>
            <p> 1 Rue d'Arras - 62140 Hesdin</p>

            <i class="fas fa-mobile-alt"></i>
            <h2> Téléphone </h2>
            <p>06 32 20 82 72</p>

            <i class="fas fa-map-marked-alt"></i>
            <h2> Coordonnées GPS </h2>
            <p>50°22'26.8"N 2°02'17.5"E</p>
            <a href="https://www.google.fr/maps/place/Chais+pinot/@50.3738729,2.0360595,17z/data=!4m13!1m7!3m6!1s0x47dda327cbca8549:0xa5a7e28a3fed6c4e!2s1+Rue+d'Arras,+62140+Marconne!3b1!8m2!3d50.3738729!4d2.0382482!3m4!1s0x47dda327c9915555:0x1a430917c9a38297!8m2!3d50.3738729!4d2.0382482"> Retrouvez ici le plan sur Google Maps</a>
            <br><br>
            <br>
        </article>
            <article id="HorairesContact">

            <i class="fas fa-clock"></i>
            <h2> Horaires d'ouverture </h2>
            <p> <span>Lundi</span> : Fermé<br>
                <span>Mardi</span> <br> 
                10h00 – 12h30 / 14h00 – 22h00<br>
                <span>Mercredi</span> <br> 
                10h00 – 12h30 / 14h00 – 22h00<br>
                <span>Jeudi</span> <br> 
                10h00 – 12h30 / 14h00 – 22h00<br>
                <span>Vendredi</span> <br> 
                10h00 – 12h30 / 14h00 – 22h00<br>
                <span>Samedi</span> <br> 
                10h00 – 12h30 / 14h00 – 22h00<br>
                <span>Dimanche</span> : Fermé</p>

        </article>

        <article id="ContactFormulaire">

            <h2> Besoin d'un renseignement? <br>Contactez-nous </h2>
            <br><br>
            <form action="#" method="post">
                <label for="name">Votre nom :</label>
                <input type="text" id="name" name="contact_nom">
                <br><br>
                <label for="mail">Votre e-mail :</label>
                <input type="email" id="mail" name="contact_mail">
                <br><br>
                <label for="msg">Votre message :</label>
                <textarea id="msg" name="contact__message"></textarea>
                <br><br>
                <input type="submit" name="Envoyer">
            </form>
        </article>


    </div>








</section>
<?php $content = ob_get_clean(); ?>

<?php require('./view/template/template_site_fr.php'); ?>

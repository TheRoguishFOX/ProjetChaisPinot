<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/contact.css">';
$title_page = "Contact";

ob_start();
?>


<section id="contact">

    <article id="Contactnewsletter">

      <strong> Envie de tout savoir? Inscrivez-vous à notre newsletter!</strong>

        <form action="index.php?news=inscription" method="post">

            <label for="mail">Votre e-mail :</label>
            <input type="email" id="mail" name="news_mail">
            <input type="submit" name="Envoyer">
        </form>

    </article>

    <div id="containerContact">

        <article id="ContactCoordonnees">
            <i class="fas fa-map-marker"></i>
            <strong> Le Chais Pinot</strong>
            <p> 1 Rue d'Arras
                <br>62140 Hesdin</p>
            <br>
            <i class="fas fa-mobile-alt"></i>
            <strong> Téléphone </strong>
            <p>06 32 20 82 72</p>
            <br>
            <i class="fas fa-map-marked-alt"></i>
            <strong> Coordonnées GPS </strong>
            <p>50°22'26.8"N 2°02'17.5"E</p>
            <a href="https://www.google.fr/maps/place/Chais+pinot/@50.3738729,2.0360595,17z/data=!4m13!1m7!3m6!1s0x47dda327cbca8549:0xa5a7e28a3fed6c4e!2s1+Rue+d'Arras,+62140+Marconne!3b1!8m2!3d50.3738729!4d2.0382482!3m4!1s0x47dda327c9915555:0x1a430917c9a38297!8m2!3d50.3738729!4d2.0382482"> lien Google Maps </a>
            <br><br>
            <br>

            <i class="fas fa-clock"></i>
            <strong> Horaires d'ouverture </strong>
            <p> Lundi <br> Fermé<br><br>
                Mardi <br> 10:00 – 12:30<br>14:00 – 22:00<br><br>
                Mercredi <br> 10:00 – 12:30<br>14:00 – 22:00<br><br>
                Jeudi <br> 10:00 – 12:30<br>14:00 – 22:00<br><br>
                Vendredi <br> 10:00 – 12:30<br>14:00 – 22:00<br><br>
                Samedi <br> 10:00 – 12:30<br>14:00 – 22:00<br><br>
                Dimanche <br> Fermé</p>

        </article>

        <article id="ContactFormulaire">

            <strong> Besoin d'un renseignement? <br>Contactez-nous </strong>
            <p> Nous vous répondrons dans les meilleurs délais</p>
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

<?php require('./view/frontend/template_site_fr.php'); ?>

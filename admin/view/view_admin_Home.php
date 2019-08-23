<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/admin.css">';
$title_page = "Administrateur";

ob_start();
?>
<section >

    <article>
        <h1> Gestion base de données des produits </h1>
        <form action="">
            <button> liste des bdd produits</button>
        </form>
    </article>




</section>
<?php $content = ob_get_clean(); ?>

<?php require('./view/template/template_admin_fr.php'); ?>

<?php

$css = '<link rel="stylesheet" type="text/css" href="./public/css/utilisateur.css">';
$title_page = 'Conexion et inscription';

ob_start();

?>


<section>
    <div id="utilisateur">
       
        <div class="connect">
           <h2>Connectez-vous :</h2>
            <form action="index.php" method="post">
                <label for="mail">Entrez votre e-mail : </label><br><input type="email" name="mail">
                <br>
                <label for="password">votre mot de passe : </label><br><input type="password" name="password">
                <br>
                <input type="submit" value="Me connecté" class="valider">
            </form>
        </div>
        <p class="tiret"></p>
        <div class="inscription">
           <h2>Pas encore inscris !</h2>
            <form action="index.php" method="post">
                <label for="firstname">Nom : </label><input type="text" name="firstname">
                <br>
                <label for="name">Prénom : </label><input type="text" name="name">
                <br>
                <label for="adress">Adresse : </label><input type="text" name="adress">
                <br>
                <label for="phone">Numero de téléphone : </label><input type="number" name="phone">
                <br>
                <label for="mail">Votre adresse mail : </label><input type="email" name="mail">
                <br>
                <label for="verifmail">Verification de votre mail : </label><input type="email" name="verifmail">
                <br>
                <label for="password">Entrez votre mot de passe : </label><input type="password" name="password">
                <br>
                <label for="verifpasseword">Verification de votre mot de passe : </label><input type="password" name="verifpasseword">
                <br>
                <input type="checkbox" name="newsletter" class="check"><label for="newsletter">inscription à notre newsletter?</label>
                <br>
                <input type="submit" value="Valider" class="valider"><a href="index.php?action=shop_home"><button>Annuler</button></a>
            </form>
        </div>
    </div>
</section>


<?php

$content = ob_get_clean();

require('./view/template/template_shop_fr.php');
?>

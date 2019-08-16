<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/css/headerFooter.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <?= $css ?>
    <title><?= $title_page ?></title>
    
</head>

<body>
    <header>

        <a href="index.php"> <img src="./public/images/logo/logo_chais_pinot_blanc.png" alt="Logo Chais Pinot"></a>
        <h1 id="hautdepage"></h1>
        <nav>
            <ul>

                <li><a href="#">La cave et le bar</a></li>
                <li> <a href="#">Actus</a></li>
                <li><a href="#" id="laboutique">La boutique en ligne</a></li>
                <li><a href="index.php?action=contact">Contact</a></li>

            </ul>
        </nav>
    </header>
    
    <br><br><br>
   
    <?= $content ?>
    
    <footer>

        <article class="footer">
            <p><a href="#"> Conditions générales</a><br><br>
                <a href="#"> Mentions légales</a><br><br>
                <a href="#hautdepage"> Haut de page</a><br><br>
                <a href="#"> Retour accueil</a></p>

            <p class="tiret"></p>

            <p>Envie de tout savoir? <br> Inscrivez-vous à notre newsletter <br><br>
                <label for="nom">Nom :</label>&nbsp;&nbsp;&nbsp;
                <input type="text" name="nom" placeholder="Quel est votre nom?" required/><br><br>
                <label for="mail"> Mail :</label>&nbsp;&nbsp;&nbsp;
                <input type="text" name="mail" placeholder="Quel est votre mail?" required />
                <input type="submit" value="Valider" />
            </p>
            <p class="tiret"></p>
            <p> Restez connectés: <br><br>
                <strong id="logo"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i> </a></strong>
                <strong id="logo"><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i> </a></strong>
                
            </p>
        </article>



    </footer>

</body>

</html>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/headerFooter.css">
    <title><?= $title_page ?></title>
</head>

<body>
    <header>

        <a href="#"> <img src="logo_Chais_Pinot/logo_chais_pinot_blanc.png" alt="Logo Chais Pinot"></a>
        <h1 id="hautdepage"></h1>
        <nav>
            <ul>

                <li><a href="#">La cave et le bar</a></li>
                <li> <a href="#">Actus</a></li>
                <li><a href="#" id="laboutique">La boutique en ligne</a></li>
                <li><a href="#">Contact</a></li>

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
                <input type="text" name="nom" placeholder="Quel est votre nom?" required autofocus /><br><br>
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

<?php

define('TARGET', '../../public/');    // Repertoire cible
define('MAX_SIZE', 100000);    // Taille max en octets du fichier
define('WIDTH_MAX', 800);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 800);    // Hauteur max de l'image en pixels
 
// Tableaux de donnees
$tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
$infosImg = array();
 
// Variables
$extension = '';
$message = '';
$nomImage = '';


if(!empty($_POST))
{
  // On verifie si le champ est rempli
  if( !empty($_FILES['fichier']['name']) )
  {
    // Recuperation de l'extension du fichier
    $extension  = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
 
    // On verifie l'extension du fichier
    if(in_array(strtolower($extension),$tabExt))
    {
      // On recupere les dimensions du fichier
      $infosImg = getimagesize($_FILES['fichier']['tmp_name']);
 
      // On verifie le type de l'image
      if($infosImg[2] >= 1 && $infosImg[2] <= 14)
      {
        // On verifie les dimensions et taille de l'image
        if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['fichier']['tmp_name']) <= MAX_SIZE))
        {
          // Parcours du tableau d'erreurs
          if(isset($_FILES['fichier']['error']) 
            && UPLOAD_ERR_OK === $_FILES['fichier']['error'])
          {
            // On renomme le fichier
            $nomImage = md5(uniqid()) .'.'. $extension;
 
            // Si c'est OK, on teste l'upload
            if(move_uploaded_file($_FILES['fichier']['tmp_name'], TARGET.$nomImage))
            {
              $message = 'Upload réussi !';
            }
            
          }
          
        }
        
      }
      
    }
    
  }
  
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>Upload d'une image sur le serveur !</title>
  </head>
  <body>
 <?php
      if( !empty($message) ) 
      {
        echo '<p>',"\n";
        echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
        echo "\t</p>\n\n";
      }
    ?>
    <!-- Debut du formulaire -->
   <form enctype="multipart/form-data" action="viewtest.php" method="post">
    <fieldset>
        <legend>Formulaire</legend>
          <p>
            <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
            <input name="fichier" type="file" id="fichier_a_uploader" />
            <input type="submit" name="submit" value="Uploader" />
          </p>
      </fieldset>
    </form>
    <!-- Fin du formulaire -->
  </body>
</html>
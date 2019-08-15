<!--index dit le routeur lui fait des verification et apel le controller-->


<!--
EXEMPLE
//require('controller/frontend.php');
//
//if (isset($_GET['action'])) {
//    if ($_GET['action'] == 'listPosts') {
//        listPosts();
//    }
//    elseif ($_GET['action'] == 'post') {
//        if (isset($_GET['id']) && $_GET['id'] > 0) {
//            post();
//        }
//        else {
//            echo 'Erreur : aucun identifiant de billet envoyé';
//        }
//    }
//    elseif ($_GET['action'] == 'addComment') {
//        if (isset($_GET['id']) && $_GET['id'] > 0) {
//            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
//                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
//            }
//            else {
//                echo 'Erreur : tous les champs ne sont pas remplis !';
//            }
//        }
//        else {
//            echo 'Erreur : aucun identifiant de billet envoyé';
//        }
//    }
//}
//else {
//    listPosts();
//}-->




<!--
ERREUR

    try{

            else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');}

            else {
                    // Autre exception
                    throw new Exception('Aucun identifiant de billet envoyé');}
    }
    
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}
-->

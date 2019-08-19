<?php

    require_once ('./model-manager/frontend.php');
    require_once('./model-manager/newsletterManager.php');



    function home(){
        require('./view/frontend/view_Home_fr.php');
    }

    function contact(){
        require('./view/frontend/view_contact_fr.php');
    }

//    function verifMail($postmail){
//        $newsletters = new Newsletter();
//        $mail = $newsletters->test_mail($postmail);
//        require('./view/frontend/view_test.php');
//    }
//dans la fonction newsletter on récupère le $_POST['news_mail'] qui est dans index
    function newsletter($news_mail){
        $newsletters = new Newsletter();
        $newMail = $newsletters->insert_newsletter($news_mail);
        
    if ($newMail === false) {
        throw new Exception('Impossible de vous inscrire !');
    }
    else {
        require('./view/frontend/view_contact_fr.php');
    }
        
    }

    function shop_home(){
        require('./view/frontend/view_shop_home_fr.php');
    }

    function shop(){
        require('./view/frontend/view_shop_fr.php');
    }
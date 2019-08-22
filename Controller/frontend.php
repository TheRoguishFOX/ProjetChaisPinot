<?php

    require_once('./model-manager/newsletterManager.php');
    require_once('./model-manager/commentManager.php');



    function home(){
        $list_com = new Comments;
        $coms = $list_com->listCommentsHome();
        require('./view/frontend/view_Home_fr.php');
    }
    
    function cavebar(){
        $list_com = new Comments;
        $coms = $list_com->listComments();
        require('./view/frontend/view_cavebar_fr.php');
    }
    function insert_comment($pseudo, $text, $note){
        $news_coms = new Comments;
        $_data = $news_coms->postComments($pseudo, $text, $note);   
    }
    function comments(){
        $list_com = new Comments;
        $coms = $list_com->listAllComments();
        require('./view/frontend/view_comments_fr.php');
    }
    function triComments($note){
        $tri_com = new Comments;
        $coms = $tri_com->triComment($note);
        require('./view/frontend/view_comments_fr.php');
    }

    function actus(){
        require('./view/frontend/view_actus_fr.php');
    }

    function ConditionsGnrales(){
        require('./view/frontend/view_ConditionsGnrales_fr.php');
    }

    function MentionsLegales(){
        require('./view/frontend/view_MentionsLegales_fr.php');
    }


    function contact(){
        require('./view/frontend/view_contact_fr.php');
    }

function testmail($postmail){
    $testnews = new Newsletter($postmail);
    $reponse = $testnews->test_mail($postmail);
    $data = $reponse->fetch();
        if($data['verif'] == 0){
            $newsletters = new Newsletter();
            $newMail = $newsletters->insert_newsletter($postmail);
            require('./view/frontend/view_contact_fr.php');
        }
        
        else {require('./view/frontend/view_home_fr.php');}
    
//    require('./view/frontend/view_test.php');
}
    
//    function newsletter($news_mail){
//            $newsletters = new Newsletter();
//            $newMail = $newsletters->insert_newsletter($news_mail);
//        require('./view/frontend/view_contact_fr.php');
//    }

    function shop_home(){
        require('./view/frontend/view_shop_home_fr.php');
    }

    function shop(){
        require('./view/frontend/view_shop_fr.php');
    }
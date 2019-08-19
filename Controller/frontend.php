<?php

    require_once ('./model-manager/frontend.php');
    require_once('./model-manager/newsletterManager.php');



    function home(){
        require('./view/frontend/view_Home_fr.php');
    }
    
    function cavebar(){
        require('./view/frontend/view_cavebar_fr.php');
    }

function actus(){
        require('./view/frontend/view_actus_fr.php');
    }


    function contact(){
        require('./view/frontend/view_contact_fr.php');
    }
    
    function newsletter($news_mail){
            $newsletters = new Newsletter();
            $newMail = $newsletters->insert_newsletter($news_mail);
        require('./view/frontend/view_contact_fr.php');
    }

    function shop_home(){
        require('./view/frontend/view_shop_home_fr.php');
    }

    function shop(){
        require('./view/frontend/view_shop_fr.php');
    }
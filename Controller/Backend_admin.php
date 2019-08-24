<?php

    require_once('../model-manager/adminManager.php');

function homeAdmin(){
    
        $affichage = new viewtest;
        $affichaceView = $affichage->pamplemousse();
        
    require('./view/view_admin_Home.php');
}

    function homeAdminInsert($name, $text, $price, $photo, $type){
        
            $insertionproduits = new viewtest;
            $insertionView = $insertionproduits->insertPD($name, $text, $price, $photo, $type);
        
    }

    function adminClients(){
        
        require('./view/view_adminClients.php');
    }

    function adminNewsletter(){
        
        require('./view/view_adminNewsletter.php');
    }

    function adminComments(){
        
        require('./view/view_adminComments.php');
    }
        
    function adminVins(){
    require('./view/view_adminVin.php');
    }
        
    function uploadPics(){
            
    }

<?php

    require_once('./controller/frontend.php');


try{
    if(isset($_GET['action'])){ 
        
        if($_GET['action']=='contact'){
            contact();
        }
        
    }

    else {
        home();
    }
}

catch (Exception $e) {
            echo($e->getMessage());}
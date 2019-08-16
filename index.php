<?php

    require_once('./controller/frontend.php');


try{
    if(isset($_GET['action'])){
        
    }

    else {
        home();
    }
}

catch (Exception $e) {
            echo($e->getMessage());}
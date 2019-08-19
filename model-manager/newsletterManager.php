<?php

require_once("config.php");

    class Newsletter extends DataConnect
    {
        
        public function test_mail($postmail)
        {
            $db = $this->dbConnect();
            $req = $db->prepare("SELECT COUNT(`newsMail`) as verif, `newsMail` from newsletter WHERE `newsMail` = ?");
            $reponse =$req->execute(array($postmail));
            
            return $req;
        }

        public function insert_newsletter($postmail)
        {

            $db = $this->dbConnect();

            $req = $db->prepare('INSERT INTO newsletter(newsMail) VALUES(?)');
            $newMail = $req->execute(array($postmail));
            return $newMail;
        }

    }


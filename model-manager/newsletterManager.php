<?php

require_once("config.php");

    class Newsletter extends DataConnect
    {
        
//        public function test_mail($postmail)
//        {
//            $db = $this->dbConnect();
//            $req = $db->prepare('SELECT COUNT(newMail) from newsletter WHERE newMail = ?');
//            $mail = $req->execute(array($postmail));
//            return $mail;
//        }

        public function insert_newsletter($news_mail)
        {

            $db = $this->dbConnect();

            $req = $db->prepare('INSERT INTO newsletter(newsMail) VALUES(?)');
            $newMail = $req->execute(array($news_mail));
            return $newMail;
        }

    }


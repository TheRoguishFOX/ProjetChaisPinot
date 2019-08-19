<?php

class DataConnect
{
    protected function dbConnect()
    {
        $db = new PDO("mysql:host=localhost;dbname=chaispinot",'ChaisPinot','');
        return $db;
    }
}
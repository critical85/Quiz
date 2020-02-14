<?php

    class Db{
        
        // connection parametres
        private $host = 'localhost';
        private $user = 'flashback';
        private $pass = 'flashback';
        private $dbname = 'quiz';

        protected function connect(){

            // creating query
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

            // running connection
            try {
                $pdo = new PDO($dsn, $this->user, $this->pass);
                // settings for exctracting data from database
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $pdo;
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }

        }

    }

?>
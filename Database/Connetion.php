<?php

use PDO;
use PDOException;

class Connection
{
    private PDO $pdo;
    private ?string $host = "localhost";
    private ?string $dbname = "d1";
    private ?string $pass = "";
    private ?string $user = "root";


    public function __construct()
    {
        try {
            $this->pdo = (new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass));
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("ERR: " . $e->getMessage());
        }
    }

    public function getConnetion(): PDO
    {
        return $this->pdo;
    }
}

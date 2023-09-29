<?php
class Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=my_database', 'root', '');
    }

    public function connect()
    {
        return $this->pdo;
    }
}
?>
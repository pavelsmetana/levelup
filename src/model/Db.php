<?php

namespace App\model;

use PDO;

class Db
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=db;dbname=blank5", "root", "Ayse1994@");
    }

    public function query(string $sql, array $data = [])
    {
        $stm = $this->pdo->prepare($sql);
        $stm->execute($data);

        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}

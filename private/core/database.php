<?php

require_once 'config.php';

class Database
{
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    private function connect()
    {
        try {
            $con = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                DB_USER,
                DB_PASS,
                $this->options
            );
            return $con;
        } catch (PDOException $e) {
            die("Could not connect to the database: " . $e->getMessage());
        }
    }

    public function run($query, $data = [], $data_type = 'object')
    {
        $con = $this->connect();
        $stmt = $con->prepare($query);

        if ($stmt) {
            $check = $stmt->execute($data);
            if ($check) {
                if ($data_type == "object") {
                    return $stmt->fetchAll(PDO::FETCH_OBJ);
                } else {
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
            }
        }

        return false;
    }
}

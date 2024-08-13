<?php

namespace SyafiqParadisam\Belajar\PHP\MVC\Models;

use SyafiqParadisam\Belajar\PHP\MVC\Config\ConnectDB;

class Image extends ConnectDB
{
    public function find()
    {
        $result = pg_prepare($this->connect(), "findquery", "SELECT * FROM image");

        // Execute the statement
        $result = pg_execute($this->connect(), "findquery", array());

        if (!$result) {
            die("Find Query error" . pg_last_error($this->connect()));
        }


        return $result;
    }

    public function insert(string $image)
    {

        $result = pg_prepare($this->connect(), "insertQuery", "INSERT INTO image (image) VALUES ($image)");
        $result = pg_execute($this->connect(), "insertQuery");

        if (!$result) {
            die("Insert Query error" . pg_last_error($this->connect()));
        }
    }

    public function findImageId()
    {

    }

    public function findWithLimit()
    {

    }
}
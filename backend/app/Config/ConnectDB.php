<?php

namespace SyafiqParadisam\Belajar\PHP\MVC\Config;

class ConnectDB
{
    public function connect()
    {
        $connectionString = "host=localhost port=5432 dbname=nimepix user=postgres password=root";
        $db_connection = pg_connect($connectionString);

        if (!$db_connection) {
            die("Connection failed: " . pg_last_error());
        }
       return $db_connection;
    }
   
}
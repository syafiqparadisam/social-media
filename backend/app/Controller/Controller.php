<?php
namespace SyafiqParadisam\Belajar\PHP\MVC\Controller;

use SyafiqParadisam\Belajar\PHP\MVC\Models\Image;

class Controller extends Image
{
    public function getImages(): void
    {
        header('Content-Type: application/json');
        header("HTTP/1.1 200 OK");
        $images = $this->find();
        $row = pg_fetch_assoc($images);
        $result = json_encode($row);
        echo $result;
    }

    public function insertImages()
    {
        echo "Inserting";
        // $this->insert();
    }
}


<?php
namespace SyafiqParadisam\Belajar\PHP\MVC\Controller;

use SyafiqParadisam\Belajar\PHP\MVC\Models\Image;

class Controller extends Image
{
    public function getImages(): void
    {
        header('Content-Type: application/json');
        header("HTTP/1.1 200 OK");
       $result = $this->find();
       $encoding = json_encode($result);
       echo $encoding;
    }

    public function insertImages()
    {
        echo "Inserting";
        // $this->insert();
    }
}


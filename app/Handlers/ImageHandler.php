<?php

namespace App\Handlers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

class ImageHandler 
{
    function __construct() {

    }

    function test() {

        return Image::make('/var/www/Desverreaux.com/public/assets/images/coffee.jpeg');

        // return public_path('/assets/images/coffee.jpeg');


    }    

    function test2() {

        // create an image manager instance with favored driver
        $manager = new ImageManager();

        // to finally create image instances
        $image = $manager->make('/var/www/Desverreaux.com/public/assets/images/coffee.jpeg')->response();
    
        return $image;
    }

}

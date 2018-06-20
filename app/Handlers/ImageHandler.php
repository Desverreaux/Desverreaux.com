<?php

namespace App\Handlers;

use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;

use Intervention\Image\ImageManagerStatic as Image;

class ImageHandler 
{
    function __construct() {

    }

    function test() {

        return Image::make('/var/www/Desverreaux.com/public/assets/images/coffee.jpeg');

        // return public_path('/assets/images/coffee.jpeg');


    }    


}

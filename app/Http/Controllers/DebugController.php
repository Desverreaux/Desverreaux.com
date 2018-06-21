<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;

use App\Asset;
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\Response as Response;
use \Imagick;

class DebugController extends PageController
{
    public function phpinfo($Passed_Data = NULL) {      
        $PageObj = $this->initPageObject('phpinfo');
        array_push($PageObj->BodyComponents,'Components.phpinfo');
        return $this->ContructedPage('Pages.Simple', $PageObj);
    }

    public function Playground($RouteName, $Passed_Data = NULL) {
        $PageObj = $this->initPageObject($RouteName, $Passed_Data);
        return $this->ContructedPage('Pages.Playground' , $PageObj);    
    }


    ////////Merge these two back at some point
    public function Playground_Subdir($RouteName, $Passed_Data = NULL) {
        $PageObj = $this->initPageObject($RouteName, $Passed_Data);
        
        // $this->AssetHandler->CatalogAssets();

        $obj[0] = $this->ImageHandler->test2();

        // return "check DB";
        // return $obj->response('jpg');
        //return $obj;

        $PageObj->Data['lines'] = $obj;
        return $this->ContructedPage('Pages.Playground.' . $RouteName , $PageObj);
    }

    public function test() {
        header('Content-type: image/jpeg');

        $image = new Imagick('/var/www/Desverreaux.com/public/assets/images/coffee.jpeg');

        // If 0 is provided as a width or height parameter,
        // aspect ratio is maintained
        $image->thumbnailImage(100, 0);

        echo $image;
    }

//->get('Path')
}

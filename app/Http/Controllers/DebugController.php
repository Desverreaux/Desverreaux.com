<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

use App\Asset;

class DebugController extends PageController
{
    public function __construct() {
        $this->Help = app('\Helpers');
    }
    
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
        //$this->Help->CatalogAssets();

        $obj = new Asset();
        //$obj = App\Asset::where('alias', 1)->get();



        $PageObj->Data['lines'] = $obj->formatInfo();
        return $this->ContructedPage('Pages.Playground.' . $RouteName , $PageObj);
    }

    



    // function testHelperManager() {
    //     $pass = false;
    //     $test1 = app('\Helpers');
    //     $pass = $test1->isConnectedPropagation();

    //     return $pass;
    // }


}

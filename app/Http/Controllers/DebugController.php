<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugController extends PageController
{
    
    public function phpinfo($Passed_Data = NULL) {
        $PageObj = $this->initPageObject('phpinfo');

        $PageObj->BodyComponents = array('Components.phpinfo');

        return $this->ContructedPage('Layouts.Base', $PageObj);
    }

    public function Playground($Passed_Data = NULL) {
        $PageObj = $this->initPageObject('Playground', $Passed_Data);
         
        return $this->ContructedPage('Pages.Debug', NULL);
    }

}


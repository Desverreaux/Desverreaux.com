<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugController extends PageController
{
    
    public function phpinfo($Passed_Data = NULL) {
        $PageObj = $this->initPageObject('phpinfo');

        array_push($PageObj->BodyComponents,'Components.phpinfo');

        return $this->ContructedPage('Pages.Simple', $PageObj);
    }

    public function Playground($Passed_Data = NULL) {
        $ViewName = 'Playground';

        if(isset($Passed_Data)) {
            $ViewName = $ViewName . $Passed_Data;
        }

        $PageObj = $this->initPageObject($ViewName, $Passed_Data);
         
        return $this->ContructedPage('Pages.Playground', NULL);
    }

}


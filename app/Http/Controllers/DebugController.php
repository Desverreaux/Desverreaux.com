<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Handlers\ImageHandler as Image;

class DebugController extends PageController
{

    public function phpinfo(Request $resquest) {
        $Data = array();
        $Data['Title'] = "Php Configuration";
        $Data['BodyComponents'] = 'Components.phpinfo';

        return view('Pages.Simple')->with('Data', $Data);
    }

    public function Playground(Request $resquest) {
        $Data = array();
        $Data['Title'] = "Debugging Environment";

        return view('Pages.Playground' )->with('Data', $Data);    
    }

    public function Playground_Subdir(Request $resquest, $view) {
        $Data = array();
        $Data['Title'] = 'test';

        return view('Pages.Playground.' . $view )->with('Data', $Data);    
    }

}

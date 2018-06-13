<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Page;

class PageController extends Controller
{


 //Universal exit point for the constuction of pages by PageController and its children
    public function ContructedPage( $viewFileName = 'Pages.Error', $Page) {
        return view($viewFileName)->with('PageObj',$Page);
    }    
    
    public function index($Passed_Data = NULL) {
        $PageObj = $this->initPageObject('Home', $Passed_Data);

        return $this->ContructedPage('Pages.Landing', $PageObj);
    }






//Section for logic that is universaly applied to each page requested
    public function initPageObject($RouteName, $URL_Parameters = NULL) {
        $this->log->debug("The following page has been requested: " . $RouteName);

        $PageObj = new Page($RouteName, $URL_Parameters);

        require_once($_SERVER['DOCUMENT_ROOT'] .'/PHP/PathAssignments.php');
        require_once('./PHP/ColorPallete.php');

        $PageObj->Data[ 'images' ] = $images;

        return $PageObj;
    }

}

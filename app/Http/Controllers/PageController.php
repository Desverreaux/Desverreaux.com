<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        $Passed_Data = array(
            'images' => self::PageController_Initialize()
        );
        return view('Pages.Landing')->with('Passed_Data',$Passed_Data);
    }

    public function debug() {
        $Passed_Data = array(
            'images' => self::PageController_Initialize()
        );
        return view('Pages.Debug')->with('Passed_Data',$Passed_Data);
    }






    
     
    #Initialize should only get ran once during user time on the site
    #!!! there should be a better place to put this with the laravel 
    #    frame work but im not sure where so it will go in the page 
    #    page controller. 
    public function PageController_Initialize() {
        $_SERVER['DOCUMENT_ROOT'] = dirname($_SERVER['DOCUMENT_ROOT']);

        require_once($_SERVER['DOCUMENT_ROOT'] .'/public/PHP/PathAssignments.php');
        require_once('./PHP/ColorPallete.php');

        return $images;
    }

}

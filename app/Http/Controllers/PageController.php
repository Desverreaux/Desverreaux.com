<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Helpers\HelperManager as Help;
use Page;

class PageController extends Controller
{
    public function index(Request $resquest) {
        $Data = array();
        $Data['Title'] = 'Home';

        return view('Pages.Landing')->with('Data', $Data);
    }

    public function blog(Request $resquest) {
        $Data = array();      
        $Data['Title']='Blog Entries';

        return view('Pages.BlogDirectory')->with('Data', $Data);
    }

}

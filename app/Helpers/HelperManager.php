<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class HelperManager {

    public function __construct() {
        //$this->ImageCompression = new Helper_ImageCompression();
    }
    
/*-------------------------------------------------------------
|                      Common Helper Functions  
-------------------------------------------------------------*/
//general purpose functions that are either too broad or too specific
//to be placed in any other file
    static function flattenArray($multidimensionalArray) 
        {
                $fixedArray = array();
                foreach($multidimensionalArray as $node) {
                    if(is_array($node)) {
                        flattenArray($node);
                    }
                    else {
                        array_push($fixedArray, $node);
                    }
                }
                return $fixedArray;
        }
/*-------------------------------------------------------------
|                    Complex Helper Tasks  
-------------------------------------------------------------*/
// functions in this section require/implement obsured logic, as 
// well as multiple helper files, this section should be refactored 
// frequently as the line between putting functions here and 
// placing them in their own files/controllers is very thin


/*-------------------------------------------------------------
|                   Helper Class Instantiation  
-------------------------------------------------------------*/
// if anouther file needs an instance of a helper file class, this 
// section will include functions to create, init, and return them




}



/*TODO 
----Create a method/class/or section that can simply redirect a function 
    call to the appropreate file. 














?>





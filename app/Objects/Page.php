<?php

namespace App\Objects;
use Illuminate\Support\Facades\Log;

class Page 

{
    public $Title = NULL;
    public $Data = Array();
    public $HeaderComponents = Array();
    public $BodyComponents = Array();

    function __construct($RouteName, $URL_Parameters = NULL) {
        $this->Title = $RouteName;
     
        Log::channel->dev->debug('test');
    } 

    function SetName($name) {
        $this->Title = $name;
    }

    function AppendData_Single($key, $value) {
        
    }
    
    // function AppendData(array $keys, array $values) {
    //     // if(count($keys) != count($values)) {
    //     // }
    // }
    
    function AppendData_Unparsed(array $UnParsedData) {
        foreach($URL_Parameters as $values) {
            $this->Data['value' . $count] = $values;
            $count++;
        }
    }
    
    function RemoveData() {}//TODO
    function getRegisteredDataArrayKeys() {}//TODO


    function info() {
        $output = "Title: " . $this->Title;
    }
}

?>
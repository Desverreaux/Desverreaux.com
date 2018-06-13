<?php

namespace App\Objects;

class Page 

{
    public $Title = NULL;
    public $Data = Array();
    public $HeaderComponents = Array();
    public $BodyComponents = Array();

    function __construct($RouteName, $URL_Parameters = NULL) {
        $this->Title = $RouteName;
        $this->Data = $URL_Parameters;
    } 

    function info() {
        $output = "Title: " . $this->Title;
    }
}

?>
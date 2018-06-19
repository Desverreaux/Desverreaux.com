<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

use App\Asset;

class DebugController extends Controller
{
    public function __construct() {
        $this->CurrentAssetObj = new Asset();
    }



    

    public function CreateAsset( $real_path_to_asset = NULL) {
        $this->Path = $real_path_to_asset;
        $this->resolveValues();
    }

    function resolveValues() {
        $this->resolveName();
        $this->resolveFileType();
        $this->resolveFileSize();
        $this->resolveVersion();
        $this->resolveNeedsCompression();
        $this->resolveQuality();
        $this->resolveAltText();
        $this->resolveAlias();
        $this->resolveHidden();
        $this->resolveSiteDomain();
        //$this->resolveOriginal;
        
        
    }

}

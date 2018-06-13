<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Log;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct() {
        $this->logs();




    }

//example of use: $this->log->debug(config('app.debug'));
    function logs() {
        if(config('app.debug')) {
            $this->enableFileLogs();
            $this->enableBrowserLogs();
        }
        else {
            $this->enableBrowserLogs();
        }
    }


    function enableFileLogs() {
        $log_stream = new StreamHandler(storage_path('logs/Devlogs.log'), Logger::DEBUG);
        
        $this->log = new Logger('Controller');
        
        $this->log->pushHandler($log_stream);
    }

    function enableBrowserLogs() {
        

    }
}

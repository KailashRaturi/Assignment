
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Log;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/contact',function(){
    //Log::info("this is contact page");
    Log::channel('customlog')->info("This is my custom log file");
    dd("done");
});



Route::get('/help',function(){
   
    Log::channel('customlog1')->info("This is my help log file");
    dd("done");
});
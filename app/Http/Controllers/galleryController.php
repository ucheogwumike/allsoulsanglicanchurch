<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\SplFileInfo;
use SplFileInfo as GlobalSplFileInfo;

// use File
// use Illuminate\Filesystem\FilesystemManager as Storage;

// use Storage;

class galleryController extends Controller
{
   public function countgallery(){
   
     $pics = File::allFiles(public_path().'/galleries');//Storage::disk('public')->listContents();
     
    $amt = count($pics);
    $arr = [];
    for ($i=0; $i <$amt ; $i++) { 
        $info = new GlobalSplFileInfo($pics[$i]);
        $x = $info->getFilename();
        
        array_push($arr,'/galleries/'.$x);
    }
    Log::info($arr);
    return view('gallery',['arr'=>[$arr]]);

   }
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

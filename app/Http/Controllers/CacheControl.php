<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Product;

class CacheControl extends Controller
{
    public function clear_cache(Request $r){


    	

    	Cache::flush();

    	return response()->json([
    	   'message' => 'Success'
    	]);

    }
}

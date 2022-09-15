<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Portfolio;
use App\Models\Services;

class IndexController extends Controller
{
    public function index(){

        $services = Services::where('status',1)->orderBy('id','DESC')->limit(6)->get();
        view('frontend.index',compact('services'));
    }
}

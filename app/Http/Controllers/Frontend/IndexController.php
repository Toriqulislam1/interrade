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

        $services = Services::where('status',1)->orderBy('id','DESC')->limit(8)->get();
        $categories = Category::orderBy('category_name','ASC')->get();
        view('frontend.index',compact('services','categories'));
    }



    public function ServicesDetails($id,$slug){
		$services = Services::findOrFail($id);


		$cat_id = $services->category_id;
	 	return view('frontend.services.service_details',compact('services'));

	}

     // Childcategory wise data
	public function ChildCatWiseServices($childcat_id,$slug){
		$services = Services::where('status',1)->where('childcategory_id',$childcat_id)->orderBy('id','DESC')->paginate(6);
		$categories = Category::orderBy('category_name','ASC')->get();

		$breadsubsubcat = ChildCategory::with(['category','subcategory'])->where('id',$childcat_id)->get();

		return view('frontend.services.service_details',compact('services','categories','breadsubsubcat'));

	}


}

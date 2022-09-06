<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class ContentController extends Controller
{
    public function AddContent(){
		$categories = Category::latest()->get();
		$subcategories = SubCategory::latest()->get();
		return view('admin.content.add_content',compact('categories','subcategories'));

	}

	public function StoreProduct(Request $request){

		$request->validate([
		  'file' => 'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
		]);
	
		if ($files = $request->file('file')) {
		  $destinationPath = 'upload/pdf'; // upload path
		  $digitalItem = date('YmdHis') . "." . $files->getClientOriginalExtension();
		  $files->move($destinationPath,$digitalItem);
		}

		$image = $request->file('breadcrumb');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/services/'.$name_gen);
    	$save_url = 'upload/services/'.$name_gen;


		$product_id = Product::insertGetId([
			'category_id' => $request->category_id,
			'subcategory_id' => $request->subcategory_id,
			'content_slide_title' => $request->content_slide_title,
			'content_title' => $request->content_title,


		]);
	}
}
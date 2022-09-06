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

	public function StoreContent(Request $request){

		$request->validate([
		  'file' => 'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
		]);
	
		

		$image = $request->file('breadcrumb');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/services/'.$name_gen);
    	$save_url = 'upload/services/'.$name_gen;

		


		$product_id = Product::insertGetId([
			'category_id' => $request->category_id,
			'subcategory_id' => $request->subcategory_id,
			'content_slide_title' => $request->content_slide_title,
			'content_title' => $request->content_title,
			'content_descrip' => $request->content_descrip,
			'long_descrip' => $request->long_descrip,
			'breadcrumb' => $save_url,
			'status' => 1,
      		'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Service Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-content')->with($notification);

	} ///end method

	public function ManageContent(){

		$services = Services::latest()->get();
		return view('admin.content.add_content',compact('services'));
	}

	

}
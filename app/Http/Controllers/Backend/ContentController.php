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
}
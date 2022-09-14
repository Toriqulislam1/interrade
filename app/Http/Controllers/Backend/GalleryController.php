<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon;
use Image;

class GalleryController extends Controller
{
    public function AddGallery(){
		
		$gallery = Gallery::latest()->get();
		return view('admin.gallery.add_gallery',compact('gallery'));

	} //end

    public function StoreGallery(Request $request){

		
		$image = $request->file('gallery');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/services/gallery/'.$name_gen);
    	$save_url = 'upload/services/gallery/'.$name_gen;
		

		Gallery::insert([
			'gallery' => $save_url,
			'status' => 1,
      		'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Gallery Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-gallery')->with($notification);

	} ///end method
	public function ManageGallery(){

		$gallery = Gallery::latest()->get();
		return view('admin.gallery.add_gallery',compact('gallery'));
	} //end

	public function EditGallery($id){

		
		$gallery = Gallery::findOrFail($id);
		return view('admin.gallery.gallery_edit',compact('gallery'));

	} //end

	public function GalleryUpdate(Request $request){

		$gallery_id = $request->id;

		

		if ($image = $request->file('gallery')) {
            $destinationPath = 'upload/services/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gallery'] = "$profileImage";
        }else{
            unset($input['gallery']);
        }

		Gallery::findOrFail($gallery_id)->update([
			
			'gallery' => $request->gallery,
			'status' => 1,
      		'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Gallery Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-gallery')->with($notification);

	} ///end method

	public function GalleryDelete($id){
		$gallery = Gallery::findOrFail($id);
		unlink($gallery->gallery);
		Gallery::findOrFail($id)->delete();

		

		$notification = array(
		   'message' => 'Gallery Deleted Successfully',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);

	}// end method 

	public function GalleryInactive($id){
		Gallery::findOrFail($id)->update(['status' => 0]);
		$notification = array(
		   'message' => 'Gallery Inactive',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);
	}
	public function GalleryActive($id){
		Gallery::findOrFail($id)->update(['status' => 1]);
		   $notification = array(
			  'message' => 'Gallery Active',
			  'alert-type' => 'success'
		  );
  
		  return redirect()->back()->with($notification);
		   
	   } //end


   


   
}

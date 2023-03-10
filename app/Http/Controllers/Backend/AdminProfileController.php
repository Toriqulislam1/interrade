<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Auth;


class AdminProfileController extends Controller
{
    public function AdminProfile(){
        $adminData = Admin::find(1);
        return view('admin.admin_profile',compact('adminData'));
    } //end
    public function AdminProfileEdit(){

		
		$editData = Admin::find(1);
		return view('admin.admin_profile_edit',compact('editData'));

	}//end

    public function AdminProfileStore(Request $request){

		
		$data = Admin::find(1);
		$data->name = $request->name;
		$data->email = $request->email;


		if ($request->file('profile_photo_path')) {
			$file = $request->file('profile_photo_path');
			@unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
			$filename = date('YmdHi').$file->getClientOriginalName();
			$file->move(public_path('upload/admin_images'),$filename);
			$data['admin_photos'] = $filename;
		}
		$data->save();

		$notification = array(
			'message' => 'Admin Profile Updated Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('admin.profile')->with($notification);

	} // end method 

	public function AdminChangePassword(){

		return view('admin.admin_password_change');

	}
	public function AdminUpdateChangePassword(Request $request){
		$validateData = $request->validate([
			'oldpassword' => 'required',
			'password' => 'required|confirmed',

		]);

		$hashPassword = Admin::find(1)->password;
		if (Hash::check($request->oldpassword,$hashPassword)) {
			$admin = Admin::find(1);
			$admin->password = Hash::make($request->password);
			$admin->save();
			Auth::logout();
			return redirect()->route('admin.logout');
		} else{
			return redirect()->back();
		}
	} //end method

}

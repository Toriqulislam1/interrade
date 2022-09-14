<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Portfolio;
use Carbon\Carbon;
use Image;


class PortfolioController extends Controller
{
	public function AddPortfolio(){
		
		$portfolios = Portfolio::latest()->get();
		return view('admin.portfolio.add_portfolio',compact('portfolios'));

	} //end

    public function StorePortfolio(Request $request){

		
		$image = $request->file('port_image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/portfolio/'.$name_gen);
    	$save_url = 'upload/portfolio/'.$name_gen;
		

		Portfolio::insert([
			'port_title' => $request->port_title,
			'port_subtitle' => $request->port_subtitle,
			'port_image' => $save_url,
			'status' => 1,
      		'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Portfolio Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-portfolio')->with($notification);

	} ///end method
	public function ManagePortfolio(){

		$portfolios = Portfolio::latest()->get();
		return view('admin.portfolio.add_portfolio',compact('portfolios'));
	} //end

	public function EditPortfolio($id){

		
		$portfolios = Portfolio::findOrFail($id);
		return view('admin.portfolio.portfolio_edit',compact('portfolios'));

	} //end

	public function PortfolioUpdate(Request $request){

		$portfolios_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('port_image')){
            
            unlink($old_img);
            $image = $request->file('port_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/portfolio/'.$name_gen);
            $save_url = 'upload/portfolio/'.$name_gen;
		}
			

		Portfolio::findOrFail($portfolios_id)->update([
			
			'port_title' => $request->port_title,
			'port_subtitle' => $request->port_subtitle,
			'port_image' =>  $save_url,
			'status' => 1,
			'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Portfolio Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-portfolio')->with($notification);

	} ///end method

	

	

	


	
}

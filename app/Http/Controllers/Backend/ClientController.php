<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function AddClient(){
		
		return view('admin.client.add_client');

	} //end
}

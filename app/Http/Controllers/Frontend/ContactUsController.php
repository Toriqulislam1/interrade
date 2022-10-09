<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function ContactUs(){
        return view('frontend.contact.contact_us');
    } //end

    public function AllClients(){
        return view('frontend.contact.all_clients');
    } //end

    public function AllPortfolios(){
        return view('frontend.contact.all_portfolios');
    } //end

    public function AllServices(){
        return view('frontend.contact.all_services');
    } //end

    public function AllBlog(){
        return view('frontend.blog.all_blog');
    } //end

    public function PrivacyView(){
        return view('frontend.privacy.privacy_view');
    } //end

    public function TermsView(){
        return view('frontend.privacy.terms_view');
    } //end



   

   
}

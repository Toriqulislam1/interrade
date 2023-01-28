            @php
            $setting = App\Models\setting::find(1);
            @endphp

<!--Start Header -->
<div class="container-fluid">
		<div class="row">
		 <div class="topnav">
		<ul>
			  <li style="letter-spacing:1px" > <img src="{{ asset('frontend/assets/images/bd.png')}}"></i><strong>&nbsp;{{ $setting->phone }}</strong>
			</li>
			<li style="float: right;letter-spacing:0.5px"><marquee><strong>Interread Import & Export service</strong></marquee></li>
		</ul>



		</div>
	</div>
</div>
<header class="nav-bg-w main-header navfix navbar menu-white">
         <div class="container-fluid m-pad">
            @php
            $setting = App\Models\setting::find(1);
            @endphp
				<div class="menu-header">
				   <div class="dsk-logo"><a class="nav-brand" href="/">
					  <img src="images/white-logo.png" alt="Logo" class="mega-white-logo"/>
					  <img src="{{ asset($setting->logo) }}" alt="Logo" class="mega-darks-logo"/>
					  </a>
				   </div>
				   <div class="custom-nav" role="navigation">
					  <ul class="nav-list">
						 <li class="sbmenu">
							<a href="{{ url('/')}}" class="menu-links">HOME</a>
							<div class="nx-dropdown">

						 </li>


		<!--   // Get Category Table Data -->
		@php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp


						@foreach($categories as $category)
						 {{--  <li class="sbmenu">
							<a href="{{ route('all-services')}}" class="menu-links">{{ $category->category_name}}</a>
							<div class="nx-dropdown">
							   <div class="sub-menu-section">
								  <div class="container">
								  	<div class="col-md-12">
									 <div class="sub-menu-center-block">


									 @php
							$subcategories = App\Models\subcategory::where('category_id',$category->id)->orderBy('subcategory_name','DESC')->get();
							@endphp

							@foreach($subcategories as $subcategory)

							<div class="sub-menu-column">

						<a href="{{ url('/services/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">
							<div class="menuheading">{{ $subcategory->subcategory_name}}</div> </a>



							<!--   // Get SubCategory Table Data -->
							@php
							$childcategories = App\Models\Childcategory::where('subcategory_id',$subcategory->id)->orderBy('childcategory_name','DESC')->get();
							@endphp

							@foreach($childcategories as $childcategory)


									<ul>



									  <li><a href="{{ url('/childcategory/services/'.$childcategory->id.'/'.$childcategory->childcategory_slug) }}">{{ $childcategory->childcategory_name}}</a></li>

									</ul>
									@endforeach
							</div>

							@endforeach

									</div>
									 </div>
								  </div>
							   </div>
							</div>
						 </li>  --}}

						 @endforeach

						 {{--  <li class="sbmenu">
							<a href="{{ route('digital-marketing')}}" class="menu-links">DIGITAL MARKETING</a>
							<div class="nx-dropdown">

						 </li>  --}}


						 {{--  <li class="sbmenu rpdropdown">
                        <a href="#" class="menu-links">Portfolio</a>
                        <div class="nx-dropdown menu-dorpdown">
                           <div class="sub-menu-section">
                              <div class="sub-menu-center-block">
                                 <div class="sub-menu-column ">
                                    <ul>
                                       <li><a href="{{ route('all-portfolios')}}">Software</a> </li>
                                       <li><a href="{{ route('all-creative')}}">Creatve</a> </li>

                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>  --}}

						 <li class="sbmenu">
							<a href="{{ route('all-clients')}}" class="menu-links">CLIENTS</a>
							<div class="nx-dropdown">

						 </li>

						 <li class="sbmenu">
							<a href="{{ route('about-us')}}" class="menu-links">ABOUT US</a>
							<div class="nx-dropdown">

						 </li>
						 <li class="sbmenu">
							<a href="{{ route('contact-us')}}" class="menu-links">CONTACT US</a>
							<div class="nx-dropdown">

						 </li>
						 <!--li class="sbmenu">
							<a href="{{ route('all-blog')}}" class="menu-links">BLOGS</a>
							<div class="nx-dropdown">

						 </li-->

						 <li><a href="get-quote.html" class="btn-br bg-btn5 btshad-b2 lnk" data-bs-toggle="modal" data-bs-target="#menu-popup">Request A Quote <span class="circle"></span></a> </li>
              </ul>
              <!-- mobile + desktop - sidebar menu- dark mode witch and button -->








          </div>
		  <div class="mobile-menu2">
					<ul class="mob-nav2">
						<li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1"  data-bs-toggle="modal" data-bs-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
						<li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
					</ul>
				</div>
        </div>

				<!--Mobile Menu-->
				<nav id="main-nav">
				   <ul class="first-nav">
					  <li>
					  <a href="{{ url('/')}}" class="menu-links">HOME</a>

					  </li>
					  <!--   // Get Category Table Data -->
		@php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp


						@foreach($categories as $category)
						 <li class="sbmenu">
							<a href="{{ route('all-services')}}" class="menu-links">{{ $category->category_name}}</a>
							<div class="nx-dropdown">
							   <div class="sub-menu-section">
								  <div class="container">
									 <div class="sub-menu-center-block">


									 @php
							$subcategories = App\Models\subcategory::where('category_id',$category->id)->orderBy('subcategory_name','DESC')->get();
							@endphp

							@foreach($subcategories as $subcategory)

							<div class="sub-menu-column">

						<a href="{{ url('/services/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">
							<div class="menuheading">{{ $subcategory->subcategory_name}}</div> </a>



							<!--   // Get SubCategory Table Data -->
							@php
							$childcategories = App\Models\Childcategory::where('subcategory_id',$subcategory->id)->orderBy('childcategory_name','DESC')->get();
							@endphp

							@foreach($childcategories as $childcategory)


									<ul>



									  <li><a href="{{ url('/childcategory/services/'.$childcategory->id.'/'.$childcategory->childcategory_slug) }}">{{ $childcategory->childcategory_name}}</a></li>

									</ul>
									@endforeach
							</div>

							@endforeach


									 </div>
								  </div>
							   </div>
							</div>
						 </li>

						 @endforeach

						 <li class="sbmenu">
							<a href="{{ route('digital-marketing')}}" class="menu-links">DIGITAL MARKETING</a>
							<div class="nx-dropdown">

						 </li>

						 <li class="sbmenu">
							<a href="{{ route('contact-us')}}" class="menu-links">CONTACT US</a>
							<div class="nx-dropdown">

						 </li>
						 <li class="sbmenu">
							<a href="{{ route('all-clients')}}" class="menu-links">CLIENTS</a>
							<div class="nx-dropdown">

						 </li>
						 <li class="sbmenu">
							<a href="{{ route('all-portfolios')}}" class="menu-links">PORTFOLIOS</a>
							<div class="nx-dropdown">

						 </li>
						 <li class="sbmenu">
							<a href="{{ route('about-us')}}" class="menu-links">ABOUT US</a>
							<div class="nx-dropdown">
						 </li>
					  </li>
				   </ul>
				   <ul class="bottom-nav">
					  <li class="prb">
						 <a href="tel:+8802223314131">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
							   <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
								  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
								  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
								  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
								  />
							</svg>
						 </a>
					  </li>
					  <li class="prb">
						 <a href="mailto:info@technovalbd.com">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							   <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
							   <path d="M0 0h24v24H0z" fill="none"/>
							</svg>
						 </a>
					  </li>

				   </ul>
				</nav>
			 </div>
		  </header>
		  <!--End Header -->
		  		<!--Mobile contact-->
<div class="popup-modal1">
<div class="modal" id="menu-popup">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<div class="common-heading">
<h4 class="mt0 mb0">Request A Quote </h4>
</div>
<button type="button" class="closes" data-bs-dismiss="modal">&times;</button></div>
<!-- Modal body -->
<div class="modal-body">
<div class="form-block fdgn2 mt10 mb10">
<form action="{{ route('contact-form')}}" method="post" name="feedback-form">
	@csrf
<div class="fieldsets row">
<div class="col-md-12"><input type="text" placeholder="Full Name" name="full_name"></div>
<div class="col-md-12"><input type="email" placeholder="Email Address" name="email_address"></div>
<div class="col-md-12"><input type="number" placeholder="Contact Number" name="mobile"></div>
<div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
<div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
</div>
<div class="fieldsets mt20 pb20">
<button type="submit" name="submit" class="lnk btn-main bg-btn" data-bs-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<!--Mobile contact-->

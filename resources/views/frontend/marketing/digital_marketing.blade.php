@extends('frontend.front_master')
@section('content')
@section('title')
Technoval BD
@endsection


 <!--Start Hero-->
 
 <section class="digitalagency20 glassmorphism">
         <div class="niwaxheroscroll">
            <img src="{{ asset('frontend/assets/images/shape/shape-a.png')}}" class="niwax nxhs1" alt="icon" data-rellax-speed="4">
            <img src="{{ asset('frontend/assets/images/shape/shape-b.png')}}" class="niwax nxhs2" alt="icon" data-rellax-speed="-3">
            <img src="{{ asset('frontend/assets/images/shape/shape-c.png')}}" class="niwax nxhs3" alt="icon" data-rellax-speed="1">
            <img src="{{ asset('frontend/assets/images/shape/shape-d.png')}}" class="niwax nxhs4" alt="icon" data-rellax-speed="-5">
            <img src="{{ asset('frontend/assets/images/shape/shape-e.png')}}" class="niwax nxhs5" alt="icon" data-rellax-speed="-2">
         </div>
         <div class="hero-main-rp container-fluid">
            <div class="row">
               <div class="col-lg-5">
                  <div class="hero-heading-sec">
                     <h2 class="wow fadeIn" data-wow-delay="0.3s">Award winning digital design agency based in India</h2>
                     <p class="wow fadeIn" data-wow-delay="0.6s">Website and App development solution for transforming and innovating businesses.</p>
                     <a href="case-study.html" class="btn-main bg-btn lnk wow fadeIn"  data-wow-delay="0.8s">View Case Studies <i class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>
                     <div class="awards-block-tt  wow fadeIn" data-wow-delay="1s"><img src="{{ asset('frontend/assets/images/hero/awards-logo.png')}}" alt="awards-logo" class="img-fluid"/></div>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">
                     <div class="video-intro-pp"><a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span class="triangle-play"></span></a></div>
                     <div class="title-hero-oth">
                        <p>We design digital solutions <span>for brands and companies</span></p>
                     </div>
                  </div>
                  <div class="hero-right-scmm">
                     <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                        <div class="owl-carousel service-card-prb">
                           <div class="service-slide" data-tilt data-tilt-max="12" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ asset('frontend/assets/images/service/vr.png')}}">
                                    </div>
                                    <div class="title-serv-c"><span>VR</span> Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide" data-tilt data-tilt-max="12" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ asset('frontend/assets/images/service/app-develop.png')}}">
                                    </div>
                                    <div class="title-serv-c"><span>Custom</span> App Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide" data-tilt data-tilt-max="12" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ asset('frontend/assets/images/service/startup.png')}}">
                                    </div>
                                    <div class="title-serv-c"><span>Startup</span> Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide" data-tilt data-tilt-max="12" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ asset('frontend/assets/images/service/car-rental.png')}}">
                                    </div>
                                    <div class="title-serv-c"><span>Car</span> Rental Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide" data-tilt data-tilt-max="12" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ asset('frontend/assets/images/service/marketing.png')}}">
                                    </div>
                                    <div class="title-serv-c"><span>Marketing</span> Solution</div>
                                 </div>
                              </a>
                           </div>
                           <div class="service-slide" data-tilt data-tilt-max="12" data-tilt-speed="1000">
                              <a href="#">
                                 <div class="service-card-hh">
                                    <div class="image-sr-mm">
                                       <img alt="custom-sport" src="{{ asset('frontend/assets/images/service/ewallet.png')}}">
                                    </div>
                                    <div class="title-serv-c"><span>e-Wallet</span> Solution</div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Hero-->

       <!--Start pricing-->
    <section class="pricing-block pad-tb">
		<div class="container">
		  <div class="row justify-content-center">
			<div class="col-lg-8">
			  <div class="common-heading ptag">
				<span>Our Pricing</span>
				<h2>Pricing Table</h2>
				<p class="mb30">Choose from one of our three packages, all of which are priced competitively. We offer comprehensive yet cost-effective options. Everyone will find enticing features in our Basic, Professional, and Premium packages.</p>
			  </div>
			</div>
		  </div>
		  <div class="row justify-content-center">
  
			<div class="col-lg-4 col-md-6 nxpb-1"> 
			  <div class="niwaxpricingbox shadow">
				<div class="pricingheader" data-background="images/icons/plan-1.svg">
				  <h2>Basic</h2>
				  <p>Great For Small Business</p>
				</div>
				<div class="pricingrate">
				  <div class="pricevalue">
					<h2><sup>$</sup> 50.00</h2>
				  </div>
				  <div class="priceoffer">
					<h2>10% <span>$60.00</span></h2>
				  </div>
				</div>
				<div class="pricingoffers">
				  <ul class="list-ul ul-check">
					<li>Customized Theme Based Design </li>
					<li>Home Page Slider</li>
					<li>Up-to 50 Products</li>
					<li>Content	Management System</li>
					<li>Shopping Cart Integration</li>
					<li>Payment	Module Integration</li>
					<li>Perfect Product Search</li>
					<li>Social	Media Integration</li>
					<li>Responsive Device Design</li>
					<li>Dedicated Designer &amp; Developer</li>
					<li>Unlimited Revisions</li>
					<li>100% Unique Design</li>
					<li>100% Satisfaction</li>
					<li>100% Unique Design</li>
					<li>100% Money Back</li>
				  </ul>
				</div>
				<div class="priceodernow">
				  <div class="priceoderbtn"><a href="#" class="niwax-btn3">Order Now</a></div>
				  <div class="priceaskwithus">
					<a href="#" class="livechatbtn d-flex gap10 v-center">
					  <i class="fas fa-comment"></i>
					  <div><span>Click here to</span> Live Chat </div>
					</a>
				  </div>
				</div>
				<div class="pricingfooter mt30">
				  <div class="pfdiv1"><a href="#">Call Us: +91 123456790</a></div>
				  <div class="pfdiv2"><a href="#">Need Support</a></div>
				</div>
			  </div>
			</div>
  
			<div class="col-lg-4 col-md-6 nxpb-2">
			  <div class="niwaxpricingbox shadow reco">
				<div class="pricingheader" data-background="images/icons/plan-2.svg">
				  <h2>Professional</h2>
				  <p>Great For Small Business</p>
				</div>
				<div class="pricingrate">
				  <div class="pricevalue">
					<h2><sup>$</sup> 150.00</h2>
				  </div>
				  <div class="priceoffer">
					<h2>20% <span>$170.00</span></h2>
				  </div>
				</div>
				<div class="pricingoffers">
				  <ul class="list-ul ul-check">
					<li>Customized Theme Based Design </li>
					<li>Home Page Slider</li>
					<li>Up-to 50 Products</li>
					<li>Content	Management System</li>
					<li>Shopping Cart Integration</li>
					<li>Payment	Module Integration</li>
					<li>Perfect Product Search</li>
					<li>Social	Media Integration</li>
					<li>Responsive Device Design</li>
					<li>Dedicated Designer &amp; Developer</li>
					<li>Unlimited Revisions</li>
					<li>100% Unique Design</li>
					<li>100% Satisfaction</li>
					<li>100% Unique Design</li>
					<li>100% Money Back</li>
				   </ul>
				</div>
				<div class="priceodernow">
				  <div class="priceoderbtn"><a href="#" class="niwax-btn2">Order Now</a></div>
				  <div class="priceaskwithus">
					<a href="#" class="livechatbtn d-flex gap10 v-center">
					  <i class="fas fa-comment"></i>
					  <div><span>Click here to</span> Live Chat </div>
					</a>
				  </div>
				</div>
				<div class="pricingfooter mt30">
				  <div class="pfdiv1"><a href="#">Call Us: +91 123456790</a></div>
				  <div class="pfdiv2"><a href="#">Need Support</a></div>
				</div>
			  </div>
			</div>
			
			<div class="col-lg-4 col-md-6 nxpb-3">
			  <div class="niwaxpricingbox shadow">
				<div class="pricingheader" data-background="images/icons/plan-3.svg">
				  <h2>Premium </h2>
				  <p>Great For Small Business</p>
				</div>
				<div class="pricingrate">
				  <div class="pricevalue">
					<h2><sup>$</sup> 150.00</h2>
				  </div>
				  <div class="priceoffer">
					<h2>40% <span>$280.00</span></h2>
				  </div>
				</div>
				<div class="pricingoffers">
				  <ul class="list-ul ul-check">
					<li>Customized Theme Based Design </li>
					<li>Home Page Slider</li>
					<li>Up-to 50 Products</li>
					<li>Content	Management System</li>
					<li>Shopping Cart Integration</li>
					<li>Payment	Module Integration</li>
					<li>Perfect Product Search</li>
					<li>Social	Media Integration</li>
					<li>Responsive Device Design</li>
					<li>Dedicated Designer &amp; Developer</li>
					<li>Unlimited Revisions</li>
					<li>100% Unique Design</li>
					<li>100% Satisfaction</li>
					<li>100% Unique Design</li>
					<li>100% Money Back</li>
				  </ul>
				</div>
				<div class="priceodernow">
				  <div class="priceoderbtn"><a href="#" class="niwax-btn3">Order Now</a></div>
				  <div class="priceaskwithus">
					<a href="#" class="livechatbtn d-flex gap10 v-center">
					  <i class="fas fa-comment"></i>
					  <div><span>Click here to</span> Live Chat </div>
					</a>
				  </div>
				</div>
				<div class="pricingfooter mt30">
				  <div class="pfdiv1"><a href="#">Call Us: +91 123456790</a></div>
				  <div class="pfdiv2"><a href="#">Need Support</a></div>
				</div>
			  </div>
			</div>
			
		  </div>
		</div>
	  </section>
	  <!--End pricing-->
      @endsection
@extends('frontend.front_master')
@section('content')
@section('title')
brothers-association
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<body>




{{--  <section class="hero-slider hero-style" >
	  <div id="particles-js">
         <div class="swiper-container">
            <!-- start swiper-wrapper -->
             <div class="swiper-wrapper">
                <!--slider 1 start -->
               <div class="swiper-slide">
                   <div class="slide-inner slide-bg-image" >
                      <div class="container">
                         <div data-swiper-parallax="300" class="slide-title">
                            <h2>Software Development</h2>
                         </div>
                         <div data-swiper-parallax="400" class="slide-text">
                           <p>Our employee best practice processes and development methodologies as a foundation for rapid building of cutting-edge technology solutions in a structured and methodical way.</p>
                         </div>
                         <div class="clearfix"></div>

                      </div>
                   </div>
                </div>
                   <!--slider 1 end -->
                  <!--slider 2 start -->
                <div class="swiper-slide">
                   <div class="slide-inner slide-bg-image" ">
                      <div class="container">
                         <div data-swiper-parallax="300" class="slide-title">
                            <h2>Digital Marketing</h2>
                         </div>
                         <div data-swiper-parallax="400" class="slide-text">
                           <p>The perfect resource for beginner-to-advanced digital marketers looking to learn new skills or hone existing ones</p>
                         </div>
                         <div class="clearfix"></div>

                      </div>
                   </div>
                </div>
                   <!--slider 2 end -->
				<!--slider 3 start -->
                <div class="swiper-slide">
                   <div class="slide-inner slide-bg-image">
                      <div class="container">
                         <div data-swiper-parallax="300" class="slide-title">
                            <h2>Website Design & Development</h2>
                         </div>
                         <div data-swiper-parallax="400" class="slide-text">
                           <p>Our web experiences are high-performing, feature-packed and digitally transformative, designed to be user-friendly, fully functional, very secure and able to scale as your enterprise grows. </p>
                         </div>
                         <div class="clearfix"></div>

                      </div>
                   </div>
                </div>
                   <!--slider 3 end -->

             </div>
             <!-- end swiper-wrapper -->
             <!-- swipper controls -->
             <div class="swiper-pagination"></div>
             <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>
              <!-- swipper controls -->
          </div>
		     </div>
      </section>  --}}



      	<!--Start Hero-->
	<section class="hero-section business-startup" id="home">
		<div class="text-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 v-center">
						<div class="header-heading">
							<h1 class="wow fadeInUp" data-wow-delay=".2s">We Build Scalable & Smart Solution</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat tempor eros.</p>
							<a href="#" class="btn-main bg-btn3 lnk wow fadeInUp" data-wow-delay=".6s">GET STARTED<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
						</div>
					</div>
					<div class="col-lg-6 v-center">
						<div class="hero-photo"><img src="{{ asset('frontend/assets/images/hero/1.jpeg') }}" alt="img"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Hero-->

      <!--End Hero Slider-->


		<!--End Hero-->

		@php
$clients = App\Models\Client::orderBy('id','desc')->get();
@endphp
	<div class="container">

		<div class="weworkfor pt20 pb20 dark-bg2">
			<div class="container">

				<div class="logo-weworkfor owl-carousel">
				@foreach($clients as $item)
					<div class="items"><img src="{{ asset($item->client_logo)}}" alt="clients" class="img100w"></div>
					@endforeach
				</div>

			</div>
		</div>

		</div>



	<!--Start Service-->
	<section class="dg-service2 pb120 pt0" id="services">
		<div class="container">
		<div class="row justify-content-center">
							<div class="col-lg-6">
								<div class="common-heading ptag">

									<h2>Services We Offer</h2>

								</div>
							</div>
						</div>
			<div class="row upset ">

			@php
		$services = App\Models\Services::orderBy('content_title','desc')->limit(8)->get();
		@endphp

			@foreach($services as $item)
				<div class="col-lg-3 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
					<div class="s-block up-hor pt20">
						<div class="nn-card-set">
						<a href="{{ url('services/details/'.$item->id.'/'.$item->content_title ) }}">
							<div class="card-icon"><img src="{{ asset($item->thamble) }}" alt="service" class="img-fluid" /></div>
							<h6>{{ $item->content_title}}</h6>

							Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
		<div class="row">
        <div class="col-lg-12 maga-btn mt60">
          <a href="{{route('all-services')}}" class="btn-outline">View More Services<i class="fas fa-chevron-right fa-icon"></i></a>
        </div>
      </div>
	</section>


	<!--End Service-->
	<!--Start gallery -->
<section class="dg-portfolio-section pb120 pt120">
<div class="container">
<div class="row justify-content-center ">
<div class="col-lg-8">
<div class="common-heading-2">

	<h2 class="mb0">Our Latest Creative Work</h2>
</div>
</div>
</div>
<div class="row">

@php
$gallery = App\Models\Gallery::orderBy('id','desc')->limit(12)->get();
@endphp


@foreach($gallery as $item)
<div class="col-lg-3 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".2s">
<div class="isotope_item h-scl-">
	<div class="item-image h-scl-base zoom">
		<a href="#"><img src="{{ asset($item->gallery) }}" alt="portfolio" class="img-fluid "/> </a>
	</div>

</div>
</div>
@endforeach





</div>
</div>
<div class="row">
        <div class="col-lg-12 maga-btn mt60">
          <a href="{{ route('all-creative')}}" class="btn-outline">View More Photos<i class="fas fa-chevron-right fa-icon"></i></a>
        </div>
      </div>
</section>
<!--End gallery-->
	<!--why choose-->
		<section class="why-choos-lg pad-tb deep-dark">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="common-heading text-l">
							<span style="color:black"><strong>Why Choose Us</strong></span>
							<h2 class="mb20">Why The Technoval <span class="text-second text-bold">Ranked Top</span> Among The Leading IT Companies</h2>

							<div class="itm-media-object mt40 tilt-3d">
								<div class="media">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('frontend/assets/images/icons/delivered.png')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>We Ensure Right time delivery </h4>

									</div>
								</div>
								<div class="media mt40">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('frontend/assets/images/icons/rating.png')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>Expart team members</h4>

									</div>
								</div>
								<div class="media mt40">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{ asset('frontend/assets/images/icons/insurance.png')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>We care your product & time</h4>

									</div>
								</div>
								<div class="media mt40">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{ asset('frontend/assets/images/icons/recruitment.png')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>We research for latest technology</h4>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image  wow fadeIn" data-wow-duration="2s"><img src="{{ asset('frontend/assets/images/about/choose-us.png')}}" alt="image" class="img-fluid"></div>
						<!--p class="text-center mt30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p-->

					</div>
				</div>
			</div>
		</section>
		<!--End why choose-->

		<!--About Us-->

	<section class="about-dg-busign pb120 pt120 bg-light-ylo upset" id="about">
	<div class="up-curvs"><svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#e9f5ff">
<path d="M1919.5,89.5H-0.5c0,0,0-90,0-90c114.9,4.8,228.6,17.9,343.6,24.6c118.6,7,237.4,11.9,356.1,14.7
c237.6,5.7,475.3,3.1,712.7-7.7c164.2-7.5,328.1-23.7,492.3-31c0.7,0,15.2-0.5,15.2-0.6C1919.5-0.5,1919.5,89.5,1919.5,89.5z"/>
</svg>
</div>
<div class="container">
<div class="row">
<div class="col-lg-6 v-center">
<div class="common-heading-2 text-l">
<span class="text-effect-1"><strong><h4>About Us</h4></strong></span>
<h2 class="mb20">Work Together For Success</h2>
<p>Technoval evolved from a local digital-first marketing company to offering an integrated mix of strategy, analytics, creativity, technology, media and experience to drive meaningful innovation in communication through multi-country presence. With one of the largest client portfolios, Tecnoval is a true integrated marketing company empowered by a world class technology team able to offer any solution for any brand across different media.</p>
</div>
<div class="common-heading-2 text-l">
<span class="text-effect-1"></span>
<h2 class="mb20">Company History</h2>
<p>The company was first established back in 2016 as a sole proprietorship under the name Cortex. In 2022 we changed our name to Technoval Limited when the company was incorporated and licensed as a private limited company.<br>
In 2016 we began our venture as just a digital marketing company. Since then we have evolved into a broad multi service provider offering an integrated mix of market development strategies,business analytics, software solutions with state-of-the-art technology through innovation via various media outlets to help drive growth to all businesses all through-out the country.<br>
Technoval Limited is a true marketing company supported by a world class team to help provide any and all kinds of digital business solutions to all companies in all sectors in Bangladesh.
</p>
</div>
</div>
<div class="col-lg-6 v-center">
<img src="{{ asset('frontend/assets/images/about/about-us.png')}}" alt="img" class="img-fluid">
</div>


</div>
</div>
<div class="bottom-curvs">
<svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#e9f5ff" >
<path d="M1919.5-0.5H-0.5c0,0,0,90,0,90c114.9-4.8,228.6-17.9,343.6-24.6c118.6-7,237.4-11.9,356.1-14.7
c237.6-5.7,475.3-3.1,712.7,7.7c164.2,7.5,328.1,23.7,492.3,31c0.7,0,15.2,0.5,15.2,0.6C1919.5,89.5,1919.5-0.5,1919.5-0.5z"/>
</svg>
</div>
</section>

<!--end About Us-->


<!--Start Portfolio-->
		<section class="portfolio-section pad-tb" id="work">
			<div class="container">
				<div class="row justify-content-center ">
					<div class="col-lg-8">
						<div class="common-heading">

							<h2 class="mb20">Our Portfolio</h2>
						</div>
					</div>
				</div>
				<div class="row">

@php
$portfolios = App\Models\Portfolio::orderBy('id','desc')->get();
@endphp

		@foreach($portfolios as $item)
					<div class="col-lg-3 col-sm-6 col mt40 wow fadeIn" data-wow-delay="0.2s">
						<div class="isotope_item up-hor">
							<div class="item-image">
								<a href="#"><img src="{{ asset($item->port_image)}}" alt="image" class="img-fluid" /> </a>
							</div>
							<div class="item-info-div shdo">
								<h6>{{ $item->port_title}}</h4>
								<p>{{ $item->port_subtitle}}</p>
							</div>
						</div>
					</div>
		@endforeach




				</div>
			</div>
		</section>
		<!--End Portfolio-->



		<!--Start work-category-->
		<section class="work-category pad-tb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading ptag">
							<span>We Have Worked Across Multiple Industries</span>
							<h2>Industries We Serve</h2>

						</div>
					</div>
				</div>
				<div class="row mt30">
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/house.svg')}}" alt="img"> <h6>Real estate</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/travel-case.svg')}}" alt="img"> <h6>Tour &amp; Travels</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/video-tutorials.svg')}}" alt="img"> <h6>Education</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/taxi.svg')}}" alt="img"> <h6>Transport</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/event.svg')}}" alt="img"> <h6>Event</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/smartphone.svg')}}" alt="img"> <h6>eCommerce</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/joystick.svg')}}" alt="img"> <h6>Game</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/healthcare.svg')}}" alt="img"> <h6>Healthcare</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/money-growth.svg')}}" alt="img"> <h6>Finance</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.9s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/baker.svg')}}" alt="img"> <h6>Restaurant</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/mobile-app.svg')}}" alt="img"> <h6>On-Demand</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/groceries.svg')}}" alt="img"> <h6>Grocery</h6> </div></div></div>
				</div>
			</section>

			<!--End  work-category-->

			  <!--Start Blog Grid-->
  <section class="blog-page pad-tb pt40">
    <div class="container">
      <div class="row">
	  <div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading ptag">

							<h2>Our latest News</h2>

						</div>
					</div>
				</div>
	  @php
$blogs = App\Models\Blog::orderBy('id','desc')->limit(4)->get();
@endphp

	  @foreach($blogs as $item)
        <div class="col-lg-3 col-sm-6 single-card-item">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="{{ route('view-blog',$item->id) }}"><img src="{{ asset($item->blog_photo)}}" alt="blog" class="img-fluid"/> </a>

            </div>
            <div class="item-info blog-info">
              <div class="entry-blog">

                <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</a>
                </span>
                <span><a href="#"><i class="far fa-eye"></i>{{ $item->views}}</a></span>
              </div>
              <h4><a href="{{ route('view-blog',$item->id) }}">{{ $item->blog_title}}</a></h4>
              <p>{!! Str::limit($item->blog_description, 50)  !!}</p>
            </div>
          </div>
        </div>

		@endforeach




      </div>
    </div>
	<div class="row">
        <div class="col-lg-12 maga-btn mt60">
          <a href="{{route('all-blog')}}" class="btn-outline">View More News<i class="fas fa-chevron-right fa-icon"></i></a>
        </div>
      </div>
  </section>
  <!--End Blog Grid-->
</body>

            @endsection

@extends('layout')

@section('content')

<style>

@media (max-width: 600px) {
    .banner_inner {
		background-image: url('../img/about.jpg');
	}
	.banner_content h1{
		color: #fff;
	}
	.banner_content h2{
		color: #fff;
	}
	.banner_content h5{
		color: #fff;
	}
	.banner_content h6{
		color: #fff;
	}
	.portfolio img{
		padding-top: 20px;
	}
}
</style>
	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h1 class="">Theresa Obamwonyi</h1>
							<h5 class=" " style="margin-bottom: 5px;">Software developer</h5>
							<h6 class=" " style="padding-bottom:50px;">Laravel | PHP | Javascript | VueJS </h6>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="/contact"><span>Hire Me</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/town.svg" alt="" width="100%">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-md-5" >
					<div class="about_img"  style="margin-left:20%">
						<img class="" src="img/about.jpg" width="100%"alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-md-6">
					<div class="main_title text-center">
						<h2>Get to know Me</h2>
						<p>
							I am Theresa Obamwonyi, Resa for short. I am an aspiring fullstack software developer, knowledgeable 
							in front-end languages such as HTML5, CSS, Javascript and backend languages such as PHP.
						</p>
						<p>
							I am proficient in the Laravel and VueJs.
							I am dedicated to growth, learning and teamwork. This is reflected in my unending quest to add
							more to my knowledge repository as well as GitHub.(Winks!)
							I am open to new opportunities to build world class technological solutions, 
							freelancing and brain jostling
							tech talk sessions. Hit me up!
						</p>
						<a class="primary_btn" href="#"><span>Here's a look at my CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================Portfolio Area =================-->
	<section class="about_area portfolio">
		<div class="container">
			<div class="text-center">
					<div class="main_title" style="padding-bottom: 50px;">
						<h2>My Portfolio</h2>
					</div>
				</div>
			<div class="row">
				<div class="col-md-4" >
					<div>
						<img class="" src="img/s1.png" width="100%"alt="">
					</div>
				</div>
				<div class="col-md-4" >
					<div>
						<img class="" src="img/s2.png" width="100%"alt="">
					</div>
				</div>
				<div class="col-md-4" >
					<div>
						<img class="" src="img/s3.png" width="100%"alt="">
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--================Portfolio Area =================-->

	<!--================Contact Area =================-->
    <section class="contact_area section_gap" style="background-color:white ">
        <div class="container">
        <div class="text-center">
					<div class="main_title">
						<h2>Contact Me</h2>
                        @if(Session::has('success'))
        <div class="alert alert-success text-center">{{Session::get('success')}}</div>
                 @endif
					</div>
				</div>
            <div class="row">
                <div class="col-lg-3 col-xs-12">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Lagos, Nigeria</h6>
                            <p>5, Glorious Estate, Badore, Ajah.</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">(+234)90-944-75906</a></h6>
                            <p>Monday to Friday 9am to 6pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">theresaobamwonyi@gmail.com</a></h6>
                            <p>Send in your messages, anytime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xs-12">
                    <form class="row contact_form" action="{{url('/postcontact')}}" method="post" id="contactForm" novalidate="novalidate">
                       {{csrf_field()}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary_btn">
                                <span>Send</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@endsection('content')  
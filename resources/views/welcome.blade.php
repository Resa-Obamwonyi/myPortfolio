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
							<h1 class=""><strong>Theresa Obamwonyi</strong></h1>
							<h5 class=" " style="margin-bottom: 5px;"><strong>Software developer</strong></h5>
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
	<section class="about_area section_gap" id="about">
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
						<a class="primary_btn"  target="_blank" href="https://drive.google.com/open?id=1hLeksNjVUEFjvxH17gKkJCgg3I6YJrPA"><span>Here's a look at my CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================Portfolio Area =================-->
	<section class="about_area" id="portfolio" style="background-color:white; padding-bottom: 50px; ">
		<div class="container">
			<div class="text-center">
					<div class="main_title" style="padding-bottom: 50px;">
						<h2>My Portfolio</h2>
						<h4>Click on Images to view</h4>
					</div>
				</div>
			<div class="row">
				<div class="col-md-4" >
					<div>
						<a href="http://immense-lake-93308.herokuapp.com/home" target="_blank" >
							<img class="" src="img/s1.png" width="100%"alt="">
						</a>
					</div>
				</div>
				<div class="col-md-4" >
					<div>
						<a href="http://immense-lake-93308.herokuapp.com/home" target="_blank" >
							<img class="" src="img/s2.png" width="100%"alt="">
						</a>
					</div>
				</div>
				<div class="col-md-4" >
					<div>
						<a href="http://immense-lake-93308.herokuapp.com/home" target="_blank" >
							<img class="" src="img/s3.png" width="100%"alt="">
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--================Portfolio Area =================-->


@endsection('content')  
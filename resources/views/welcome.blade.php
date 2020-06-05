@extends('layout')

@section('content')

<style>

@media (max-width: 600px) {
    .banner_inner {
		background-image: url('../img/i5.jpg');
		background-repeat: no-repeat;
        background-size: cover ;
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


.card {
  width: 100%;
  background-color:white;
  box-shadow: 0px 5px 20px #555;
}
  .card a {
   color: #333;
	 text-decoration:none;
  }
  

.card-image img:hover{
       
	   width: 100%;
	   filter:grayscale(0);
	  
  }

.card-image {

  height: 250px;
  
  position:relative;
  overflow:hidden;
}
  .card-image img {
    width:100%;
    
    position:absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    
    /*filter: grayscale(1);*/
  
    transition-property: filter width;
    transition-duration: .3s; 
  }
 


.card-body {
  text-align:center; 
  padding: 15px 20px; 
  box-sizing: border-box;
}

.card-date {
  font-family: 'Source Sans Pro', sans-serif;
}

.card-title, .card-exceprt {
   font-family: 'Playfair Display', serif;
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
							<h6 class=" " style="padding-bottom:50px;"><b>Laravel | PHP | SQL | Node JS</b> </h6>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="/contact"><span>Contact Me</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/online.svg" alt="" width="100%">
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
						<img class="" src="img/i5.jpg" width="100%"alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-md-6">
					<div class="main_title text-center">
						<h2>Get to know Me</h2>
						<p>
							I am <strong>Theresa Obamwonyi</strong>, (Resa). I am a software developer, knowledgeable 
							in front-end languages such as <strong>HTML5, CSS, Javascript</strong> and backend languages such as <strong>PHP and SQL</strong>.
						</p>
						<p>
							I am proficient in <b>Laravel and Node Js</b>.
							I am dedicated to growth, learning and teamwork. This is reflected in my unending quest to add
							more to my knowledge repository as well as GitHub.(Winks!)
							<b>I am open to new opportunities to build world class technological solutions, 
							freelancing and brain jostling
							tech talk sessions</b>. Hit me up!
						</p>
						<a class="primary_btn"  target="_blank" href="https://docs.google.com/document/d/1vgRM1du-PjRtf_5bqVxYmJLLOaEr747fAw744EBSe_4/edit?usp=sharing"><span>Here's a look at my CV</span></a>
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
				<div class="col-md-4" style="margin-top: 50px;">
				<div class="card">
					<a href="https://anns-pizzeria.netlify.app/" target="_blank">
					<div class="card-image">
						<img src="img/s4.png" alt="Orange" />
					</div>
					
					<div class="card-body">

						<div class="card-title">
						<h3>Ann's Pizzeria</h3>
						</div>
						
						<div class="card-excerpt">
						<p>Online Pizza Order and Delivery Store built from scratch with HTML,CSS and Node Js</p>
						</div>
						
					</div>
					</a>
					</div>
					</div>
					<div class="col-md-4" style="margin-top: 50px;">
					<div class="card">
						<a href="https://github.com/Resa-Obamwonyi/List-App" target="_blank">
						<div class="card-image">
							<img src="img/s5.png" alt="Orange" />
						</div>
						
						<div class="card-body">
		
							<div class="card-title">
							<h3>Shopping List App</h3>
							</div>
							
							<div class="card-excerpt">
							<p>A simple Shopping list Generator built with HTML, CSS, SQL and Node Js. Currently Available as a Github Repo. </p>
							</div>
							
						</div>
						</a>
					</div>
					</div>
					<div class="col-md-4" style="margin-top: 50px;">
					<div class="card">
						<a href="http://immense-lake-93308.herokuapp.com/login" target="_blank">
						<div class="card-image">
							<img src="img/s1.png" alt="Orange" />
						</div>
						
						<div class="card-body">
						
							<div class="card-title">
							<h3>E-Ink Blog</h3>
							</div>
							
							<div class="card-excerpt">
							<p>A Blog application built with Laravel, HTML, CSS and SQL. Users are able to Post, Like, Comment and Dislike Posts.</p>
							</div>
							
						</div>
						</a>
					</div>
					</div>

			</div>
		</div>
		

	</section>
	<!--================Portfolio Area =================-->
	<!--================Portfolio Area =================-->
	<section class="about_area" id="" style="background-color:white; padding-bottom: 50px; ">
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="margin-top: 50px;">
				<div class="card">
					<a href="https://resa-devcareer.netlify.app/" target="_blank">
					<div class="card-image">
						<img src="img/s3.png" alt="Orange" />
					</div>
					
					<div class="card-body">
				
						<div class="card-title">
						<h3>DreamMakers Website</h3>
						</div>
						
						<div class="card-excerpt">
						<p>A frontend only project built after a design provided as an assessment for The DevCareer Program.</p>
					</div>				
					</div>
					</a>
					</div>
					</div>
					<div class="col-md-4" style="margin-top: 50px;">
					<div class="card">
						<a href="" target="_blank">
						<div class="card-image">
							<img src="img/s2.png" alt="Orange" />
						</div>
						
						<div class="card-body">
						
							<div class="card-title">
							<h3>Resa Obamwonyi</h3>
							</div>
							
							<div class="card-excerpt">
							<p> A Laravel Portfolio Website built with A selected theme from Satner remodified with HTML, CSS and Bootstrap.</p>
							</div>
							
						</div>
						</a>
					</div>
	</div>		
	</section>
	<!--================Portfolio Area =================-->

@endsection('content')  
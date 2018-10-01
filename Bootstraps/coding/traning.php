
<!DOCTYPE html>
<html>
<head>

    <style>
	   .servicebox
	   {
	   	padding: 20px 25px;
	   	border-radius: 5px;
	   	text-align: right;
	   	overflow: hidden;
	   	z-index: 1;
	   	position: relative;
	   }
	   .servicebox:before
	   {
	   	content: "";
	   	width: 100%;
	   	height: 100%;
	   	border-radius: 5px;
	   	background: #242424;
	   	position: absolute;
	   	top: 0;
	   	left: -100%;
	   	z-index: -1;
	   	transition: all 0.5s ease 0s;
	   }
	   .servicebox:hover:before
	   {
	   	left: 0;
	   }
	   .servicebox:after
	   {
	   	content: "";
	   	width: 7px;
	   	height: 0;
	   	border-radius: 5px;
	   	background: #D24D57;
	   	position: absolute;
	   	top: 0;
	   	left: 0;
	   	transition: all 0.5s ease 0s;
	   }
	   .servicebox:hover:after
	   {
	   	height: 100%;
	   }
	   .servicebox .service-icon
	   {
	   	color: #414243;
	   	margin-bottom: 10px;
	   	transition: all 0.5s ease 0s;
	   }
	   .servicebox .service-icon i
	   {
	   	font-size: 30px;
	   }
	   .servicebox .title
	   {
	   	display: inline-block;
	   	font-size: 22px;
	   	font-weight: 700;
	   	text-transform: uppercase;
	   	margin-right: 10px;
	   }
	   .servicebox .description
	   {
	   	font-size: 15px;
	   	color: #777;
	   	line-height: 25px;
	   	transition: all 0.5s ease 0s;
	   }
	   .servicebox:hover .service-icon, .servicebox:hover .description
	   {
	   	color: white;
	   }


	</style>

</head>
<body>
<!--Header-->
<?php
include_once('header.php'); 
?>
<br><br>
<div class="section-header">
	<h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; background-color: rgba(59, 89, 152,1); height: 180px; line-height: 180px; color: #fff;"> Training</h1> 
	
</div>
<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="servicebox">
				<div class="service-icon">
					<h3 class="title">Web Design</h3>
					<i class="fa fa-globe"></i>					
				</div>
				<p class="description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>				
			</div>			
		</div>

		<div class="col-md-6">
			<div class="servicebox">
				<div class="service-icon">
					<h3 class="title">Web Development</h3>
					<i class="fa fa-rocket"></i>					
				</div>
				<p class="description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>				
			</div>			
		</div>
	</div>	



		<div class="row">
		<div class="col-md-6">
			<div class="servicebox">
				<div class="service-icon">
					<h3 class="title">SEO</h3>
					<i class="fa fa-heart"></i>					
				</div>
				<p class="description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>				
			</div>			
		</div>

		<div class="col-md-6">
			<div class="servicebox">
				<div class="service-icon">
					<h3 class="title">Web Design</h3>
					<i class="fa fa-apple"></i>					
				</div>
				<p class="description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>				
			</div>			
		</div>
	</div>	


		<div class="row">
		<div class="col-md-6">
			<div class="servicebox">
				<div class="service-icon">
					<h3 class="title">Search Engine Optimization</h3>
					<i class="fa fa-globe"></i>					
				</div>
				<p class="description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>				
			</div>			
		</div>

		<div class="col-md-6">
			<div class="servicebox">
				<div class="service-icon">
					<h3 class="title">Search Media Marketing</h3>
					<i class="fa fa-briefcase"></i>					
				</div>
				<p class="description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>				
			</div>			
		</div>
	</div>	


</div>
<br>
<!--Footer-->
<?php
include_once('footer.php'); 
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>


<style>
	.testimonial
	{
		border-left: 3px solid #000;
		padding: 90px 0 90px 275px;
		position: relative;
	}
	.testimonial:before, .testimonial:after
	{
		content: "";
		width: 320px;
		height: 55px;
		border-right: 3px solid #000;
		position: absolute;
		left: 0;
	}
	.testimonial:before
	{
		border-top: 3px solid #000;
		top: 0;
	}
	.testimonial:after
	{
		border-bottom: 3px solid #000;
		bottom: 0;
	}
	.testimonial .pic
	{
		width: 150px;
		height: 100px;
		position: absolute;
		top: 80px;
		left: 70px;
	}
	.testimonial .pic img
	{
		width: 100%;
		height: auto;
	}
	.testimonial .description
	{
		font-size: 16px;
		color: #000;
		line-height: 27px;
		position: relative;
	}

	.testimonial .testimonial-title
	{
		font-size: 22px;
		font-weight: 800;
		color: #000;
		text-transform: capitalize;
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
	<h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; background-color: rgba(59, 89, 152,1); height: 180px; line-height: 180px; color: #fff;"> Web Services</h1> 
	
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="owl-carousel">
                <br>
				<div class="testimonial">
					<div class="pic">
						<img src="img/web1.png">					
					</div>
					<div class="testimonial-content">
						<p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.							
						</p>
						<h3 class="testimonial-title">HTML
							
						</h3>						
					</div>					
				</div>
                <br>
				<div class="testimonial">
					<div class="pic">
						<img src="img/web2.png">					
					</div>
					<div class="testimonial-content">
						<p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.							
						</p>
						<h3 class="testimonial-title">PHP AND MYSQL</h3>						
					</div>					
				</div>
                <br>
				<div class="testimonial">
					<div class="pic">
						<img src="img/web3.png">					
					</div>
					<div class="testimonial-content">
						<p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.							
						</p>
						<h3 class="testimonial-title">RESPONSIVE WEB DESIGN</h3>						
					</div>					
				</div>
                <br>
				<div class="testimonial">
					<div class="pic">
						<img src="img/web4.png">					
					</div>
					<div class="testimonial-content">
						<p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.							
						</p>
						<h3 class="testimonial-title">E-COMMERCE SOLUTIONS</h3>						
					</div>					
				</div>
                <br>
				<div class="testimonial">
					<div class="pic">
						<img src="img/web5.png">					
					</div>
					<div class="testimonial-content">
						<p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.							
						</p>
						<h3 class="testimonial-title">WORDPRESS</h3>						
					</div>					
				</div>
                <br>
				<div class="testimonial">
					<div class="pic">
						<img src="img/web6.png">					
					</div>
					<div class="testimonial-content">
						<p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.							
						</p>
						<h3 class="testimonial-title">WEBSITE MAINTENANCE</h3>						
					</div>					
				</div>



			</div>
			
		</div>
		
	</div>
	
</div>

<!--**************************************-->
<br>
<br>
<!--Footer-->
<?php
include_once('footer.php'); 
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>

	<style>

    body
    {
    	margin: 0;
    	padding: 0;
    	font-family: 'Open Sans', sans-serif;
    	width: 100%;
    	height: 100vh;
    
    }
    .wrapper .col1
    {
        float: left;
        top: 50%;
        transform: translate(25%, 35%);
        width: 500px;

     

    }
    .wrapper .col1 h2
    {
        text-align: left;
        text-transform: none;
    }


    	.wrapper .col2
    	{ 
    		position: absolute;
    	    margin: 220px 0 0 0;
    		left: 50%;
    		transform: translate(-5%, -40%);
    		width: 600px;
    		padding: 40px;
    		box-sizing: border-box;
    		background: #fff;
    		box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    		border-radius: 15%;
            background-color: gray;
    	}

    	.wrapper h2
    	{
    		color: #000;
    		margin: 0;
    		padding: 0;
    		text-align: center;
    		font-size: 30px;
    		text-transform: uppercase;
    	}
    	.input-field
    	{
    		position: relative;
    		width: 100%;
    		margin-top: 50px;
    	}
    	.input-field input , .input-field textarea
    	{
    		width: 100%;
    		padding: 5px 0;
    		box-sizing: border-box;
    		background: transparent;
    		border: none;
    		outline: none;
    		border-bottom: 2px solid #000;
    		font-size: 16px;
    		color: #000;
    		font-weight: 700;
    		
    	}
    	.input-field label
    	{
    		position: absolute;
    		top: 0;
    		left: 0;
    		padding: 5px 0;
    		pointer-events: none;
    		font-size: 16px;
    		color: #666;
    		font-weight: 700;
    		text-transform: uppercase;
    		transition: 0.5s;
            color: white;
    	}
    	.input-field input:focus + label ,
    	.input-field textarea:focus + label ,
    	.input-field input:valid + label ,
    	.input-field textarea:valid + label
    	{
    		top: -25px;
    		font-size: 14px;
    		padding: 2px 5px;
    		background: #D24D57;
    		color: #fff;
    		border-radius: 4px;
    	}
    	.btn
        {
            margin-top: 20px;
            background: #D24D57;
            color: #fff;
            padding: 15px 30px;
            border: none;
            outline: none;
            border-radius: 30px;
            font-weight: 700;
            text-transform: uppercase;
            font-style: 16px;
            transition: 0.5s;
            float: right;
        }
    	.btn:hover
    	{
    		background: #000;
    	}


   /*     .jain-container .navbar-default
{
    position: absolute;
    top: 0;
    background-color: #fff;
    border: none;
}
.navbar-nav.nav li a
{
    color: #000;
    font-size: 18px;
}

.navbar-toggle .icon-bar
{
    position: relative;
    transition: all 500ms ease-in-out;
}

.navbar-toggle .icon-bar:nth-of-type(1)
{
    background-color: #000;
}
.navbar-toggle .icon-bar:nth-of-type(2)
{
    top: 1px;
}
.navbar-toggle .icon-bar:nth-of-type(3)
{
    top: 2px;
    background-color: #000;
}
.navbar-toggle.active .icon-bar:nth-of-type(1)
{
    top: 6px;
    transform: rotate(45deg);
}
.navbar-toggle.active .icon-bar:nth-of-type(2)
{
    background-color: transparent;
}
.navbar-toggle.active .icon-bar:nth-of-type(3)
{
    top: -6px;
    transform: rotate(-45deg);
}
@media only screen and (max-width: 768px)
{
    .navbar-collapse
    {
        position: absolute;
        top: 100%;
        right: 0%;
        clip-path: circle(0px at top right);
        background-color: rgba(255, 255, 255, 0.79);
        transition: all 500ms ease-in-out;
    }
    .collapse
    {
        clip-path: circle(150% at top right);
    }
    .navbar-nav.nav li a 
    {
        margin: 10px;
    }
}
*/

    
</style>

</head>
<body>

    
<?php
include_once('header.php'); 
?>
<br><br>

<div class="section-header">
    <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; background-color: rgba(59, 89, 152,1); height: 180px; line-height: 180px; color: #fff;">Contact Us</h1> 
    
</div>
<br>

<div class="wrapper">
    <div class="col1">
        <address>
            <h2>Address</h2>
           <p> MIG-111, Sector-A, Sonagiri,Bhopal</p>
            <h2>We are open</h2>
            <p> open hours: 9:30 a.m to 7:30 p.m   </p>
            <h2>Phone</h2>
            <p> ( 0755 ) - 4919797  , ( +91 ) 9171571542  </p>
            <h2>Email</h2>
            <p> info@asthasoftnetsecurity.com  </p>   
        </address>
    </div>

    <div class="col2">
	<h2>Get In Touch</h2>
	<form>
		<div class="input-field">
			<input type="text" name="" required="">
			<label>Name</label>			
		</div>
		<div class="input-field">
			<input type="email" name="" required="">
			<label>Email</label>			
		</div>
		<div class="input-field">
			<input type="tel" name="" required="">
			<label>Mobile</label>			
		</div>
		<div class="input-field">
			<textarea rows="=5" required=""></textarea>
			<label>Message</label>			
		</div>
		<input type="submit" name="" value="Send Message" class="btn">
	</form>
</div>
	
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Google Map
<div id="map-container" class="map-container z-depth-1-half" style="height: 400px;">
    
</div>




<script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
-->
<!-- Google Map settings
<script>
    //regular map
    function regular_map(){
        var var_location = new google.maps.Lating(40.725118, -73.997699);

        var var_mapoptions = {
            center : var_location, 
            zoom: 14
        };
        var var_map = new google.maps.Map(document.getElementById('map-container'), var_mapoptions);

        var var_market = new google.maps.Marker
        ({
            position:var_location,
            map: var_map,
            title: "India"
        });
    }

    //Initialize maps
    google.maps.event.addDomListener(window, 'load', regular_map);
</script>
-->
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include_once('footer.php'); 
?>
</body>
</html>
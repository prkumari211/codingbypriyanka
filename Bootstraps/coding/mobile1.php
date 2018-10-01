
<!DOCTYPE html>
<html>
<head>
	
	<style>
	.boxes
	{
		position: absolute;
		top: 75%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 400px;
		height: 400px;
		background: #000;
		box-sizing: border-box;
		box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
		border: 2px solid rgba(0, 0, 0, 0.5);
	}
	.boxes .content
	{
		position: absolute;
		top: 15px;
		left: 15px;
		right: 15px; 
		bottom: 15px;
		border: 2px solid #D24D57;
		padding: 30px;
		box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
		text-align: center;
	}
	.boxes .content img
	{
		font-size: 50px;

	}
	.boxes .content h1
	{
		color: #fff;
		font-size: 30px;
		margin: 0 0 10px;
		padding: 0;
	}

    .boxes svg, .boxes svg rect
    {
    	position: absolute;
    	top: 0;
    	left: 0;
    	width: 100%;
    	height: 100%;
    	fill: transparent;
    }
    .boxes svg rect
    {
    	stroke: #D24D57;
    	stroke-width: 4;
    	stroke-dasharray: 400;
    	animation: animate 3s linear infinite;
    }
    .para p
    {
    	position: absolute;
    	top: 110%;
    	margin: 0 40px;
    }

    .boxes1
	{
		position: absolute;
		top: 165%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 400px;
		height: 400px;
		background: #000;
		box-sizing: border-box;
		box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
		border: 2px solid rgba(0, 0, 0, 0.5);
	}
	.boxes1 .content
	{
		position: absolute;
		top: 15px;
		left: 15px;
		right: 15px; 
		bottom: 15px;
		border: 2px solid #D24D57;
		padding: 30px;
		box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
		text-align: center;
	}
	.boxes1 .content img
	{
		font-size: 50px;

	}
	.boxes1 .content h1
	{
		color: #fff;
		font-size: 30px;
		margin: 0 0 10px;
		padding: 0;
	}

    .boxes1 svg, .boxes1 svg rect
    {
    	position: absolute;
    	top: 0;
    	left: 0;
    	width: 100%;
    	height: 100%;
    	fill: transparent;
    }
    .boxes1 svg rect
    {
    	stroke: #D24D57;
    	stroke-width: 4;
    	stroke-dasharray: 400;
    	animation: animate 3s linear infinite;
    }
    .para1 p
    {
    	position: absolute;
    	top: 200%;
    	margin: 0 40px;
    }

    .boxes2
	{
		position: absolute;
		top: 255%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 400px;
		height: 400px;
		background: #000;
		box-sizing: border-box;
		box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
		border: 2px solid rgba(0, 0, 0, 0.5);
	}
	.boxes2 .content
	{
		position: absolute;
		top: 15px;
		left: 15px;
		right: 15px; 
		bottom: 15px;
		border: 2px solid #D24D57;
		padding: 30px;
		box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
		text-align: center;
	}
	.boxes2 .content img
	{
		font-size: 50px;

	}
	.boxes2 .content h1
	{
		color: #fff;
		font-size: 30px;
		margin: 0 0 10px;
		padding: 0;
	}

    .boxes2 svg, .boxes2 svg rect
    {
    	position: absolute;
    	top: 0;
    	left: 0;
    	width: 100%;
    	height: 100%;
    	fill: transparent;
    }
    .boxes2 svg rect
    {
    	stroke: #D24D57;
    	stroke-width: 4;
    	stroke-dasharray: 400;
    	animation: animate 3s linear infinite;
    }
    .para2 p
    {
    	position: absolute;
    	top: 292%;
    	margin: 0 40px;
    }
    @keyframes animate
    {
    	0%
    	{
    		stroke-dashoffset:800;
    	}
    	100%;
    	{
    		stroke-dashoffset:800;
    	}
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
	<h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; background-color: rgba(59, 89, 152,1); height: 180px; line-height: 180px; color: #fff;"> Mobile Application</h1> 
	
</div>


<div class="boxes">
	<svg><rect></rect></svg>
	<div class="content">
		<img src="img/android.png">
		<h1>Android</h1>		
	</div>	
</div>
<div class="para">
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.			
	</p>
</div>

<div class="boxes1">
	<svg><rect></rect></svg>
	<div class="content">
		<img src="img/ios.png">
		<h1>IOS</h1>		
	</div>	
</div>
<div class="para1">
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.			
	</p>
</div>

<div class="boxes2">
	<svg><rect></rect></svg>
	<div class="content">
		<img src="img/hyb1.png">
		<h1>HYBRID</h1>		
	</div>	
</div>
<div class="para2">
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.			
	</p>
</div>



<!--**************************************-->
<!--Footer-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
include_once('footer.php'); 
?>
</body>
</html>
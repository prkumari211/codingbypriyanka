
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--stackpath-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Font Awesome-->

</head>
<body>

<!--Header-->
<div class="jain-container">
	<nav class="navbar navbar-fixed-top">
		<div class="container-fluid" style="padding-left: 0; padding-right: 0;">
			<div class="container" style=" margin-top: 0em; padding-left: 0; padding-right: 0">				


					<div class="navbar-header">
          <a class="navbar-brand"> <img class="img-responsive" src="img/logo3.png" style="width: 146px; height: 50px;"> </a> 
						<button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" style="background-color: transparent; border: none;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>							
						</button>						
					</div>

					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php">Home</a></li>
			    	        
			    	    
                     <div class="dropdown">
                           <button class="dropbtn" onclick="myFunction()" style="line-height: 45px;">Services   </button> 
                            <div class="dropdown-content" id="myDropdown">
                               <a href="webservice.php">Web Services</a>
                               <a href="digital1.php">Digital Marketing</a>                               
                               <a href="graphic.php">Graphic Desinging</a>
                               <a href="mobile1.php">Mobile Application Development</a>
                            </div>
                      </div>




  <style>

.dropdown 
{
    float: left; 
}

.dropdown .dropbtn
{
    cursor: pointer;
    font-size: 18px;    
    border: none;
    outline: none;
    color: #000;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}
.dropbtn:hover
{
  background-color: #ecdede;
}
.dropdown:hover .dropbtn, .dropbtn:focus
 {
   /* background-color: 	#0000FF;*/
}

.dropdown-content 
{
    display: none;
    position: absolute;
    background-color: #000;
    color: #fff;
    min-width: 260px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a 
{
    float: none;
    color: black;
    padding: 12px 20px;
    text-decoration: none;
    display: block;
    text-align: left;
    color: #fff;
   
}

.dropdown:hover .dropdown-content 
{
    background-color: #000;
    color: #fff;
    display: block;
}

.show 
{
    display: block;
}
@media only screen and (max-width: 768px)
{
    .dropdown
  {
    position: absolute;

    /*right: 41%;  */
    background-color:yellow;
    transition: all 500ms ease-in-out;
    text-align: center;
    display: block;
    color: #fff;
  }
  .dropbtn
  {
    width: 100%;
    margin:10px;
    text-align: center;
  }
   .dropdown .dropbtn:hover
   {
    width: 100px;
    margin-left: 50px;
   }
  .dropdown-content a
  {
       width: 100%;
       margin-left: 7%;
       display: block;
       color: #fff;
  }
}

  </style>


  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle('show');
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById('myDropdown');
      if (myDropdown.classList.contains('show'))
       {
        myDropdown.classList.remove('show');
      }
  }
}
</script>
		

			    	        <li><a href="traning.php">Traning</a></li>
			    	        <li><a href="about.php">About</a></li>
			    	        <li><a href="contact.php">Contact</a></li>
						</ul>
						
					</div>
				</div>
			</div>
			
		</div>
		
	</nav>
	
</div>

</body>
</html>
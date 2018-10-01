<!DOCTYPE html>
<html lang="en">
<head>
    <title>Astha Softnet Security Pvt. Ltd.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" type="text/css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".box").on("click", "li", function(){
                var tabsId = $(this).attr("id");
                $(this).addClass("active").siblings().removeClass("active");
                $("#" + tabsId + "-content-box").addClass("active").siblings().removeClass("active");
            })
        })
    </script>
</head>
<body>
	<!--header-->
	<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data
    		toggle="collapse" data-target="#myNavbar">
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
    	   </button>
    	   <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php"><span>Home<span class="border"></span></span></a></li>
                <li><a href="about.php"><span>About Us<span class="border"></span></span></a></li>
                <li><a href="service.php"><span>Service<span class="border"></span></span></a></li>
                <li><a href="training.php"><span>Training<span class="border"></span></span></a></li>
                <li><a href="contact.php"><span>Contact<span class="border"></span></span></a></li>
			</ul>
		</div>
	</div>
</nav>
<!--End Header-->
<div class="carousel-inner" role="listbox">
  <div class="first">
    <img src="img/tran.png" alt="error" width="1349px" height="200px">
     <div class="carousel-caption">
        <h3 align="left">Training</h3>      
      </div>
  </div>
</div>
<br><br>
 <h2 class="text-size-50 text-center">Our Work</h2>
<div class="my_tabs">
     <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">SEO</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Web Design</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Web Application</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <img src="img/tra2.jpg">
        <img src="img/tra3.jpg">
        <img src="img/tra4.jpg">
        <img src="img/tra5.jpg">
        <br><br>
        <img src="img/tra2.jpg">
        <img src="img/tra3.jpg">
        <img src="img/tra4.jpg">
        <img src="img/tra5.jpg">
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
        <img src="img/tra2.jpg">
        <img src="img/tra5.jpg">
        <img src="img/tra4.jpg">
        <img src="img/tra3.jpg">
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
        <img src="img/tra4.jpg">
        <img src="img/tra3.jpg">
        <img src="img/tra2.jpg">
        <img src="img/tra5.jpg">
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">
        <img src="img/tra3.jpg">
        <img src="img/tra2.jpg">
        <img src="img/tra4.jpg">
        <img src="img/tra5.jpg">
    </div>
  </div>
    
</div>

</body>
</html>
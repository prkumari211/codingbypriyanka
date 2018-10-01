<!doctype html>  
<html lang="en">  
   <head>  
      <meta charset="utf-8">  
      <title>jQuery UI Tabs functionality</title>  
      <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
      <script>  
         $(function() {  
            $( "#tabs-1" ).tabs();  
         });  
      </script>  
      <style>  
         #tabs-1
            {
               width: 1000px;
               margin-left: 20%;
             font-size: 14px;
            }  
         .ui-widget-header
          {  

            background:lightpink;  
            border: 1px solid #b9cd6d;  
            color: lightyellow;  
            font-weight: bold;  
         }  
      </style>  
   </head>  
   <body>  
      <div id="tabs-1">  
         <ul>  
            <li><a href="#tabs-2">Poem</a></li>  
            <li><a href="#tabs-3">Joke</a></li>  
            <li><a href="#tabs-4">Quote</a></li>  
         </ul>  
         <div id="tabs-2">  
  <img src="img/3.png" width="300px" height="200px"> 
   <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px">
         </div>  
         <div id="tabs-3">  
  <img src="img/3.png" width="300px" height="200px"> 
   <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px"> 
         </div>  
         <div id="tabs-4">  
  <img src="img/3.png" width="300px" height="200px"> 
   <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px"> 
      <img src="img/3.png" width="300px" height="200px"> 
   <img src="img/3.png" width="300px" height="200px">
    <img src="img/3.png" width="300px" height="200px"> 
         </div>  
      </div>  
   </body>  
</html>  

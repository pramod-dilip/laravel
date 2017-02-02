<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
    <style>
     
		.navbar-header{
			text-align:center;
		}
		
    
		
    </style>
    <link rel="stylesheet" href="/css/myStyle.css">
    <script src="js/jquery-1.10.2.js"></script>
    
</head>

<body>


<div class="container-fluid"> 


<div class="row">
<div class="col-sm-1">&nbsp;</div>

<div class="col-sm-11 topHead">

<div class="row">
<div class="col-sm-10"></div>
<div class="col-sm-2">
 <div class="row">
 
 <div class="col-sm-4">
 <a href="#"><img src="image/Twitter-150x150.png" width="50%" ></a>
 </div>
 
 <div class="col-sm-4">
 <a href="#"><img src="image/facebook-150x150.png" width="50%" ></a>
 </div>
 
 <div class="col-sm-4">
 <a href="#"><img src="image/linkedin-in.png" width="50%" ></a>
 </div>
 
 </div>
 </div>
 
</div>

 <div class="row">
 
 <div class="col-sm-12"  style="height:55px">
 <div style="padding-left:12%">Mountain <span class="whiteFontColor">Cities</span> Network</div>
 </div>
 
 </div>
 
 <div class="row">
 <div class="col-sm-10">&nbsp;</div>
 <div class="col-sm-2 searchBox"><textarea>Search</textarea></div>
 </div>
 
 </div>
 
 </div>
 
  


<div class="logo"><img src="image/logo.jpg" width="70%" ></div>


<div class="mainMenu">
<ul class="menu">
<li><a href="/">About Us</a>

<ul class="subMenu">
<li><a href="objectives">Objectives</a></li>
<li><a href="missionVision">Vision & Mission</a></li>
<li><a href="#">Thematic Focus</a></li>
<li><a href="#">Advisory Board</a></li>
<li><a href="#">Member Cities</a></li>
<li><a href="#">Secretariat</a></li>
</ul>

</li>


<li><a href="#">Resources</a>

<ul class="subMenu">
<li><a href="articles">Research Articles</a></li>
<li><a href="reports">Reports</a></li>
<li><a href="video">AV Resources</a></li>
</ul>

</li>


<li style="width:200px"><a href="#" >Partnerships & Dialogue</a>

<ul class="subMenu"  style="width:200px">
<li style="width:200px"><a href="#">urbanFutures</a></li>
<li style="width:200px"><a href="#">Thematic Workshops</a></li>
<li style="width:200px"><a href="#">Capacity Building</a></li>
</ul>

</li>


<li style="width:160px"><a href="#">Mountain City Facts</a>

<ul class="subMenu">
<li style="width:160px"><a href="#">City Directory</a></li>

<li style="width:160px"><a href="initiatives">Key Initiatives</a>

<ul class="SubSubMenu">
<li><a href="#">National</a></li>
<li><a href="#">International</a></li>
</ul>

</li>
</ul>


</li>




<li><a href="#">Events</a></li>
<li><a href="#">Internships</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>


<script>
$(document).ready(function(e) {
	
/*	var leftm = 1200;
	function slider(){
    $('.imageHolder').css('margin-left','-'+leftm+'px');
	leftm = leftm+leftm;
	if(leftm==3600){
		leftm = 1200
	}
	}
	
		var func=setInterval(function(){
		
		slider();
		
	},1000);*/
	
	
});
</script>


<div class="row">
<div class="col-sm-1" style="padding:2% 0% 0% 2%"><img src="image/verticalPageHeading.jpg" width="75%"></div> 
<div class="col-sm-11">

<div class="imageSlider">
<img class="image1" src="image/Almora_Uttarakhand_India_2013.jpg" width="100%">
<img class="image1" src="image/shimla.jpg" width="100%">
<!--<img class="image1" src="image/1390393909Copy.jpg" width="100%">-->
<img class="image1" src="image/Srinagar_flood.jpg" width="100%">
<img class="image1" src="image/boat.jpg" width="100%">
<img class="image1" src="image/darjeeling.jpg" width="100%">
<img class="image1" src="image/Almora_Uttarakhand_India_2013.jpg" width="100%">

</div>

</div>

</div>

<div class="horizontalSpace">&nbsp;</div>



    @yield('pageContent')
<br><br>

<div class="row footer">

<div class="col-sm-2">
<img src="image/logo.jpg" width="80%" style="padding-top:4%">
</div>
<div class="col-sm-7">&nbsp;</div>
<div class="col-sm-3">
<div class="row">
 <div class="col-sm-4">
 <a href="#"><img src="image/Twitter-150x150.png" width="50%" ></a>
 </div>
 
 <div class="col-sm-4">
 <a href="#"><img src="image/facebook-150x150.png" width="50%" ></a>
 </div>
 
 <div class="col-sm-4">
 <a href="#"><img src="image/linkedin-in.png" width="70%" ></a>
 </div>
 
 <div class="col-sm-12 whiteFontColor" style="text-align:right; padding-right:10%">
 Copyright @Centre for Urban Green Spaces
 </div>

</div>
</div>

</div>

</div>
  


</body>
</html>
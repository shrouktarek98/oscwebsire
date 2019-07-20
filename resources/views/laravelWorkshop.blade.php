@include('Components.Navbar')
<div id="laravel-Workshop-banner" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#laravel-Workshop-banner" data-slide-to="0" class="active"></li>
    <li data-target="#laravel-Workshop-banner" data-slide-to="1"></li>
    <li data-target="#laravel-Workshop-banner" data-slide-to="2"></li>
    <li data-target="#laravel-Workshop-banner" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('/images/blenderAndLaravelWorkshop/laravelDark.jpeg')}}" alt="Laravel" id="laravelLogo">
    </div>
    <div class="carousel-item">
      <img src="{{asset('/images/blenderAndLaravelWorkshop/giphy.gif')}}" alt="yourName" id="giphy">
    </div>
    <div class="carousel-item">
      <img src="{{asset('/images/blenderAndLaravelWorkshop/watchList.gif')}}" alt="watchList" id="wList">
    </div>
     <div class="carousel-item">
      <img src="{{asset('/images/blenderAndLaravelWorkshop/gallary.gif')}}" alt="gallary" id="gallary">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#laravel-Workshop-banner" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#laravel-Workshop-banner" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
        <h1 id="header-lWorkshop">Laravel Workshop</h1>
        <!--<div class="Container" id="content">-->
         <div  id="about">
        <h2>About the Workshop</h2>
        <p>Join and enjoy our hands-on project-based workshop. The scope of the workshop is well beyond Laravel; it is also about beautiful code, teamwork, git and other cool stuff.</p>
         </div>
        <div  id="loveCode">
         <img src="{{asset('/images/blenderAndLaravelWorkshop/beautifulCode.png')}}" alt="phpFramework" id="phpFramework">
            <h2>Love beautiful code? We do too.</h2>
        <p>The world wide web is the present and the future. The whole world is heading towards the cloud and online services everyday; and if you want to be successful in the rapid world of software development then you definitely need to learn how to create beautiful web applications.</p>
            <br>
            <hr>
         </div>
    
        <div id="framework">
        <h2>Laravel PHP Framework</h2>
        <div class="row">
        <div class="col-sm-4">
        <img src="{{asset('/images/blenderAndLaravelWorkshop/laravel-wrapper.gif')}}" alt="phpFramework" id="phpFramework"></div>
        <div class="col-sm-8">
        <p class="parag">Awesome and experienced web developers found a repeating pattern in the process of creating web applications. They know very well that a real programmer should not repeat his code over and over again. And so they created a group of libraries and tools that contain code they used across their websites; they called it Laravel.</p>
         </div>
        </div>
            <hr>
            </div>
        
        <div  id="design">
        <h2>MVC Design Pattern</h2>
        <div class="row">
        <div class="col-sm-4">
         <img src="{{asset('/images/blenderAndLaravelWorkshop/mvc.gif')}}" alt="phpFramework" id="mvc-img"></div>
        <div class="col-sm-8">
        <p class="parag">These developers knew very well how to write code that is clean, beautiful and -most importantly- decoupled. They used a group of really beautiful design patterns, most notably: the MVC design pattern to decouple logic, data access and presentation layers.</p>
         </div>
        </div>
            <hr>
            </div>
        
        <div  id="wellDoc">
        <h2>Open Source! and Very Well-Documented</h2>
        <p>We are the Open Source Community after all right? It is free as in free speech, the code is very well-written and commented, and the documentation is terrific!</p>
            <br>
            <hr>
         </div>
       <!-- </div>-->
       @extends('Components.BottomFooter') 
       @extends('Components.Footer')     
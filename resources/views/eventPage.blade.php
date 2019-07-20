@include('Components.Navbar')

<!--WELCOME DIV BEGINS HERE-->
<div class="eventPage">
<div id="welcomeDiv" class="clearfix">
  <img src="Images/LinuxAndEvents/eventBackground.png" id="welcomeImg" class="col-md-12 col-sm-12 co-xs-12" 
  style="padding-left: 0px; padding-right: 0px;">
  <div class="centered">
  <h1 id="welcomeTxt">Welcome to OSC's Events Corner</h1>
  </div>
  <div class="centered" id="scroller">
  
  <a href="#section1"><img src="Images/LinuxAndEvents/eventScroller.png" id ="eventScroller" class ="im"></a> 
  </div>
  </div>
  <!--WELCOME DIV ENDS HERE-->
    <!--EVENT'S DESCRIPTION BEGINS HERE-->
  <div id="section1">
         <div id="eventDescription" >
  
         <div class="events_left" >
  
         <div class="left_imag">
           <div  class="left_line" >
           <img src="Images/LinuxAndEvents/copyright.png"  class="eventImgFloatLeft" alt=""/>
          </div>
  </div>
          <div class ="words_left">
          <h4>  Ubuntu Release Party (URP)</h4>
           <p>
           It's a one day event that takes place twice a year since 
          we hold it to celebrate the release of a new version of Ubuntu 
          based distributions of Linux OS, those releases happen in April and October 
          of every year. In this event we tell FCIS students about the open source 
          concept’s most famous application "Linux" in general, and the new distributions 
          specifically, we display laptops with various distros 
          installed to give students the chance to try them and see the 
          difference between them first hand, as well as offer technical 
          support if they want them installed on their laptops.
          </p>
          </div>
          </div>
  
         
      <div class="events_right" >
   <div class ="words_right">
      <h4>
      Workshops
      </h4>
      <p>
      An event in which we provide 3 workshops 
          Linux,Blender and Laravel The workshops’ instructors are students 
          with knowledge vast enough to put the applicants on the right path.
          The workshops are completely free, they start at level zero and build up 
          until participants have enough information to follow their own path. 
          We also follow up with them through our public groups, and facebook fan page.
      </p>
      </div>
      <div class="right_img">
      <div  class="  right_line"> <img src="Images/LinuxAndEvents/copyright.png" class="  eventImgFloatRight" alt=""/></div>
  </div>
     
      </div>
      <div class="events_left" >
  
  <div class="left_imag">
    <div  class="left_line" >
    <img src="Images/LinuxAndEvents/copyright.png"  class="  eventImgFloatLeft" alt=""/>
   </div>
  </div>
   <div class ="words_left">
   <h4> Recruitment</h4>
    <p>
  An event in which we open our gate for the students to join OSC and 
  learn various skills. We explain the structure of OSC (as on the inside 
  we are 4 families containing 12 committees), and then our Human Resources 
  place the applicants where they fit best, once in you can work everywhere 
  and learn from everybody.
   </p>
   </div>
   </div>
  
         
   <div class="events_right" >
   <div class ="words_right">
      <h4>
      Sala5ana
      </h4>
      <p>
         
      It's a one day event where we invite our fellow students 
      to work with us as if they were OSC members, each committee 
      displays their work and lets people join in, this way people 
      learn and have fun as the day is also themed; we have games and 
      activities related to each committee, participants play to earn 
      Mohsens (The OSC currency) and at the end of the day the one with 
      the most number of Mohsens gets a present. The purpose of this day 
      is that instead of telling them, we show them what we do, how we do it, 
      and what it means to be an OSCian.
      </p>
      </div>
      <div class="right_img">
      <div  class="  right_line"> <img src="Images/LinuxAndEvents/copyright.png" class="  eventImgFloatRight" alt=""/></div>
  </div>
      </div>  
  </div>
  <!--EVENT'S DESCRIPTION ENDS HERE-->
  
  <!--GALLERY DIV BEGINS HERE-->
  
  <!--   horizontal line ---->
  <div class="flourish">
    <img  class="horizomtalImage"src="Images/LinuxAndEvents/eventSep_.png" alt="" />
  </div>
  <!-- ---------------------->
  <div class="container">
  
  <div class="col-md-12">
  <div class="row ">
      <div class="gal">
      <img class="galleryImages"  src="Images/LinuxAndEvents/4.jpg"  alt="">
      <img class="galleryImages"src="Images/LinuxAndEvents/1.JPG" alt="">
      <img class="galleryImages"src="Images/LinuxAndEvents/9.jpg"alt=""> 
      <img class="galleryImages"src="Images/LinuxAndEvents/15.jpg"  alt="">
      <img class="galleryImages"src="Images/LinuxAndEvents/26_cropped.jpg" alt="">
      <img class="galleryImages"src="Images/LinuxAndEvents/19_cropped.jpg"  alt="">
      </div>
      
  </div>
  </div>
  
  
  </div>
</div>
<!--WGALLERY DIV ENDS HERE-->
    @extends('Components.BottomFooter') 
    @extends('Components.Footer')   

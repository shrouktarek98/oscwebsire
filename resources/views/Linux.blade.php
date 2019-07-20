@include('Components.Navbar')






    <div style="background-image: url(../images/LinuxAndEvents/linuxBackground.png); background-size: 100%;  background: rgba(0.1);">
        <div >
            <div class="row">
                <div class="col-md-1">
                </div>

                <div class="col-md-4">
                    <img src="{{url('images/LinuxAndEvents/igloo2.png ')}}" width="350px" hight="350px;">
                </div>
                <div class="col-md-5" style="text-align: center; padding: 150px 0;">
                    <div class="BaseWelcome" >Welcome To Linux Igloo</div>
                </div>
            </div>
        </div>

        
        <div class="baseCenter" >
            <div class="container">
                <div class="row">
                    <h1 class="baseQues">What goes on in the Linux Igloo</h1>
                    <div class="col-9 basePara"> 
                        Have you ever heard the famous saying 'Windows Linux' ? Well, hear it  or 
                        not the Linux moderators committee is here because of this saying to show students their there is a
                        whole world beyond Windows called the next our committee in open source knowledge presented in
                        Linux which is our main concern our committee b spreading knowledge to so it provides provides 
                        Linux workshops to students and to our group also we are keen to learn and learn so beside our
                        job in spreading knowledge everyday we are learning new Linux stuff
                    </div>
                </div>
            </div>
        </div>



        
        <div  class="container" style="padding: 30px">
            <div class="row">

                <div class="col-md-5">
                    <div class="row">
                        <img src="{{url('images/LinuxAndEvents/linuxWorkshopIcon.png ')}}"   style="padding-left: 130px ;height: 200px; width: 20; margin-bottom: 100px; ">                                  
                    </div>
                    
                    <div class="row baseTextCenter" style="margin-bottom: 20px">
                        Setup Ubuntu Now!!
                        <button class="basebtn btn btn-primary" style="margin-left: 150px">Download Guide</button>
                    </div>
                    
                </div>

                <div class="col-md-1">
                </div>

                <div class="col-md-6">
                    <div class="baseTextCenter">
                        Have you heard about our Linux workshop?
                        <button class="basebtn btn btn-primary" >
                            Find out more
                        </button>
                    </div>
                    
                    
                    <div class="row" style="padding-left: 180px; padding-top:20px;">                    
                        <img src="{{url('images/LinuxAndEvents/linuxPenguinColored.png ')}}"   style="height: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>


    @extends('Components.BottomFooter') 
    @extends('Components.Footer')     
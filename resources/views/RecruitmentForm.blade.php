@include('Components.Navbar')
<div class="recuritmentForm">
    <div class="container-fluid">
        <div class="row images">
            <div class="col"><img src="{{ asset('images/LinuxAndEvents/15.JPG') }}"></div>
            <div class="col"><img src="{{ asset('images/LinuxAndEvents/9.JPG') }}"></div>
            <div class="col"><img src="{{ asset('images/LinuxAndEvents/33.JPG') }}"></div>
        </div>
    </div>
    <div class="container">
        <h3>OSC'20 Recruitment Form</h3>
        <div class="form ">
            <form>
                <div class="row ">
                    <div class="col-sm-7">
                        <label>First Name</label>
                        <br>
                        <input class="first-name" type="text" placeholder="">
                    </div>
                    <div class="col-sm-5">
                        <label>Last Name</label>
                        <br>
                        <input class="last-name" type="text" placeholder="">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-7">
                        <label>Faculty</label>
                        <br>
                        <input class="faculty" type="text" placeholder="">
                    </div>
                    <div class="col-sm-5">
                        <label>Year</label>
                        <br>
                        <select class="year">
                            <option value="first">first</option>
                            <option value="secound">secound</option>
                            <option value="third">third</option>
                            <option value="fourth">fourth</option>
                        </select>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-5">
                        <div>
                            <label>First Committee</label>
                            <br>
                            <select class="first-committe">
                                <option value="Web">Web</option>
                                <option value="Project">Project</option>
                                <option value="CCC">CCC</option>
                                <option value="Game">Game</option>
                            </select>
                        </div>
                        <div>
                            <label>Second Committee</label>
                            <br>
                            <select class="second-committe">
                                <option value="Game">Game</option>
                                <option value="Project">Project</option>
                                <option value="CCC">CCC</option>
                                <option value="Web">Web</option>
                            </select>
                        </div>
                        <div>
                            <label>E-mail</label>
                            <br>
                            <input type="email" class="email">
                        </div>
                    </div>
                    <div class="col-sm-7 batrik">
                        <img  src="{{ asset('images/LinuxAndEvents/linuxPenguinColored.png') }}">
                    </div>
                    
                </div>
                <div class="row ">
                    <div class="col-sm-7">
                        <label>Interview Day</label>
                        <br>
                        <select class="day">
                            <option value="Starday">Starday</option>
                            <option value="sunday">sunday</option>
                            <option value="monday">monday</option>
                            <option value="tuesday">tuesday</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <label>Interview Time</label>
                        <br>
                        <select class="time">
                            <option value="10:00-11:30">10:00-11:30</option>
                            <option value="11:30-01:00">11:30-01:00</option>
                            <option value="01:00-02:30">01:00-02:30</option>
                            <option value="02:30-04:00">02:30-04:00</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 submit">
                        <button type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@extends('Components.BottomFooter') 
@extends('Components.Footer') 
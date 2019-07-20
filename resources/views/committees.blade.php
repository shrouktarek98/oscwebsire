@include('Components.Navbar')
<div class="committesPage">
        
        <div class="web-comm">
            <div class="container">
                <div class="web-cont">
                    <h4>What goes on in the web Committee?</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
                </div>
            </div>
        </div>
        <!-- ======================================================================= -->
        <div class="workshop">   
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="imgs">
                            <img src="{{ asset('images/commities/cssIcon_.png') }}" alt="">
                            <img src="{{ asset('images/commities/htmlIcon_.png') }}" alt="">
                            <img src="{{ asset('images/commities/phpIcon_.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="work">
                            <h3>Have you hear about our web workshop?</h3>
                            <button class="work-bnt btn">Find out more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======================================================================= -->
        <div class="container-fluid slider">
            <div id="slider" class="ui-card-slider">
                <div class="slide">
                    <img src="{{ asset('images/homePage/OSChomepagepart.png') }}">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/homePage/OSChomepagepart.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('images/homePage/OSChomepagepart.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('images/homePage/OSChomepagepart.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('images/homePage/OSChomepagepart.png') }}" />
                </div>
                <div class="slide">
                    <img src="{{ asset('images/homePage/OSChomepagepart.png') }}" />
                </div>
            </div> 
        </div>
</div>
@extends('Components.BottomFooter') 
@extends('Components.Footer')  
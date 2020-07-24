
@extends('layouts.app')

@section('content')
    
 <section class="main_content_area">
     <div class="container">
        <div class="row">
            <div class="plate_section">

                <div class="col-md-3">
                  <div class="single_plate row">
                    <span class="col-md-3 color1">
                        <img src="{{ asset('images/icon.png')}}" alt="image icon">
                    </span>
                    <div class="col-md-9">
                        <h2>100</h2>
                        <p>Total Donor</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="single_plate row">
                    <span class="col-md-3 color2">
                        <img src="{{ asset('images/icon.png')}}" alt="image icon">
                    </span>
                    <div class="col-md-9">
                        <h2>50</h2>
                        <p>Blood Request</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="single_plate row">
                    <span class="col-md-3 color3">
                        <img src="{{ asset('images/icon.png')}}" alt="image icon">
                    </span>
                    <div class="col-md-9">
                        <h2>40</h2>
                        <p>Accept Request</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="single_plate row">
                    <span class="col-md-3 color4">
                        <img src="{{ asset('images/icon.png')}}" alt="image icon">
                    </span>
                    <div class="col-md-9">
                        <h2>30</h2>
                        <p>Bag blood in stock</p>
                    </div>
                  </div>
                </div>

            </div> <!-- .plate_section end -->
        </div> <!-- .row end -->


         <div class="row">
            <div class="main_content">
                <div class="col-sm-3">
                    <div class="left_sidebar">
                        <div class="left_single_sidebar">
                            <div class="call_us">
                                <p>You can call us</p>
                                <h3>01794352889</h3>
                            </div>
                        </div>
                        <div class="left_single_sidebar">
                            <a href="#">
                                <img src="{{ asset('images/ads.gif') }}" alt="gif image" width="100%">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom: 15px">
                                <img src="{{ asset('images/banner.jpg') }}" alt="banner image" width="100%">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <h2 class="title">Welcome to your Our Hemoglobin website.</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="right_sidebar">
                        <div class="right_single_sidebar">
                            <div class="fb-page" data-href="https://www.facebook.com/Webmvwit-110336600620125/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Webmvwit-110336600620125/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Webmvwit-110336600620125/">Webmvwit</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div> <!-- .main_content end -->
         </div> <!-- .row end -->

     </div> <!-- .container end -->
 </section> <!-- .main_content_area end -->
    
@endsection

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
                <div class="col-sm-9">
                    <div class="content">        

                        <div class="row">
                            <div class="col-sm-12">

                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active">
                                         <img src="{{ asset('images/banner.jpg') }}" alt="banner image" width="100%" height="275px">
                                      </div>

                                      <div class="item">
                                         <img src="{{ asset('images/banner1.jpeg') }}" alt="banner image" width="100%" height="275px">
                                      </div>
                                    
                                      <div class="item">
                                         <img src="{{ asset('images/banner3.jpeg') }}" alt="banner image" width="100%" height="275px">
                                      </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                </div>


                                
                            </div>
                        </div>

                        <div class="user_card">
                            <div class="user_card_header">
                                <h4 class="user_card_title">About Us</h4>
                            </div>
                            <div class="user_card_body">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                           </div>
                        </div>


                        <div class="user_card">
                            <div class="user_card_header">
                                <h4 class="user_card_title">Photo Gellery</h4>
                            </div>
                            <div class="user_card_body">
                                <div class="row">
                                    <div class="col-md-3" style="margin-bottom: 15px;">
                                        <img src="{{ asset('images/gellery/gellery1.jpg') }}" alt="gellery photo" width="100%" height="130px">
                                    </div>
                                    <div class="col-md-3"  style="margin-bottom: 15px;">
                                        <img src="{{ asset('images/gellery/gellery2.jpg') }}" alt="gellery photo" width="100%" height="130px">
                                    </div>
                                    <div class="col-md-3" style="margin-bottom: 15px;">
                                        <img src="{{ asset('images/gellery/gellery3.jpg') }}" alt="gellery photo" width="100%" height="130px">
                                    </div>
                                    <div class="col-md-3" style="margin-bottom: 15px;">
                                        <img src="{{ asset('images/gellery/gellery2.jpg') }}" alt="gellery photo" width="100%" height="130px">
                                    </div>
                                    <div class="col-md-3" style="margin-bottom: 15px;">
                                        <img src="{{ asset('images/gellery/gellery1.jpg') }}" alt="gellery photo"  width="100%" height="130px">
                                    </div>
                                    <div class="col-md-3" style="margin-bottom: 15px;">
                                        <img src="{{ asset('images/gellery/gellery3.jpg') }}" alt="gellery photo" width="100%" height="130px">
                                    </div>
                                    <div class="col-md-3" style="margin-bottom: 15px;">
                                        <img src="{{ asset('images/gellery/gellery2.jpg') }}" alt="gellery photo" width="100%" height="130px">
                                    </div>
                                    <div class="col-md-3" style="margin-bottom: 15px;">
                                        <img src="{{ asset('images/gellery/gellery1.jpg') }}" alt="gellery photo" width="100%" height="130px">
                                    </div>
                                    <div class="col-md-3" style="margin-bottom: 15px;">
                                        <img src="{{ asset('images/gellery/gellery3.jpg') }}" alt="gellery photo" width="100%" height="130px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="user_card">
                            <div class="user_card_header">
                                <h4 class="user_card_title">Latest Blog</h4>
                            </div>
                            <div class="user_card_body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single_blog">
                                            <img src="{{ asset('images/gellery/gellery3.jpg') }}" alt="blog image">
                                            <h2>There are many variations of passagesBlog Title</h2>
                                            <span>Author: Jon Donga | Date: 12/12/2020</span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <a href="" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single_blog">
                                            <img src="{{ asset('images/gellery/gellery3.jpg') }}" alt="blog image">
                                            <h2>There are many variations of passagesBlog Title</h2>
                                            <span>Author: Jon Donga | Date: 12/12/2020</span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <a href="" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single_blog">
                                            <img src="{{ asset('images/gellery/gellery3.jpg') }}" alt="blog image">
                                            <h2>There are many variations of passagesBlog Title</h2>
                                            <span>Author: Jon Donga | Date: 12/12/2020</span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            <a href="" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>  

                        <div class="user_card">
                            <div class="user_card_header">
                                <h4 class="user_card_title">Latest Review</h4>
                            </div>
                            <div class="user_card_body">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        @foreach($reviews->chunk(3) as $review)
                                      <div class="item {{ $loop->first ? 'active' : '' }}">
                                         <div class="row">
                                            @foreach($review as $item)
                                             <div class="col-md-4">
                                                 <div class="review">
                                                     <img src="{{ asset('images/user/'.$item->avatar) }}" alt="gellery photo">
                                                     <h2>{{ $item->username }}</h2>
                                                     <p>{{ $item->review }}</p>
                                                 </div>
                                             </div>
                                             @endforeach
                                         </div>
                                      </div>
                                      @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>      
                            
                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="user_card">
                        <div class="user_card_header">
                            <h4 class="user_card_title">Noties Board</h4>
                        </div>
                        <div class="user_card_body">
                            <ul>
                                <li><a href="">This is noties Board</a></li>
                                <li><a href="">This is noties Board</a></li>
                                <li><a href="">This is noties Board</a></li>
                                <li><a href="">This is noties Board</a></li>
                                <li><a href="">This is noties Board</a></li>
                            </ul>
                        </div>
                    </div>        

                    <div class="user_card">
                        <div class="user_card_header">
                            <h4 class="user_card_title">Our Facebook Page</h4>
                        </div>
                        <div class="user_card_body">
                            <div class="right_sidebar">
                                <div class="right_single_sidebar">
                                    <div class="fb-page" data-href="https://www.facebook.com/Webmvwit-110336600620125/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Webmvwit-110336600620125/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Webmvwit-110336600620125/">Webmvwit</a></blockquote></div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div> <!-- .main_content end -->
         </div> <!-- .row end -->

     </div> <!-- .container end -->
 </section> <!-- .main_content_area end -->
    
@endsection
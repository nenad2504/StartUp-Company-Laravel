@extends('layouts.frontend')

@section('content')
    <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Blog</h2>
                    <p>Read the news</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog Main Area =================-->
        <section class="blog_main_area p_100">
            <div class="container">
                <div class="row">
                @foreach($posts as $post)
                    <div class="col-lg-9">
                        <div class="blog_main_inner">
                            <div class="blog_main_item">
                                <div class="blog_img">
                                    <img class="img-fluid" src="{{asset($post->image)}}" alt="">
                                    <div class="blog_date">
                                        <h4>{{\Carbon\Carbon::parse($post->created_at)->format('d')}}</h4>
                                        <h5>{{\Carbon\Carbon::parse($post->created_at)->format('M, Y')}}</h5>
                                    </div>
                                </div>
                                <div class="blog_text">
                                    <a href="#"><h4>{{ $post->title }}</h4></a>
                                    <div class="blog_author">
                                        <a href="#">{{ $post->username }}</a>
                                        <a href="#">category</a>
                                    </div>
                                    <p>{{ $post->content }} </p>
                                    <a class="more_btn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach  
                    
                    <div class="col-lg-3">
                        <div class="blog_right_sidebar">
                            <aside class="r_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </aside>
                            <aside class="r_widget categories_widget">
                                <div class="r_w_title">
                                    <h3>Categories</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Vestibulum maximus</a></li>
                                    <li><a href="#">Nisi eu lobortis pharetra</a></li>
                                    <li><a href="#">Orci quam accumsan</a></li>
                                    <li><a href="#">Auguen pharetra massa</a></li>
                                    <li><a href="#">Tellus ut nulla</a></li>
                                    <li><a href="#"> Etiam egestas viverra </a></li>
                                </ul>
                            </aside>
                            <aside class="r_widget insta_widget">
                                <div class="r_w_title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="{{asset('app-assets/img/instagram/right-instagram/r-in-1.jpg')}}" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="{{asset('app-assets/img/instagram/right-instagram/r-in-2.jpg')}}" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="{{asset('app-assets/img/instagram/right-instagram/r-in-3.jpg')}}" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="{{asset('app-assets/img/instagram/right-instagram/r-in-4.jpg')}}" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="{{asset('app-assets/img/instagram/right-instagram/r-in-5.jpg')}}" alt="">
                                    </a></li>
                                    <li><a href="https://www.instagram.com/?hl=en">
                                        <img class="img-fluid" src="{{asset('app-assets/img/instagram/right-instagram/r-in-6.jpg')}}" alt="">
                                    </a></li>
                                </ul>
                            </aside>
                            <aside class="r_widget tag_widget">
                                <div class="r_w_title">
                                    <h3>Tags</h3>
                                </div>
                                <ul>
                                    <li><a href="#">branding</a></li>
                                    <li><a href="#">identity</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">inspiration</a></li>
                                    <li><a href="#">web design</a></li>
                                    <li><a href="#">video</a></li>
                                    <li><a href="#">photography</a></li>
                                </ul>
                            </aside>
                            <aside class="r_widget quote_widget">
                                <div class="r_w_title">
                                    <h3>Quote</h3>
                                </div>
                                <img src="{{asset('app-assets/img/icon/quote-icon.png')}}" alt="">
                                <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volut pat. Donec fermen tum convallis.</p>
                            </aside>
                            <aside class="r_widget add_widget">
                                <div class="r_w_title">
                                    <h3>Add</h3>
                                </div>
                                <img class="img-fluid" src="{{asset('app-assets/img/add.jpg')}}" alt="">
                            </aside>
                        </div>
                    </div>
                </div>
                
                     {{ $posts->links() }}
            </div>
        </section>
        <!--================End Blog Main Area =================-->
        
@endsection
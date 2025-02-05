@extends('layputs.frontend')

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
                    <div class="col-lg-9">
                        <div class="single_blog_inner">
                            <div class="s_blog_main">
                                <div class="blog_img">
                                    <img class="img-fluid" src="{{asset('app-assets/img/blog/blog-1.jpg')}}" alt="">
                                    <div class="blog_date">
                                        <h4>29</h4>
                                        <h5>October, 2017</h5>
                                    </div>
                                </div>
                                <div class="blog_text">
                                    <a href="#"><h4>Let us introduce you the best apps</h4></a>
                                    <div class="blog_author">
                                        <a href="#">By Lore Papp-Dinea</a>
                                        <a href="#">Design</a>
                                    </div>
                                    <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio ves-tibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu. Aliquam elit nibh, finibus eget mauris non, pretium vehicula ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean metus metus, porttitor ac bibendum sit amet, mattis non erat. Duis libero eros, vehicula sit amet velit id, mattis venenatis massa.</p>
                                    <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque laoreet vel risus et luctus. Fusce eleifend purus vel eros cursus imperdiet. Aliquam lacinia dolor sollicitudin pretium interdum. Nam velit dolor, eleifend eget felis ac, finibus accumsan dui. Fusce quis magna urna. </p>
                                </div>
                            </div>
                            <div class="s_blog_social">
                                <h3>Share</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="blog_author">
                                <div class="media">
                                    <div class="d-flex">
                                        <img class="rounded-circle" src="{{asset('app-assets/img/blog/blog-author.png')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Michael Smith, <span>Author</span></h4>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus doloructus. Fusce eleifend purus vel eros </p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_comment">
                                <h3>Comments (2)</h3>
                                <div class="media">
                                    <img src="{{asset('app-assets/img/comment/comment-1.png')}}" alt="">
                                    <div class="d-flex">
                                        <h4>Sophia Willams</h4>
                                        <h5>Oct 29, 2017</h5>
                                    </div>
                                    <div class="media-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec ele mentum id, suscipit id nulla. Nulla sit amet luctus doloructus. Fusce eleifend purus vel eros</p>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="{{asset('app-assets/img/comment/comment-2.png')}}" alt="">
                                    <div class="d-flex">
                                        <h4>Gabriel Smith</h4>
                                        <h5>Oct 29, 2017</h5>
                                    </div>
                                    <div class="media-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec ele mentum id, suscipit id nulla. Nulla sit amet luctus doloructus. Fusce eleifend purus vel eros</p>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_comment_form">
                                <h3>Leave a comment</h3>
                                <form class="row contact_us_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
            </div>
        </section>
        <!--================End Blog Main Area =================-->
@endsection
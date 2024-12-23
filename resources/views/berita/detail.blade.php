@extends('layouts.app')

@section('title', $detail->judul)
@section('og_title', $detail->judul)
@section('og_description', Str::limit(strip_tags($detail->deskripsi), 150))
@section('og_image', url('/storage/'.$detail->gambar))
@section('og_url', url()->current())

@section('content')

<section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{ '/storage/'.$detail->gambar }}" alt="{{ $detail->judul }}">
                </div>
                <div class="blog_details">
                   <h2>{{ $detail->judul }}
                   </h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="fa fa-user"></i> by : admin</a></li>
                   </ul>
                   {!! $detail->deskripsi !!}
                </div>
             </div>
             <div class="comment-form">
                <h4>Leave a Reply</h4>
                <form class="form-contact comment_form" action="#" id="commentForm">
                   <div class="row">
                      <div class="col-12">
                         <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                               placeholder="Write Comment"></textarea>
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                         </div>
                      </div>
                      <div class="col-12">
                         <div class="form-group">
                            <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                         </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                   </div>
                </form>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget search_widget">
                   <form action="#">
                      <div class="form-group">
                         <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder='Search Keyword'
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                            <div class="input-group-append">
                               <button class="btns" type="button"><i class="ti-search"></i></button>
                            </div>
                         </div>
                      </div>
                      <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                         type="submit">Search</button>
                   </form>
                </aside>
                <aside class="single_sidebar_widget post_category_widget">
                   <h4 class="widget_title">Category</h4>
                   <ul class="list cat-list">
                      <li>
                         <a href="#" class="d-flex">
                            <p>Resaurant food</p>
                            <p>(37)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Travel news</p>
                            <p>(10)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Modern technology</p>
                            <p>(03)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Product</p>
                            <p>(11)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Inspiration</p>
                            <p>(21)</p>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="d-flex">
                            <p>Health Care</p>
                            <p>(21)</p>
                         </a>
                      </li>
                   </ul>
                </aside>
                <aside class="single_sidebar_widget popular_post_widget">
                   <h3 class="widget_title">Recent Post</h3>
                   @foreach ($artikelSide as $item)
                    <div class="media post_item">
                        <img src="{{ '/storage/'.$item->gambar }}" width="80" height="80" alt="post">
                        <div class="media-body">
                            <a href="{{ '/detail/'.$item->slug }}">
                                <h3>{{ $item->judul }}</h3>
                            </a>
                            <p>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>
                        </div>
                    </div>
                   @endforeach

                </aside>
                <aside class="single_sidebar_widget tag_cloud_widget">
                   <h4 class="widget_title">Tag Clouds</h4>
                   <ul class="list">
                      <li>
                         <a href="#">project</a>
                      </li>
                      <li>
                         <a href="#">love</a>
                      </li>
                      <li>
                         <a href="#">technology</a>
                      </li>
                      <li>
                         <a href="#">travel</a>
                      </li>
                      <li>
                         <a href="#">restaurant</a>
                      </li>
                      <li>
                         <a href="#">life style</a>
                      </li>
                      <li>
                         <a href="#">design</a>
                      </li>
                      <li>
                         <a href="#">illustration</a>
                      </li>
                   </ul>
                </aside>
                <aside class="single_sidebar_widget instagram_feeds">
                   <h4 class="widget_title">Instagram Feeds</h4>
                   <ul class="instagram_row flex-wrap">
                      <li>
                         <a href="#">
                            <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                         </a>
                      </li>
                      <li>
                         <a href="#">
                            <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                         </a>
                      </li>
                   </ul>
                </aside>
                <aside class="single_sidebar_widget newsletter_widget">
                   <h4 class="widget_title">Newsletter</h4>
                   <form action="#">
                      <div class="form-group">
                         <input type="email" class="form-control" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                      </div>
                      <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                         type="submit">Subscribe</button>
                   </form>
                </aside>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection
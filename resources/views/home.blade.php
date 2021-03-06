@extends('layouts.master')
@section('title' , 'shopping site')
@section('content')
  <section class="home-section home-fade home-full-height" id="home">
    <div class="hero-slider">
      <ul class="slides">
        <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider1.jpg&quot;);">
          <div class="titan-caption">
            <div class="caption-content">
              <div class="font-alt mb-30 titan-title-size-1">This is Titan</div>
              <div class="font-alt mb-30 titan-title-size-4"> Summer 2017</div>
              <div class="font-alt mb-40 titan-title-size-1">Your online fashion destination</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
            </div>
          </div>
        </li>
        <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider2.jpg&quot;);">
          <div class="titan-caption">
            <div class="caption-content">
              <div class="font-alt mb-30 titan-title-size-1"> This is Titan</div>
              <div class="font-alt mb-40 titan-title-size-4">Exclusive products</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <div class="main">
    <section class="module-small">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Latest in clothing</h2>
          </div>
        </div>
        <div class="row multi-columns-row">
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="{{asset('assets/images/shop/pic.jpg')}}" alt="Accessories Pack"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
              </div>
              <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>??9.00
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="{{asset('assets/images/shop/pic3.jpg')}}" alt="Men???s Casual Pack"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
              </div>
              <h4 class="shop-item-title font-alt"><a href="#">Men???s Casual Pack</a></h4>??12.00
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="{{asset('assets/images/shop/pic4.jpg')}}" alt="Men???s Garb"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
              </div>
              <h4 class="shop-item-title font-alt"><a href="#">Men???s Garb</a></h4>??6.00
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="{{asset('assets/images/shop/pic1.jpg')}}" alt="Cold Garb"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
              </div>
              <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>??14.00
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="{{asset('assets/images/shop/pic4.jpg')}}" alt="Accessories Pack"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
              </div>
              <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>??9.00
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="{{asset('assets/images/shop/pic1.jpg')}}" alt="Men???s Casual Pack"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
              </div>
              <h4 class="shop-item-title font-alt"><a href="#">Men???s Casual Pack</a></h4>??12.00
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="{{asset('assets/images/shop/pic3.jpg')}}" alt="Men???s Garb"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
              </div>
              <h4 class="shop-item-title font-alt"><a href="#">Men???s Garb</a></h4>??6.00
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
              <div class="shop-item-image"><img src="{{asset('assets/images/shop/pic.jpg')}}" alt="Cold Garb"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
              </div>
              <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>??14.00
            </div>
          </div>
        </div>
        <div class="row mt-30">
          <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="#">See all products</a></div>
        </div>
      </div>
    </section>
    <section class="module module-video bg-dark-30" data-background="" style="background-image:url(&quot;assets/images/shop/hero.png&quot;);">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt mb-0">Be inspired. Get ahead of trends.</h2>
          </div>
        </div>
      </div>
      <!-- <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div> -->
    </section>
    <section class="module">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Exclusive products</h2>
            <div class="module-subtitle font-serif">The languages only differ in their grammar, their pronunciation and their most common words.</div>
          </div>
        </div>
        <div class="row">
          <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="ex-product"><a href="#"><img src="{{asset('assets/images/shop/product1.jpg')}}" alt="Leather belt"/></a>
                  <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>??12.00
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="ex-product"><a href="#"><img src="{{asset('assets/images/shop/product2.jpg')}}" alt="Derby shoes"/></a>
                  <h4 class="shop-item-title font-alt"><a href="#">Derby shoes</a></h4>??54.00
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="ex-product"><a href="#"><img src="{{asset('assets/images/shop/product3.jpg')}}" alt="Leather belt"/></a>
                  <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>??19.00
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="ex-product"><a href="#"><img src="{{asset('assets/images/shop/product4.jpg')}}" alt="Leather belt"/></a>
                  <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>??14.00
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="ex-product"><a href="#"><img src="{{asset('assets/images/shop/product5.jpg')}}" alt="Chelsea boots"/></a>
                  <h4 class="shop-item-title font-alt"><a href="#">Chelsea boots</a></h4>??44.00
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="ex-product"><a href="#"><img src="{{asset('assets/images/shop/product2.jpg')}}" alt="Leather belt"/></a>
                  <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>??19.00
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="divider-w">
    <section class="module" id="news">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Our News</h2>
          </div>
        </div>
        <div class="row multi-columns-row post-columns wo-border">
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="post mb-40">
              <div class="post-header font-alt">
                <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
              </div>
              <div class="post-entry">
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
              </div>
              <div class="post-more"><a class="more-link" href="#">Read more</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="post mb-40">
              <div class="post-header font-alt">
                <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
              </div>
              <div class="post-entry">
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
              </div>
              <div class="post-more"><a class="more-link" href="#">Read more</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="post mb-40">
              <div class="post-header font-alt">
                <h2 class="post-title"><a href="#">New lookbook</a></h2>
              </div>
              <div class="post-entry">
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
              </div>
              <div class="post-more"><a class="more-link" href="#">Read more</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="post mb-40">
              <div class="post-header font-alt">
                <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
              </div>
              <div class="post-entry">
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
              </div>
              <div class="post-more"><a class="more-link" href="#">Read more</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="post mb-40">
              <div class="post-header font-alt">
                <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
              </div>
              <div class="post-entry">
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
              </div>
              <div class="post-more"><a class="more-link" href="#">Read more</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="post mb-40">
              <div class="post-header font-alt">
                <h2 class="post-title"><a href="#">New lookbook</a></h2>
              </div>
              <div class="post-entry">
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
              </div>
              <div class="post-more"><a class="more-link" href="#">Read more</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="divider-w">
    <section class="module-small">
      <div class="container">
        <div class="row client">
          <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="client-logo"><img src="{{asset('assets/images/s1.jpg')}}" alt="Client Logo"/></div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="client-logo"><img src="{{asset('assets/images/s2.jpg')}}" alt="Client Logo"/></div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="client-logo"><img src="{{asset('assets/images/s3.jpg')}}" alt="Client Logo"/></div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="client-logo"><img src="{{asset('assets/images/s4.png')}}" alt="Client Logo"/></div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="client-logo"><img src="{{asset('assets/images/s5.png')}}" alt="Client Logo"/></div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="client-logo"><img src="{{asset('assets/images/s6.png')}}" alt="Client Logo"/></div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="client-logo"><img src="{{asset('assets/images/s7.png')}}" alt="Client Logo"/></div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="client-logo"><img src="{{asset('assets/images/s8.png')}}" alt="Client Logo"/></div>
              </div>
            </div>
            <div class="owl-item">
              <div class="col-sm-12">
                <div class="client-logo"><img src="{{asset('assets/images/s4.png')}}" alt="Client Logo"/></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

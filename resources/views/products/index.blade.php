@extends('layouts.master')
@section('title' , 'All Products')
@section('content')

<div class="main">
    <section class="module bg-dark-60 shop-page-header" data-background="{{asset('assets/images/shop/productbanner.jpg')}}">
        <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Shop Products</h2>
            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
            </div>
        </div>
        </div>
    </section>
    <section class="module-small">
        <div class="container">
        <form class="row">
            <div class="col-sm-4 mb-sm-20">
            <select class="form-control">
                <option selected="selected">Default Sorting</option>
                <option>Popular</option>
                <option>Latest</option>
                <option>Average Price</option>
                <option>High Price</option>
                <option>Low Price</option>
            </select>
            </div>
            <div class="col-sm-2 mb-sm-20">
            <select class="form-control">
                <option selected="selected">Woman</option>
                <option>Man</option>
            </select>
            </div>
            <div class="col-sm-3 mb-sm-20">
            <select class="form-control">
                <option selected="selected">All</option>
                <option>Coats</option>
                <option>Jackets</option>
                <option>Dresses</option>
                <option>Jumpsuits</option>
                <option>Tops</option>
                <option>Trousers</option>
            </select>
            </div>
            <div class="col-sm-3">
            <button class="btn btn-block btn-round btn-g" type="submit">Apply</button>
            </div>
        </form>
        </div>
    </section>
    <hr class="divider-w">
    <section class="module-small">
        <div class="container">
        <div class="row multi-columns-row">
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="{{asset('assets/images/shop/pro1.jpg')}}" alt="Accessories Pack"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="{{asset('assets/images/shop/pro5.jpg')}}" alt="Men’s Casual Pack"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="{{asset('assets/images/shop/pro3.jpg')}}" alt="Men’s Garb"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="{{asset('assets/images/shop/pro4.jpg')}}" alt="Cold Garb"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="{{asset('assets/images/shop/pro8.jpg')}}" alt="Accessories Pack"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="{{asset('assets/images/shop/pro6.jpg')}}" alt="Men’s Casual Pack"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="{{asset('assets/images/shop/pro7.jpg')}}" alt="Men’s Garb"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
            </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="shop-item">
                <div class="shop-item-image"><img src="{{asset('assets/images/shop/pic1.jpg')}}" alt="Cold Garb"/>
                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                </div>
                <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
            <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
            </div>
        </div>
        </div>
    </section>

@endsection

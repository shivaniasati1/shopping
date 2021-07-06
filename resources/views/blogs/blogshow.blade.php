@extends('layouts.master')
@section('title' , 'Blogs')
@section('content')

<div class="main">
    <section class="module bg-dark-60 blog-page-header" data-background="{{asset('assets/images/blogbanner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Blog Grid</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row multi-columns-row post-columns">
                @foreach ($blogs as $blog)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><a href="{{route('blogdetail')}}"><img src="{{URL::to('/')}}/assets/images/{{$blog->image}}" alt="Blog-post Thumbnail"/></a></div>
                        <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">{{$blog->title}}</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">{{$blog->author_name}}</a>&nbsp;| {{ $blog->created_at->isoFormat('dddd D') }} | 3 Comments
                        </div>
                        </div>
                        <div class="post-entry">
                        <p>{{$blog->description}}</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><a href="{{route('blogdetail')}}"><img src="{{asset('assets/images/post2.jpg')}}" alt="Blog-post Thumbnail"/></a></div>
                        <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Shore after the tide</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Andy River</a>&nbsp;| 11 November | 4 Comments
                        </div>
                        </div>
                        <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><a href="{{route('blogdetail')}}"><img src="{{asset('assets/images/post3.jpg')}}" alt="Blog-post Thumbnail"/></a></div>
                        <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">We in New Zealand</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
                        </div>
                        </div>
                        <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><a href="{{route('blogdetail')}}"><img src="{{asset('assets/images/post4.jpg')}}" alt="Blog-post Thumbnail"/></a></div>
                        <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Plane in the field</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                        </div>
                        </div>
                        <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><a href="{{route('blogdetail')}}"><img src="{{asset('assets/images/post5.jfif')}}" alt="Blog-post Thumbnail"/></a></div>
                        <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Clock</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Andy River</a>&nbsp;| 11 November | 4 Comments
                        </div>
                        </div>
                        <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><a href="{{route('blogdetail')}}"><img src="{{asset('assets/images/post6.jpg')}}" alt="Blog-post Thumbnail"/></a></div>
                        <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Lighthouse to the shore</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
                        </div>
                        </div>
                        <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        </div>
                        <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                </div> --}}
            </div>
            <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
        </div>
    </section>

@stop

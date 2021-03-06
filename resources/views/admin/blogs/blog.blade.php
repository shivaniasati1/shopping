@extends('layouts.adminapp')
@section('title','All Blogs')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h3>All Data</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light">
                        <div class="card-title" style="background-color: #9C27B0">
                            <ul class="nav nav-tabs" data-toggle="tabs">
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('blog.ind')}}">Blog</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('blog.cre')}}">Add Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><b>Id</b></th>
                                            <th class="text-center"><b>Image</b></th>
                                            <th class="text-center"><b>Title</b></th>
                                            <th class="text-center"><b>Author Name</b></th>
                                            <th><b>Description</b></th>
                                            <th class="text-center"><b>Date</b></th>
                                            <th class="text-center"><b>Action</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blogs as $blog)
                                        <tr>
                                            <td class="text-center">{{$blog->id}}</td>
                                            <td class="text-center">
                                                <img src="{{URL::to('/')}}/assets/images/{{$blog->image}}" width="100" height="100" alt="">
                                            </td>
                                            <td class="text-center">{{$blog->title}}</td>
                                            <td class="text-center">{{$blog->author_name}}</td>
                                            <td>{{$blog->description}}</td>
                                            <td class="text-center">{{$blog->created_at->toFormattedDateString()}}</td>
                                            <td class="text-center">
                                                <a href="{{route('blog.edit',$blog->id)}}" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <form action="{{route('blog.delete',$blog->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button href="" data-toggle="tooltip" class="border-0 bg-transparent" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

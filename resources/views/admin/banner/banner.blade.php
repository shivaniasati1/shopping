@extends('layouts.adminapp')
@section('title','Banner')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h3>Banners</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Banner</li>
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
                                <a class="nav-link" href="{{route('banner.index')}}">Banner</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('banner.create')}}">Add Banner</a>
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
                                            <th class="text-center"><b>Link</b></th>
                                            <th class="text-center"><b>Sequence</b></th>
                                            <th class="text-center"><b>Action</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td class="text-center">{{$banner->id}}</td>
                                                <td class="text-center">
                                                    <img height="100" width="150" src="{{URL::to('/')}}/adminassets/img/{{$banner->image}}" alt="no image"/>
                                                </td>
                                                <td class="text-center">{{$banner->link}}</td>
                                                <td class="text-center">{{$banner->sequence}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('banner.edit',$banner->id)}}" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                    <form action="{{route('banner.destroy',$banner->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="border-0 bg-transparent" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></button>
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

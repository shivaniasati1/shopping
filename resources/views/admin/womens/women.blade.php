@extends('layouts.adminapp')
@section('title','Products')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h3>All Women Products</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-light">
                        <div class="card-title" style="background-color: #9C27B0">
                            <ul class="nav nav-tabs" data-toggle="tabs">
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('women.index')}}">Product</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('women.create')}}">Add Product</a>
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
                                            <th class="text-center"><b>Name</b></th>
                                            <th class="text-center"><b>Categories</b></th>
                                            <th class="text-center"><b>Price</b></th>
                                            <th class="text-center"><b>size</b></th>
                                            <th class="text-center"><b>color</b></th>
                                            <th><b>Description</b></th>
                                            <th class="text-center"><b>Action</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                        <tr>
                                            <td class="text-center">{{$data->id}}</td>
                                            <td class="text-center">
                                                <img src="{{URL::to('/')}}/assets/images/shop/{{$data->image}}" height="100" width="100" alt="no image">
                                            </td>
                                            <td class="text-center">{{$data->name}}</td>
                                            <td class="text-center">{{$data->categories}}</td>
                                            <td class="text-center">{{$data->price}}</td>
                                            <td class="text-center">black,5</td>
                                            <td class="text-center">black,5</td>
                                            <td>{{$data->description}}</td>
                                            <td class="text-center">
                                                <a href="{{route('women.edit',$data->id)}}" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <form action="{{route('women.delete',$data->id)}}" method="POST">
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

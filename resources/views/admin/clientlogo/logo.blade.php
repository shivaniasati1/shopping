@extends('layouts.adminapp')
@section('title','Client Logo')

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
                                <a class="nav-link" href="{{route('client.index')}}">Logo</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('client.create')}}">Add Logo</a>
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
                                            {{-- <th class="text-center"><b>Sequence</b></th> --}}
                                            <th class="text-center"><b>Action</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logos as $logo)
                                        <tr>
                                            <td class="text-center">{{$logo->id}}</td>
                                            <td class="text-center">
                                                <img src="{{URL::to('/')}}/assets/images/{{$logo->image}}" width="120" height="100" alt="">
                                            </td>
                                            <td class="text-center">{{$logo->link}}</td>
                                            {{-- <td class="text-center">cnsk</td> --}}
                                            <td class="text-center">
                                                <a href="{{route('client.edit',$logo->id)}}" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <form action="{{route('client.delete',$logo->id)}}" method="POST">
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

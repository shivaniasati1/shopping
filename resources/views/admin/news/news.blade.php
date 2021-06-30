@extends('layouts.adminapp')
@section('title','News')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h3>News</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">News</li>
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
                                <a class="nav-link" href="{{route('admin.news')}}">News</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.addnew')}}">Add news</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-header ">
                            {{-- <div class="container-fluid no-padding">
                                <div class="row"> --}}
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"><b>Id</b></th>
                                                    <th class="text-center"><b>Image</b></th>
                                                    <th class="text-center"><b>Title</b></th>
                                                    <th class="text-center"><b>short_des</b></th>
                                                    <th><b>Description</b></th>
                                                    <th class="text-center"><b>Action</b></th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach ($alldata as $value)
                                                  <tr>
                                                    <td class="text-center">{{$value->id}}</td>
                                                    <td class="text-center">
                                                        <img src="{{ URL::to('/') }}/adminassets/img/{{ $value->image }}" height="100" width="150"/>
                                                    </td>
                                                    <td class="text-center">{{$value->title}}</td>
                                                    <td class="text-center">{{$value->short_des}}</td>
                                                    <td>{{$value->description}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('admin.edit',$value->id)}}" type="submit" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-danger"></i></a>
                                                        <form action="{{route('admin.destroy',$value->id)}}" method="POST" >
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" data-toggle="tooltip" title="" data-original-title="delete" class=" border-0 bg-transparent"><i class="fa fa-trash text-success"></i></button>
                                                        </form>
                                                    </td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>
                                        </table>
                                    </div>
                                {{-- </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

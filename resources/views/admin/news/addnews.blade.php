@extends('layouts.adminapp')
@section('title','News')

@section('content')
    <div class="content">
        <div class="">
            <div class="card-header" style="background-color: #9C27B0">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.news')}}">News</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.addnew')}}">Add News</a>
                    </li>
                </ul>
            </div>
            <div class="card ">
                <div class="card-header bg-light">
                    <h4>Add Details</h4>
                </div>
                <form method="post" action="{{isset($news) ? route('admin.update',$news->id) : route('admin.store')}}" class="p-4" enctype="multipart/form-data">
                    @csrf
                    @if(isset($news))
                        @method('put')
                    @endif
                    {{-- <div class="form-group">
                        <div class="profile-images-card"> --}}
                            <div class="card" style="height:200px; width:200px">
                                <img src="{{asset('adminassets/img/avatar15@2x.jpg')}}" style="height:200px; width:200px" id="upload-img">
                            </div>
                            <div class="custom-file">
                                {{-- <label>Upload Profile</label> --}}
                                {{-- @if(isset($news == '')) --}}
                                    <input type="file" id="fileupload" name="images" value="">
                                {{-- @else
                                    <img src="{{ URL::to('/') }}/adminassets/img/{{ $news->image }}" class="img-thumbnail w-100 h-20"/>
                                    <input type="file" id="fileupload" name="images" value="">
                                @endif --}}
                            </div>
                        {{-- </div>
                    </div> --}}
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file px-2 py-2"> </i></span>
                            <input type="text" name="title" class="form-control" value="{{isset($news) ? $news->title : ''}}"  placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-o px-2 py-2"></i></span>
                            <input type="text" name="short_des" class="form-control" value="{{isset($news) ? $news->short_des : ''}}" placeholder="Enter short description">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text px-2 py-2"></i></span>
                            <input type="text" name="description" class="form-control" value="{{isset($news) ? $news->description : ''}}" placeholder="Enter description">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-danger">{{isset($news) ? 'update' : 'add'}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.adminapp')
@section('title','Banner')

@section('content')
    <div class="content">
        <div class="">
            <div class="card-header" style="background-color: #9C27B0">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('banner.index')}}">Banner</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('banner.create')}}">Add Banner</a>
                    </li>
                </ul>
            </div>
            <div class="card ">
                <div class="card-header bg-light">
                    <h4>Add Banner</h4>
                </div>
                <form method="post" action="{{isset($data) ? route('banner.update',$data->id) : route('banner.store')}}" class="p-4" enctype="multipart/form-data">
                    @csrf
                    @if(isset($data))
                        @method('put')
                    @endif
                    {{-- <div class="form-group">
                        <div class="profile-images-card"> --}}
                            <div class="card" style="height:200px; width:200px">
                                <img src="{{asset('adminassets/img/avatar15@2x.jpg')}}" style="height:200px; width:200px" id="upload-img">
                            </div>
                            <div class="custom-file">
                                {{-- <label>Upload Profile</label> --}}
                                <input type="file" id="fileupload" value="" name="images">
                            </div>
                        {{-- </div>
                    </div> --}}
                     <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-link px-2 py-2"> </i></span>
                            <input type="text" name="link" value="{{isset($data) ? $data->link : ''}}" class="form-control" placeholder="Enter link">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user px-2 py-2"></i></span>
                            <input type="text" name="sequence" value="{{isset($data) ? $data->sequence : ''}}" class="form-control" placeholder="Enter sequence">
                        </div>
                    </div>
                   {{-- <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file px-2 py-2"></i></span>
                            <input type="text" name="description" class="form-control" placeholder="Enter description">
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-danger">{{isset($data) ? 'update' : 'add'}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.adminapp')
@section('title','Add Blogs')

@section('content')
    <div class="content">
        <div class="">
            <div class="card-header" style="background-color: #9C27B0">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('blog.ind')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('blog.cre')}}">Add Blog</a>
                    </li>
                </ul>
            </div>
            <div class="card ">
                <div class="card-header bg-light">
                    <h4>Add Details</h4>
                </div>
                <form method="post" action="{{isset($blogs) ? route('blog.update',$blogs->id) : route('blog.store')}}" class="p-4" enctype="multipart/form-data">
                    @csrf
                    @if (isset($blogs))
                        @method('put')
                    @endif
                    {{-- <div class="form-group">
                        <div class="profile-images-card"> --}}
                            <div class="card" style="height:200px; width:200px">
                                <img src="{{asset('adminassets/img/avatar15@2x.jpg')}}" style="height:200px; width:200px" id="upload-img">
                            </div>
                            <div class="custom-file">
                                {{-- <label>Upload Profile</label> --}}
                                <input type="file" id="fileupload" name="images">
                            </div>
                        {{-- </div>
                    </div> --}}
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file px-2 py-2"> </i></span>
                            <input type="text" name="title" value="{{isset($blogs) ? $blogs->title : ''}}" class="form-control" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user px-2 py-2"></i></span>
                            <input type="text" name="author_name" value="{{isset($blogs) ? $blogs->author_name : ''}}" class="form-control" placeholder="Enter Author Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text px-2 py-2"></i></span>
                            <input type="text" name="description" value="{{isset($blogs) ? $blogs->description : ''}}" class="form-control" placeholder="Enter description">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-danger">{{isset($blogs) ? 'update' : 'add'}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


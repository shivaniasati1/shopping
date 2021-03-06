@extends('layouts.adminapp')
@section('title','Products')

@section('content')
    <div class="content">
        <div class="">
            <div class="card-header" style="background-color: #9C27B0">
                <ul class="nav nav-tabs" data-toggle="tabs">
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('men.index')}}">Product</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('men.create')}}">Add Product</a>
                    </li>
                </ul>
            </div>
            <div class="card ">
                <div class="card-header bg-light">
                    <h4>Add Product</h4>
                </div>
                <form method="post" action="{{isset($mens) ? route('men.update',$mens->id): route('men.store')}}" class="p-4" enctype="multipart/form-data">
                    @csrf
                    @if(isset($mens))
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
                            <span class="input-group-addon"><i class="fa fa-user px-2 py-2"> </i></span>
                            <input type="text" name="name" value="{{isset($mens)? $mens->name : ''}}" class="form-control" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-shopping-bag px-2 py-2"></i></span>
                            <input type="text" name="categories" value="{{isset($mens)? $mens->categories : ''}}" class="form-control" placeholder="Enter categories">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-google-wallet px-2 py-2"></i></span>
                            <input type="text" name="price" value="{{isset($mens)? $mens->price : ''}}" class="form-control" placeholder="Enter price">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text px-2 py-2"></i></span>
                            <input type="text" name="composition" value="{{--isset($mens)? $mens->name : ''--}}" class="form-control" placeholder="Enter composition">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text px-2 py-2"></i></span>
                            <input type="text" name="size" value="{{--isset($mens)? $mens->name : ''--}}" class="form-control" placeholder="Enter size">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file px-2 py-2"></i></span>
                            <input type="text" name="color" value="{{--isset($mens)? $mens->name : ''--}}" class="form-control" placeholder="Enter color">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-first-order px-2 py-2"></i></span>
                            <input type="text" name="brand" value="{{--isset($mens)? $mens->name : ''--}}" class="form-control" placeholder="Enter brand">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text px-2 py-2"></i></span>
                            <input type="text" name="description" value="{{isset($mens)? $mens->description : ''}}" class="form-control" placeholder="Enter description">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


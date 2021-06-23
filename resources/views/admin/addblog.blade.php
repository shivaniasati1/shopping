@extends('layouts.adminapp')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Simple Table</h4>
                    <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <form action="" method="POST" class="p-3">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user px-2"> </i></span>
                            <input type="text" name="title" class="form-control" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user px-2"></i></span>
                            <input type="text" name="author_name" class="form-control" placeholder="Enter Author Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file px-2"></i></span>
                            <input type="text" name="description" class="form-control" placeholder="Enter description">
                        </div>
                    </div>
                    {{-- <div class="form-group"> --}}
                        {{-- <div class="input-group"> --}}
                            {{-- <span class="input-group-addon"><i class="fa fa-envelope px-2 py-3"></i></span> --}}
                            <input type="file" name="image" class="form-control" placeholder="Enter Image">
                        {{-- </div> --}}
                    {{-- </div> --}}
                </form>
            </div>
        </div>
    </div>
@endsection

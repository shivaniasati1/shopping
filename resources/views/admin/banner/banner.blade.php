@extends('layouts.adminapp')

@section('content')
    <div class="content">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h3>DataTables</h3>
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
                                <a class="nav-link active" href="{{--route('admin.addbanner')--}}">Banner</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{--route('admin.addbanner')--}}">Add Banner</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><b>Id</b></th>
                                        <th><b>Image</b></th>
                                        <th class="text-center"><b>Title</b></th>
                                        <th class="text-center"><b>Author Name</b></th>
                                        <th><b>Description</b></th>
                                        <th class="text-center"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tasman</td>
                                        <td>Internet Explorer 5.1</td>
                                        <td class="text-center">Mac OS 7.6-9</td>
                                        <td class="text-center">1</td>
                                        <td>C</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tasman</td>
                                        <td>Internet Explorer 5.2</td>
                                        <td class="text-center">Mac OS 8-X</td>
                                        <td class="text-center">1</td>
                                        <td>C</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>IE Mobile</td>
                                        <td class="text-center">Windows Mobile 6</td>
                                        <td class="text-center">-</td>
                                        <td>C</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Misc</td>
                                        <td>PSP browser</td>
                                        <td class="text-center">PSP</td>
                                        <td class="text-center">-</td>
                                        <td>C</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td class="text-center">-</td>
                                        <td class="text-center">-</td>
                                        <td>U</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                            <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                                <a class="nav-link" href="{{route('admin.news')}}">news</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.addnew')}}">Add news</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-header">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><b>Id</b></th>
                                            <th><b>Image</b></th>
                                            <th class="text-center"><b>Title</b></th>
                                            <th class="text-center"><b>short_des</b></th>
                                            <th><b>Description</b></th>
                                            <th class="text-center"><b>Action</b></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Internet Explorer</td>
                                            <td class="text-center">Mac OS </td>
                                            <td class="text-center">Lorem porro vel.</td>
                                            <td>Lorem magnam!</td>
                                            <td class="text-center">
                                                <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>IE Mobile</td>
                                            <td class="text-center">Windows Mobile 6</td>
                                            <td class="text-center">news page </td>
                                            <td>all news show </td>
                                            <td class="text-center">
                                                <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>PSP browser</td>
                                            <td class="text-center">PSP</td>
                                            <td class="text-center">-</td>
                                            <td>all details </td>
                                            <td class="text-center">
                                                <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>All others</td>
                                            <td class="text-center">ecommerce site</td>
                                            <td class="text-center">blogs and banner</td>
                                            <td>this site</td>
                                            <td class="text-center">
                                                <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                            </td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

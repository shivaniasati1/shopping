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
                                <a class="nav-link" href="{{route('admin.womens')}}">Product</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.addwomen')}}">Add Product</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><b>Id</b></th>
                                            <th><b>Image</b></th>
                                            <th class="text-center"><b>Name</b></th>
                                            <th class="text-center"><b>Categories</b></th>
                                            <th class="text-center"><b>Price</b></th>
                                            <th class="text-center"><b>Additional</b></th>
                                            <th><b>Description</b></th>
                                            <th class="text-center"><b>Action</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Internet Explorer</td>
                                            <td class="text-center">top </td>
                                            <td class="text-center">cloth</td>
                                            <td class="text-center">350</td>
                                            <td class="text-center">black,5</td>
                                            <td>Lorem ipsum perspiciatis magnam!</td>
                                            <td class="text-center">
                                                <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>IE Mobile</td>
                                            <td class="text-center">jeans </td>
                                            <td class="text-center">cloth</td>
                                            <td class="text-center">800</td>
                                            <td class="text-center">navy blue,30</td>
                                            <td>all news show in this page</td>
                                            <td class="text-center">
                                                <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>PSP browser</td>
                                            <td class="text-center">watch </td>
                                            <td class="text-center">accessories</td>
                                            <td class="text-center">2700</td>
                                            <td class="text-center">silver</td>
                                            <td>all details in this page</td>
                                            <td class="text-center">
                                                <a href="" data-toggle="tooltip" title="" data-original-title="view"><i class="fa fa-eye text-danger"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="edit"><i class="fa fa-edit text-warning"></i></a>
                                                <a href="" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash text-success"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>All others</td>
                                            <td class="text-center">shoes </td>
                                            <td class="text-center">footwear</td>
                                            <td class="text-center">1379</td>
                                            <td class="text-center">grey</td>
                                            <td>everything in this site</td>
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
    </div>
@endsection

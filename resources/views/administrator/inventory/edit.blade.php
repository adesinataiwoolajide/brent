@extends('layouts.master')

@section('content')
    <div class="am-mainpanel">
        <div class="am-pagetitle">
            <h5 class="am-title">Dashboard</h5>
            <form id="searchBar" class="search-bar" action="">
                <div class="form-control-wrapper">
                    <input type="search" class="form-control bd-0" placeholder="Search...">
                </div><!-- form-control-wrapper -->
                <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
            </form><!-- search-bar -->
        </div><!-- am-pagetitle -->
        <div class="am-pagebody">
            @include('partials.message')
            <div class="am-pagebody">
                <div class="card pd-20 pd-sm-40">
                    <h3><p align="center" style="color:green">Please Fill the form below to Update Product  </p></h3>
                    <form action="{{ route('admin.inventory.updating', $inventory->ProductId)}}" method="POST">
                        {{ csrf_field() }}
    
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="ProductName" value="{{$inventory->ProductName}}" placeholder="Enter The Product Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Unit Price: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" value="{{$inventory->ProductUnitPrice}}" name="ProductUnitPrice"  placeholder="Enter The Unit Price">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" name="ProductRemainingQuantity" value="{{$inventory->ProductRemainingQuantity}}" placeholder="Enter The Product Quantity">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Outside Price: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" name="ProductUnitPrice_Wac"  value="{{$inventory->ProductUnitPrice_Wac}}"  placeholder="Enter The Outside Price">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Brent Price: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" name="ProductUnitPrice_Real" value="{{$inventory->ProductUnitPrice_Real}}" placeholder="Enter The Product Price">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Product Dept: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="ProductDept" value="{{$inventory->ProductDept}}"  placeholder="Enter The Product Dept">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Product Category: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="productCategory" value="{{$inventory->productCategory}}" placeholder="Enter The Product Category">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Shelf Number: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" name="productShelf" value="{{$inventory->productShelf}}"  placeholder="Enter The Shelf Number">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Wholesale Price: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" name="ProductWholesalePrice" value="{{$inventory->ProductWholesalePrice}}" placeholder="Enter The Wholesale Price">
                                </div>
                            </div><!-- col-4 -->
                                
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Branch Name: <span class="tx-danger">*</span></label>
                                    <select class="form-control" name="bcode">
                                        <option value="{{$inventory->bcode}}">{{$inventory->branch->bname}}</option>
                                        <option value=""></option>
                                        @foreach($branch as $branches)
                                            <option value="{{$branches->bcode}}">{{$branches->bname}} </option> 
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <input type="hidden" name="ProductId" value="{{$inventory->ProductId}}">
                        </div>
                        <div class="col-lg-12" align="center">
                            <button class="btn btn-info pd-x-20">UPDATE THE PRODUCT DETAILS</button>
                        </div>
                    <form>
                </div>
            </div>
        </div>
        @include('partials.foot')
        
    </div>
@endsection 

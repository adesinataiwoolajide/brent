@extends('layouts.master')

@section('content')
    <div class="am-mainpanel">
        <div class="am-pagetitle" style="color:white">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("admin.inventory.create") }}" role="tab">Add Inventory</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("admin.inventories") }}" role="tab">View All Inventories</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("admin.branchinventory") }}" role="tab">Branch Inventory</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active" href="{{ route("admin.dashboard") }}" role="tab">Dashboard</a>
                </li>  
            </ul>
            <form id="searchBar" class="search-bar" action="http:// ">
                <div class="form-control-wrapper">
                    <input type="search" class="form-control bd-0" placeholder="Search...">
                </div><!-- form-control-wrapper -->
                <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
            </form><!-- search-bar -->
        </div><!-- am-pagetitle -->
        <div class="am-pagebody">
            @include('partials.message')
            <div class="am-pagebody" style="margin-top:-30px;">
                
                <div class="card pd-20 pd-sm-40" style="height: 600px;">
                    <h3><p align="center" style="color:green">Please Fill the form below to Add Product  </p></h3>
                    <form action="{{ route('admin.inventory.save')}}" method="POST">
                        {{ csrf_field() }}
    
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Product Name: <span class="tx-danger">* This Field is Required</span></label>
                                    <input class="form-control" type="text" name="ProductName" placeholder="Enter The Product Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Unit Price: <span class="tx-danger">* This Field is Required</span></label>
                                    <input class="form-control" type="number" name="ProductUnitPrice"  placeholder="Enter The Unit Price">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Quantity: <span class="tx-danger">* This Field is Required</span></label>
                                    <input class="form-control" type="number" name="ProductRemainingQuantity" placeholder="Enter The Product Quantity">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Outside Price: <span class="tx-danger">* This Field is Required</span></label>
                                    <input class="form-control" type="number" name="ProductUnitPrice_Wac"  placeholder="Enter The Outside Price">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Brent Price: <span class="tx-danger">* This Field is Required</span></label>
                                    <input class="form-control" type="number" name="ProductUnitPrice_Real" placeholder="Enter The Product Price">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Product Dept: <span class="tx-danger">* This Field is Required</span></label>
                                    <input class="form-control" type="text" name="ProductDept"  placeholder="Enter The Product Dept">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Product Category: <span class="tx-danger">* This Field is Required</span></label>
                                    <input class="form-control" type="text" name="productCategory" placeholder="Enter The Product Category">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Shelf Number: <span class="tx-danger">* This Field is Required</span></label>
                                    <input class="form-control" type="number" name="productShelf"  placeholder="Enter The Shelf Number">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Wholesale Price: <span class="tx-danger">* This Field is Required</span></label>
                                    <input class="form-control" type="number" name="ProductWholesalePrice" placeholder="Enter The Wholesale Price">
                                </div>
                            </div><!-- col-4 -->
                                
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Branch Name: <span class="tx-danger">* This Field is Required</span></label>
                                    <select class="form-control" name="bcode">
                                        <option value="">-- Select The Branch Name</option>
                                        <option value=""> </option>
                                        @foreach($branch as $branches)
                                            <option value="{{$branches->bcode}}">{{$branches->bname}} </option> 
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                           
                        </div>
                        <div class="col-lg-12" align="center">
                            <button class="btn btn-info pd-x-20">ADD THE PRODUCT DETAILS</button>
                        </div>
                    <form>
                </div>
            </div>@include('partials.foot')
        </div>
    </div>
@endsection 

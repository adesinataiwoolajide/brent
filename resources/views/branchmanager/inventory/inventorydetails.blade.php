@extends('layouts.master')

@section('content')
<div class="am-mainpanel">
    <div class="am-pagetitle" style="color:white">
        <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active"  href="{{ route("manager.inventorydetails", $inventory->ProductId) }}" role="tab"> Inventory Details</a>
            </li>
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active"  href="{{ route("manager.inventory.dashboard", $inventory->bcode) }}" role="tab">Branch Inventory</a>
            </li>
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active" href="{{ route("manager.dashboard") }}" role="tab">Dashboard</a>
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
        <div class="card pd-20 pd-sm-40">
          
            <div class="table-wrapper">
                
                <table id="" class="table table-responsive">
                    <tbody>
                        <tr>
                            <td>Branch Name </td>
                            <td>{{$inventory->branch->bname}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Product Name </td>
                            <td>{{$inventory->ProductName}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Product Code </td>
                            <td>{{$inventory->ProductCode}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Unit Price</td>
                            <td>{{$inventory->ProductUnitPrice}}</td>   
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Unit Price Wac</td>
                            <td>{{$inventory->ProductUnitPrice_Wac}}</td> 
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Unit Price Wac</td>
                            <td>{{$inventory->ProductUnitPrice_Real}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Product Dept</td>
                            <td>{{$inventory->ProductDept}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Product Category</td>
                            <td>{{$inventory->ProductDept}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Shelf Number</td>
                            <td>{{$inventory->productShelf}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Wholesale Price</td>
                            <td>{{$inventory->ProductWholesalePrice}}</td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
        @include('partials.foot')
    </div>
@endsection 

@extends('layouts.master')

@section('content')
<div class="am-mainpanel">
    <div class="am-pagetitle" style="color:white">
        <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active"  href="{{ route("admin.branchinventory") }}" role="tab">Branch Inventory</a>
            </li>
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active"  href="{{ route("admin.inventories") }}" role="tab">View All Inventories</a>
            </li>
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active"  href="{{ route("admin.inventory.create") }}" role="tab">Add Inventory</a>
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
        <div class="card pd-20 pd-sm-40">
           @if(count($displayinventory)==0)
                <h3><p style="color: red" align="center"> 
                    The Selected {{$branch->bname}} Inventory is Empty </p>
                </h3>
           @else
            <div class="col-md-12">
                    <h3><p style="color: red" align="center"> 
                        List of {{$branch->bname}} Inventory List </p>
                    </h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="">S/N</th>
                                <th class="col">Product Name</th>
                                <th class="wd-20p">Product Code</th>
                                <th class="col">Unit Price</th>
                                <th class="wd-20p">Unit Price Wac</th>
                                <th class="col">Brent Ptice</th>
                                <th class="wd-20p">Department</th>
                                <th class="col">Operation</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="">S/N</th>
                                <th class="col">Product Name</th>
                                <th class="wd-20p">Product Code</th>
                                <th class="col">Unit Price</th>
                                <th class="wd-20p">Unit Price Wac</th>
                                <th class="col">Brent Ptice</th>
                                <th class="wd-20p">Department</th>
                                <th class="col">Operation</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $num =1 ?>
                            @foreach($displayinventory as $inventories)
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td>{{$inventories->ProductName}}</td>
                                    <td>{{$inventories->ProductCode}}</td>
                                    <td>{{$inventories->ProductUnitPrice}}</td>
                                    <td>{{$inventories->ProductUnitPrice_Wac}}</td>
                                    <td>{{$inventories->ProductUnitPrice_Real}}</td>
                                    <td>{{$inventories->ProductDept}}</td>
                                    <td>  
                                        <a href="{{ route("admin.inventorydetails", $inventories->ProductId) }}" 
                                            class="">More
                                        </a>
                                        <a href="{{ route("admin.inventory.edit", $inventories->ProductId) }}" 
                                            class="">Edit
                                        </a>

                                        <a href="{{ route("admin.inventory.delete", $inventories->ProductId) }}" 
                                            class="">Delete
                                        </a>
                                    </td>
                                </tr><?php
                                $num++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
           @endif
        </div>
    </div>
    <div class="am-pagebody">
        <div class="card pd-20 pd-sm-40">
            <div class="col-md-12" align="right">
                {{$displayinventory->links()}}
            </div>
            @include('partials.foot')
        </div>
    </div>
     
@endsection 

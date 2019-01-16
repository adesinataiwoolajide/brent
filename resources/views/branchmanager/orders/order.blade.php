@extends('layouts.master')

@section('content')
<div class="am-mainpanel">
    <div class="am-pagetitle" style="color:white">
        <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active"  href="{{ route("manager.order.dashboard", $branch->bcode) }}" role="tab">
                    {{$branch->bname }} Branch Order</a>
            </li>
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active" href="{{ route("manager.dashboard") }}" role="tab">Manager Dashboard</a>
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
           @if(count($displayorder)==0)
                <h3><p style="color: red" align="center"> 
                    {{$branch->bname}} Order List is Empty </p>
                </h3>
           @else
            <div class="col-md-12">
                    <h3><p style="color: red" align="center"> 
                        List of {{$branch->bname}} Order List </p>
                    </h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <tr>
                                    <th class="wd-15p">S/N</th>
                                    <th class="wd-15p">Transaction ID</th>
                                    <th class="wd-20p">Order Date</th>
                                    <th class="wd-15p">Product Code</th>
                                    <th class="wd-20p">Product Name</th>
                                    <th class="wd-15p">Quantity</th>
                                    <th class="wd-20p">Unit Price</th>
                                    <th class="wd-15p">Total Price</th>
                                    <th class="">Operation </th>
                                </tr>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <tr>
                                    <th class="wd-15p">S/N</th>
                                    <th class="wd-15p">Transaction ID</th>
                                    <th class="wd-20p">Order Date</th>
                                    <th class="wd-15p">Product Code</th>
                                    <th class="wd-20p">Product Name</th>
                                    <th class="wd-15p">Quantity</th>
                                    <th class="wd-20p">Unit Price</th>
                                    <th class="wd-15p">Total Price</th>
                                    <th class="">Operation </th>
                                </tr>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $num =1 ?>
                            @foreach($displayorder as $orders)
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td>{{$orders->TransactionId}}</td>
                                    <td>{{$orders->OrderDate}}</td>
                                    <td>{{$orders->ProductCode}}</td>
                                    <td>{{$orders->ProductName}}</td>
                                    <td>{{$orders->ProductQuantity}}</td>
                                    <td>{{$orders->ProductUnitPrice}}</td>
                                    <td>{{$orders->ProductTotalPrice}}</td>
                                    <td>
                                        <a href="{{ route("manager.order.details", $orders->bcode) }}" 
                                            class="">More
                                        </a>
                                    </td>
                                </tr><?php
                                $num++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
           @endif
            {{$displayorder->links()}}
        @include('partials.foot')
    </div>

@endsection 

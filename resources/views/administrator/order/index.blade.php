@extends('layouts.master')

@section('content')
    <div class="am-mainpanel">
        <div class="am-pagetitle">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("admin.orders") }}" role="tab">View All Orders</a>
                </li>
                
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active" href="{{ route("admin.dashboard") }}" role="tab">Dashboard</a>
                </li>  
            </ul>
            <h5 class="am-title">Customers Orders</h5>
            <form id="searchBar" class="search-bar" action="">
                <div class="form-control-wrapper">
                    <input type="search" class="form-control bd-0" placeholder="Search...">
                </div><!-- form-control-wrapper -->
                <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
            </form><!-- search-bar -->
        </div><!-- am-pagetitle -->
        
        
        <div class="am-pagebody">
            <div class="card pd-20 pd-sm-40">
                @if(count($order)==0)
                    <p style="color:red" align="center"> The Customers Orders List is Empty </p>
                @else
                    <div class="table-wrapper">
                        <table id="" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th class="wd-15p">S/N</th>
                                    <th class="wd-15p">Transaction ID</th>
                                    <th class="wd-20p">Order Date</th>
                                    <th class="wd-15p">Product Code</th>
                                    <th class="wd-20p">Product Name</th>
                                    <th class="wd-15p">Quantity</th>
                                    <th class="wd-20p">Unit Price</th>
                                    <th class="wd-15p">Total Price</th>
                                    <th class="wd-15p">Customer Name</th>
                                    <th class="">Operation </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="wd-15p">S/N</th>
                                    <th class="wd-15p">Transaction ID</th>
                                    <th class="wd-20p">Order Date</th>
                                    <th class="wd-15p">Product Code</th>
                                    <th class="wd-20p">Product Name</th>
                                    <th class="wd-15p">Quantity</th>
                                    <th class="wd-20p">Unit Price</th>
                                    <th class="wd-15p">Total Price</th>
                                    <th class="wd-15p">Customer Name</th>
                                    <th class="">Operation </th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $num =1 ?>
                                @foreach($order as $orders)
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
                                            <a href="{{ route("admin.order.details", $orders->ProductCode) }}" 
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
                {{$order->links()}}
                 @include('partials.foot')
            </div>
            
        </div>
        
    </div>
@endsection 

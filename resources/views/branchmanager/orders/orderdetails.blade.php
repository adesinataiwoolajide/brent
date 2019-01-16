@extends('layouts.master')

@section('content')
<div class="am-mainpanel">
    <div class="am-pagetitle" style="color:white">
        <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active"  href="{{ route("manager.order.details", $branch->bcode) }}" role="tab">
                     Order Details</a>
            </li>
            <li class="nav-item" style="margin-right: 10px;">
                <a class="nav-link active"  href="{{ route("manager.order.dashboard", $branch->bcode) }}" role="tab">
                    {{$branch->bname }} Branch Order</a>
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
                            <td>Transaction Id </td>
                            <td>{{$displayorder->TransactionId}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>displayorder Date</td>
                            <td>{{$displayorder->OrderDate}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Product Code </td>
                            <td>{{$displayorder->ProductCode}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Product Name</td>
                            <td>{{$displayorder->ProductName}}</td>   
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>Product Qty </td>
                            <td>{{$displayorder->ProductQuantity}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Unit Price</td>
                            <td>{{$displayorder->ProductUnitPrice}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Total Price </td>
                            <td>{{$displayorder->ProductTotalPrice}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Order Amount</td>
                            <td>{{$displayorder->OrderTotalAmount}}</td>   
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Discount</td>
                            <td>{{$displayorder->Discount}}</td> 
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Customer Name</td>
                            <td>{{$displayorder->CustomerName}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Amount Paid</td>
                            <td>{{$displayorder->AmountPaid}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Balance</td>
                            <td>{{$displayorder->Balance}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Staff</td>
                            <td>{{$displayorder->PersonnelInCharge}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>VAT</td>
                            <td>{{$displayorder->VAT}}</td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>Total displayorder</td>
                            <td>{{$displayorder->OrderTotalAamount_VAT}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>displayorder Discount</td>
                            <td>{{$displayorder->OrderTotalAamount_Discount}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Profit</td>
                            <td>{{$displayorder->profitRealized}}</td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>Unit Price</td>
                            <td>{{$displayorder->ProductUnitPrice_Real}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Paymane Mode</td>
                            <td>{{$displayorder->paymentMode}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Real Discount</td>
                            <td>{{$displayorder->discountRealAmount}}</td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
        @include('partials.foot')
    </div>
@endsection 

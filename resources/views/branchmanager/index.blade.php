@extends('layouts.master')

@section('content')
    <div class="am-mainpanel">
        <div class="am-pagetitle">
    
        <h5 class="am-title"></h5>
            <form id="searchBar" class="search-bar" action="">
                <div class="form-control-wrapper">
                    <input type="search" class="form-control bd-0" placeholder="Search...">
                </div><!-- form-control-wrapper -->
                <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
            </form><!-- search-bar -->
        </div><!-- am-pagetitle -->

        <div class="am-pagebody">
            <div class="row row-sm">
                
                <div class="col-lg-3">
                    <div class="card">
                        <div id="rs1" class="wd-100p ht-200"></div>
                        <div class="overlay-body pd-x-20 pd-t-20">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">
                                        <a href="{{ route('manager.inventory.dashboard', $inventory->branch->bcode)}}">
                                            View {{$inventory->branch->bname}} Inventory
                                        </a>
                                    </h6>
                                    <p class="tx-12">Sale's for <?php echo date("d-m-Y") ?></p>
                                </div>
                                
                            </div><!-- d-flex -->
                        </div>
                    </div><!-- card -->
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="card">
                        <div id="rs1" class="wd-100p ht-200"></div>
                        <div class="overlay-body pd-x-20 pd-t-20">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">
                                        <a href="{{ route('manager.order.dashboard', $inventory->branch->bcode)}}">
                                            View {{$inventory->branch->bname}} Orders
                                        </a>
                                    </h6>
                                    <p class="tx-12">Sale's for <?php echo date("d-m-Y") ?></p>
                                </div>
                                
                            </div><!-- d-flex -->
                        </div>
                    </div><!-- card -->
                </div><!-- col-4 -->

                <div class="col-lg-3">
                    <div class="card">
                        <div id="rs1" class="wd-100p ht-200"></div>
                        <div class="overlay-body pd-x-20 pd-t-20">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">
                                        <a href="{{ route('manager.staff.dashboard', $inventory->branch->bcode)}}">
                                            View {{$inventory->branch->bname}} All Staff
                                        </a>
                                    </h6>
                                </div>
                            </div>     
                        </div>
                    </div><!-- card -->
                </div><!-- col-4 -->
                <div class="col-lg-3">
                    <div class="card">
                        <div id="rs1" class="wd-100p ht-200"></div>
                        <div class="overlay-body pd-x-20 pd-t-20">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-5">Inventory</h6>
                                    <p class="tx-12">Our Products</p>
                                </div>
                                <a href="#" class="tx-gray-600 hover-info"><i class="icon ion-more tx-16 lh-0"></i></a>
                            </div><!-- d-flex -->
                        <h2 class="mg-b-5 tx-inverse tx-lato">$12,212</h2>
                        <p class="tx-12 mg-b-0">Sales before taxes.</p>
                        </div>
                    </div><!-- card -->
                </div><!-- col-4 -->
               
            </div><!-- row -->
        </div><!-- am-pagebody -->
        @include('partials.foot')
    </div><!-- am-mainpanel -->
@endsection 
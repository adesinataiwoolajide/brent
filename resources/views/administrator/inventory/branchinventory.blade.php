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
            <div class="card pd-20 pd-sm-40 mg-t-50" style="margin-top: -20px">
                <h6 class="card-body-title">List of Saved Branch</h6>
                
                @include('partials.message')
                <div class="row">   
                    @if(count($branch)>0)
                        @foreach($branch as $branches)
                            <div class="col-lg-4">
                                <div class="card pd-20">
                                    <h6 class="tx-12 tx-uppercase tx-inverse tx-bold mg-b-15">
                                    <a href="{{route('admin.diaplayinventory', $branches->bcode )}}">
                                        {{$branches->bname}}
                                    </a>
                                    </h6>
                                    
                                    <div class="d-flex mg-b-10">
                                        <div class="bd-r pd-r-10">
                                            <label class="tx-12"><?php echo date("d-m-y") ?></label>
                                            <p class="tx-lato tx-inverse tx-bold">14111</p>
                                        </div>
                                        <div class="bd-r pd-x-10">
                                            <label class="tx-12"><?php echo date("M") ?></label>
                                            <p class="tx-lato tx-inverse tx-bold">334144</p>
                                        </div>
                                        <div class="pd-l-10">
                                            <label class="tx-12"><?php echo date("Y") ?></label>
                                            <p class="tx-lato tx-inverse tx-bold">23111141</p>
                                        </div>
                                    </div><!-- d-flex -->
                                    <div class="progress mg-b-10">
                                        <div class="progress-bar wd-50p" role="progressbar" 
                                        aria-valuenow="1" aria-valuemin="0" aria-valuemax="1000">1%</div>
                                    </div>
                                    
                                </div><!-- card -->
                            </div><!-- col-4 -->  
                        @endforeach
                    @else
                        <p style="color:red align="center"> The Branch List is Empty </p>
                    @endif     
                </div><!-- row -->
            </div><!-- card -->
        </div>
        @include('partials.foot')
    </div>
    
@endsection 

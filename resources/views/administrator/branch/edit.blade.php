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
        @include('partials.message')
        <div class="am-pagebody">
            <div class="card pd-20 pd-sm-40">
                @include('partials.message')
                <div class="card pd-20 pd-sm-40">
                    <div class="form-layout">
                        <form action="{{ route('admin.branch.update', $branching->id)}}" method="POST">
                            @csrf
                            <div class="row mg-b-25">
                                <p align="center" style="color:greeen">Please Fill The Below Form To Update The Branch Details</p>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Branch Name: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="bname" value="{{ $branching->bname}}" placeholder="Enter The Branch Name">
                                    </div>
                                </div><!-- col-4 -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                            <label class="form-control-label">Branch Code: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="number" name="bcode" value="{{ $branching->bcode}}"  placeholder="Enter The Branch Code">
                                    </div>
                                </div><!-- col-4 -->
                                <input type="hidden" name="id" id="id" value="{{ $branching->id }}">
                                
                                <div class="col-lg-12" align="center">  
                                    <button class="btn btn-success"> UPDATE THE BRANCH DETAILS</button> 
                                </div><!-- col-4 -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.foot')
    </div>
    


@endsection 

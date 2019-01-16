@extends('layouts.master')

@section('content')
    <div class="am-mainpanel">
        <div class="am-pagetitle" style="color:white">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route('admin.staff.transfer', $staff->id) }}" role="tab"> Transfer Staff</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route('admin.staffs.create')}}" role="tab">Add Staff</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("admin.staffs") }}" role="tab">View All Staffs</a>
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
        @include('partials.message')
         
        <div class="am-pagebody">
            <div class="card pd-20 pd-sm-40">
                <form action="{{ route('admin.staff.transfer.update', $staff->id)}}" method="POST">
                    {{ csrf_field() }}

                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Branching Name: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="branch">
                                    <option value="{{$staff->branch}}">{{$staff->staffbranch->bname}}</option>
                                    <option value=""></option>
                                    @foreach($branching as $branches)
                                        <option value="{{$branches->bcode}}">{{$branches->bname}} </option> 
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Staff Username: <span class="tx-danger">*</span></label>
                                <input class="form-control" readonly type="text" value="{{$staff->username}}" name="username" placeholder="Enter The Branch Name">
                            </div>
                        </div><!-- col-4 -->

                       
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Staff Type: <span class="tx-danger">*</span></label>
                                <select class="form-control" readonly name="level">
                                    <option value="$staff->level">
                                        @if($staff->level ==1)
                                            General Manager
                                        @elseif($staff->level ==2)
                                           Branch Manager
                                        @elseif($staff->level ==3)
                                           Store Keeper
                                        @else
                                            Sales Girl
                                        @endif
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{$staff->id}}">
                    <div class="col-lg-12" align="center">
                        <button class="btn btn-info pd-x-20">TRANSFER THE STAFF</button>
                    </div>
                <form>
            </div>
        </div>
        
        @include('partials.foot')
    </div>
    
@endsection 

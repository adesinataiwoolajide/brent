@extends('layouts.master')

@section('content')
    <div class="am-mainpanel">
        <div class="am-pagetitle" style="color:white">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("admin.staffs") }}" role="tab">View All Staffs</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route('admin.staffs.create')}}" role="tab">Add Staff</a>
                </li>
                {{-- <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("admin.staff.transfer") }}" role="tab"> Transfer Staff</a>
                </li> --}}
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
        <div class="card col-md-12">
            <div class="form-layout" align="right">
                <a href="{{ route('admin.staffs.create')}}" class="btn btn-info pd-x-20">ADD STAFF DETAILS</a>
            </div>
    
        </div>
        <div class="am-pagebody">
            <div class="card pd-20 pd-sm-40">
                @if(count($staff)==0)
                    <p style="color:red" align="center"> The Staff List is Empty </p>
                @else
                    <div class="table-wrapper">
                        <table id="" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th class="wd-15p">S/N</th>
                                    <th class="wd-15p">User Name</th>
                                    <th class="wd-20p">Access ID</th>
                                    <th class="wd-15p">Staff Type</th>
                                    <th class="wd-20p">Branch</th>
                                    <th class="wd-15p">Operations</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="wd-15p">S/N</th>
                                    <th class="wd-15p">User Name</th>
                                    <th class="wd-20p">Access ID</th>
                                    <th class="wd-15p">Staff Type</th>
                                    <th class="wd-20p">Branch</th>
                                    <th class="wd-15p">Operations</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $num =1 ?>
                                @foreach($staff as $staffs)
                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td>{{$staffs->username}}</td>
                                        <td>{{$staffs->accessid}}</td>
                                        <td>
                                            @if($staffs->level ==1)
                                                <p style="color: green">General Manager</p>
                                            @elseif($staffs->level ==2)
                                               <p style="color: orange"> Branch Manager</p>
                                            @elseif($staffs->level ==3)
                                               <p style="color: blue"> Store Keeper </p>
                                            @else
                                                <p style="color: red">Sales Girl </p>
                                            @endif
                                        </td>
                                        <td>{{$staffs->staffbranch->bname}}</td>
                                        <td><a href="{{ route('admin.staff.edit', $staffs->id)}}" class="">
                                                <i class="fa fa-pencil"></i> Edit
                                            </a>

                                            <a href="{{ route('admin.staff.transfer', $staffs->id)}}" class="">
                                                <i class="fa fa-cogs"></i> Transfer
                                            </a>

                                            <a href="{{ route("admin.staff.delete", $staffs->id) }}" 
                                                class=""><i class="fa fa-trash-o"></i> Delete
                                            </a></td>
                                    </tr><?php
                                    $num++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-12 text-right">
            {{$staff->links()}}
        </div>
        @include('partials.foot')
    </div>
    
@endsection 

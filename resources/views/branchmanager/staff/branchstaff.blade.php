@extends('layouts.master')

@section('content')
    <div class="am-mainpanel">
        <div class="am-pagetitle" style="color:white">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("manager.staff.dashboard", $branch->bcode) }}" role="tab">
                        View All Staffs</a>
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
                @if(count($displaystaff)==0)
                    <p style="color:red" align="center"> The Staff List is Empty </p>
                @else
                    <h4><p style="color:green" align="center"> The Staff List For {{$branch->bname}} </p></h4>
                    <div class="table-wrapper">
                        <table id="" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th class="wd-15p">S/N</th>
                                    <th class="wd-15p">User Name</th>
                                    <th class="wd-15p">Staff Type</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="wd-15p">S/N</th>
                                    <th class="wd-15p">User Name</th>
                                    <th class="wd-15p">Staff Type</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $num =1 ?>
                                @foreach($displaystaff as $staffs)
                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td>{{$staffs->username}}</td>
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
                                        
                                    </tr><?php
                                    $num++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
            {{$displaystaff->links()}}
            @include('partials.foot')
        </div>
       
    </div>
    
@endsection 

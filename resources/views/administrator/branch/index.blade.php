@extends('layouts.master')

@section('content')
    
    <div class="am-mainpanel">
        <div class="am-pagetitle" style="color:white">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist" style="color:white">
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("admin.branches") }}" role="tab">Branches</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active" href="{{ route("admin.dashboard") }}" role="tab">Dashboard</a>
                </li>
                
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link active"  href="{{ route("admin.branchinventory") }}" role="tab">Branch Inventory</a>
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
            @include('partials.message')
            <div class="card pd-20 pd-sm-40" style="margin-top:-20px; height:110px;">
                <div class="form-layout">
                    <form action="{{ route("admin.branch.save") }}" method="POST">
                        {{ csrf_field() }}
    
                        <div class="row mg-b-25">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="bname" placeholder="Enter The Branch Name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-5">
                                <div class="form-group">
                                    
                                    <?php
                                    $early = 10;
                                    $current = 1;
                                    print '<select class ="form-control select" name ="bcode">';?>
                                    <option value="">-- Please Select The Branch Number --</option>
                                    <option value=""></option><?php
                                    foreach(range($current, $early) as $i){
                                        print'<option value=" '.$i.'"'.($i === $current ? : '').'>'.$i.'</option>';
                                    }
                                    print '</select>';?>   
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-2">  
                                <button class="btn btn-success"> ADD THE BRANCH </button> 
                            </div><!-- col-4 -->
                        </div>
                   </form>
                </div>
            </div>
        </div>
        
        <div class="am-pagebody" >
            <div class="card pd-20 pd-sm-40" style="margin-top:-45px">
                @if(count($branch)==0)
                    <p> The Branch List is Empty </p>
                @else
                    <div class="table-wrapper">
                        <table id="" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th class="wd-15p">S/N</th>
                                    <th class="wd-15p">Branch Name</th>
                                    <th class="wd-20p">Branch Code</th>
                                    <th class="wd-15p">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num =1 ?>
                                @foreach($branch as $branches)
                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td>{{$branches->bname}}</td>
                                        <td>{{$branches->bcode}}</td>
                                        <td>
                                            <a href="{{ route("admin.branch.edit", $branches->id) }}" 
                                                class="btn btn-primary"><i class="fa fa-pencil"></i> Edit
                                            </a>

                                            <a href="{{ route("admin.branch.delete", $branches->id) }}" 
                                                class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete
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
        <div class="col-md-12 text-right">
            {{$branch->links()}}
        </div> @include('partials.foot')
    </div>
       
</div><!-- am-mainpanel -->

@endsection 

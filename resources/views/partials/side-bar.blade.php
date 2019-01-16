<div class="am-sideleft">
    <ul class="nav am-sideleft-tab">
        <li class="nav-item">
        <a href="#mainMenu" class="nav-link active"><i class="icon ion-ios-home-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
        <a href="#emailMenu" class="nav-link"><i class="icon ion-ios-email-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
        <a href="#chatMenu" class="nav-link"><i class="icon ion-ios-chatboxes-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
        <a href="#settingMenu" class="nav-link"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
    </ul>
  
    <div class="tab-content">
        <div id="mainMenu" class="tab-pane active">
            <ul class="nav am-sideleft-menu">
                <?php $bcode = Auth::user()->level; ?>
                 @if($bcode == 1)
                    <li class="nav-item">
                        <a href="{{ route("admin.dashboard") }}" class="nav-link active">
                            <i class="icon ion-ios-home-outline"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!-- nav-item -->
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link with-sub">
                            <i class="icon ion-ios-gear-outline"></i>
                            <span>Branch</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="nav-item"><a href="{{ route("admin.branches") }}" class="nav-link">View Branches</a></li>
                        </ul>
                    </li><!-- nav-item -->
                
                    <li class="nav-item">
                        <a href="ja" class="nav-link with-sub">
                            <i class="icon ion-ios-list-outline"></i>
                            <span>Inventory</span>
                        </a>
                        <ul class="nav-sub">
                                
                            <li class="nav-item"><a href="{{ route("admin.inventory.create") }}" class="nav-link">Add Inventory</a></li>
                            <li class="nav-item"><a href="{{ route("admin.inventories") }}" class="nav-link">View Inventories</a></li>
                            <li class="nav-item"><a href="{{ route("admin.branchinventory") }}" class="nav-link">View Branch Inventories</a></li>
                        </ul>
                    </li><!-- nav-item -->
                    <li class="nav-item">
                        <a href="#" class="nav-link with-sub">
                            <i class="icon ion-ios-navigate-outline"></i>
                            <span>Customer Order</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="nav-item"><a href="{{ route("admin.orders") }}" class="nav-link">View All Order</a></li>
                            <li class="nav-item"><a href="" class="nav-link">View Order By Branch</a></li>
                        </ul>
                    </li><!-- nav-item -->
                    <li class="nav-item">
                        <a href="#" class="nav-link with-sub">
                            <i class="icon ion-ios-briefcase-outline"></i>
                            <span>Staff</span>
                        </a>
                        <ul class="nav-sub">
                        <li class="nav-item"><a href="{{ route('admin.staffs.create')}}" class="nav-link">Add Staff</a></li>
                        <li class="nav-item"><a href="{{ route("admin.staffs") }}" class="nav-link">View Staff</a></li>
                        </ul>
                    </li><!-- nav-item -->
                
                @elseif($bcode == 2)
                    <li class="nav-item">
                        <a href="{{ route("manager.dashboard") }}" class="nav-link active">
                            <i class="icon ion-ios-home-outline"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!-- nav-item -->
                    <li class="nav-item">
                        <a href="{{ route('manager.staff.dashboard', $bcode) }}" class="nav-link active">
                            <i class="icon ion-ios-gear-outline"></i>
                            <span>Branch Staff</span>
                        </a>
                    </li><!-- nav-item -->
                    <li class="nav-item">
                        <a href="{{ route('manager.inventory.dashboard', $bcode) }}" class="nav-link active">
                                <i class="icon ion-ios-briefcase-outline"></i>
                            <span>Branch Inventory</span>
                        </a>
                    </li><!-- nav-item -->
                    <li class="nav-item">
                        <a href="{{ route('manager.order.dashboard', $bcode) }}" class="nav-link active">
                            <i class="icon ion-ios-navigate-outline"></i>
                            <span>Branch Orders</span>
                        </a>
                    </li><!-- nav-item -->

                @elseif($bcode == 3)
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            <i class="icon ion-ios-home-outline"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!-- nav-item -->
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            <i class="icon ion-ios-gear-outline"></i>
                            <span>Branch Store</span>
                        </a>
                    </li><!-- nav-item -->

                @elseif($bcode == 3)
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            <i class="icon ion-ios-home-outline"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!-- nav-item -->
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            <i class="icon ion-ios-gear-outline"></i>
                            <span>Branch Sales</span>
                        </a>
                    </li><!-- nav-item -->
                @else
                    <li class="nav-item">
                        <a href="{{ route("logout") }}" class="nav-link active">
                            <i class="icon ion-ios-home-outline"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!-- nav-item -->
                @endif
               
                <li class="nav-item">
                    <a href="{{ route("logout") }}" class="nav-link active">
                        <i class="icon ion-power"></i>
                        <span>Log Out</span>
                    </a>
                </li><!-- nav-item -->
            </ul>
        </div><!-- #mainMenu -->
        <div id="emailMenu" class="tab-pane">
            <div class="pd-x-20 pd-y-10">
                <a href="#" class="btn btn-orange btn-block btn-compose">Compose Email</a>
            </div>
            <ul class="nav am-sideleft-menu">
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-filing-outline"></i>
                        <span>Inbox</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-filing-outline"></i>
                        <span>Drafts</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-paperplane-outline"></i>
                        <span>Sent</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-trash-outline"></i>
                        <span>Trash</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-filing-outline"></i>
                        <span>Spam</span>
                    </a>
                </li><!-- nav-item -->
            </ul>
  
            <label class="pd-x-20 tx-uppercase tx-11 mg-t-10 tx-orange mg-b-0 tx-medium">My Folder</label>
            <ul class="nav am-sideleft-menu">
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-folder-outline"></i>
                        <span>Updates</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-folder-outline"></i>
                        <span>Social</span>
                    </a>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="page-inbox.html" class="nav-link">
                        <i class="icon ion-ios-folder-outline"></i>
                        <span>Promotions</span>
                    </a>
                </li><!-- nav-item -->
            </ul>
        </div><!-- #emailMenu -->
        <div id="chatMenu" class="tab-pane">
            <div class="chat-search-bar">
                <input type="search" class="form-control wd-150" placeholder="Search chat...">
                <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
            </div><!-- chat-search-bar -->
  
            <label class="pd-x-15 tx-uppercase tx-11 mg-t-20 tx-orange mg-b-10 tx-medium">Recent Chat History</label>
            <div class="list-group list-group-chat">
                <a href="#" class="list-group-item">
                    <div class="d-flex align-items-center">
                        <img src="../img/img6.jpg" class="wd-32 rounded-circle" alt="">
                        <div class="mg-l-10">
                            <h6>Russell M. Evans</h6>
                            <span>Tuesday, 10:33am</span>
                        </div>
                    </div><!-- d-flex -->
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain...</p>
                </a><!-- list-group-item -->
 
            </div><!-- list-group -->
            <span class="d-block pd-15 tx-12">Loading messages...</span>
  
        </div><!-- #chatMenu -->
        <div id="settingMenu" class="tab-pane">
            <div class="pd-x-15">
                <label class="tx-uppercase tx-11 mg-t-10 tx-orange mg-b-15 tx-medium">Quick Settings</label>
                <div class="bd pd-15">
                    <h6 class="tx-13 tx-normal tx-gray-800">Daily Newsletter</h6>
                    <p class="tx-12">Get notified when someone else is trying to access your account.</p>
                    <div class="toggle toggle-light warning"></div>
                </div><!-- bd -->
            </div>
        </div><!-- #settingMenu -->
    </div><!-- tab-content -->
</div><!-- am-sideleft -->
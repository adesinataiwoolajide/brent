<div class="am-header">
    <div class="am-header-left">
        <a id="naviconLeft" href="#" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconLeftMobile" href="#" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
        <?php 
        $bcode = Auth::user()->level; ?>
        @if($bcode == 1)
            <a href="{{ route("admin.dashboard") }}" class="am-logo">Brent</a>
        @elseif($bcode == 2)
            <a href="{{ route("manager.dashboard") }}" class="am-logo">Brent</a>
        @elseif($bcode == 3)
            <a href="" class="am-logo">Brent</a>
        @elseif($bcode == 4)
            <a href="" class="am-logo">Brent</a>
        @endif
    </div><!-- am-header-left -->

    <div class="am-header-right">
        
        <div class="dropdown dropdown-profile">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
                <?php $name = Auth::user()->username; ?>
                <span class="logged-name"><span class="hidden-xs-down"><?php echo $name ?></span> <i class="fa fa-angle-down mg-l-3"></i></span>
            </a>
            <div class="dropdown-menu wd-200">
                <ul class="list-unstyled user-profile-nav">
                    <li><a href="{{ route("logout") }}"><i class="icon ion-power"></i> Sign Out</a></li>   
                </ul>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </div><!-- am-header-right -->
</div><!-- am-header -->
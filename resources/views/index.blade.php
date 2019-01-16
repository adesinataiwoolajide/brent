@extends('layouts.login')
@section('content')
    <div class="am-signin-wrapper">
       
        <div class="am-signin-box">
           
            <div class="row no-gutters">
               
                <div class="col-lg-5">
                    <div>
                        <h2>Brent</h2>
                        <p>Admin Template</p>
                        <p>Company Details</p>
                        <hr>
                        {{-- <p>Don't have an account? <br> <a href="page-signup.html">Sign up Now</a></p> --}}
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <form action="{{ route('login')}}" method="POST">
                        {{ csrf_field() }}
                        <h5 class="tx-gray-800 mg-b-25">Signin to Your Account</h5>
                        @include('partials.message')
                        <div class="form-group">
                            <label class="form-control-label">Email:</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter your email address">
                        </div><!-- form-group -->

                        <div class="form-group">
                            <label class="form-control-label">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                        </div><!-- form-group -->
                        {{-- <div class="form-group mg-b-20"><a href="#">Reset password</a></div> --}}
                        <button type="submit" class="btn btn-block">Sign In</button>
                    </form>
                </div><!-- col-7 -->
               
            </div><!-- row -->
            <p class="tx-center tx-white-5 tx-12 mg-t-15">Copyright &copy; <?php echo date('Y') ?>. All Rights Reserved. </p>
        </div><!-- signin-box -->
    </div><!-- am-signin-wrapper -->
@endsection 
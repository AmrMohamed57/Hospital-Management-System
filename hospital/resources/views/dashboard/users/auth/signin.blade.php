@extends('dashboard.layouts.master2')
@section('css')
    <style>
        .panel {display: none;}
    </style>
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('title')
    تسجيل الدخول
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="{{URL::asset('assets/img/media/hospital.jpeg')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1></div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2>{{trans('Dashboard/login_trans.welcome')}}</h2>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">{{trans('Dashboard/login_trans.Select_Enter')}}</label>
                                                <select class="form-control" id="sectionChooser">
                                                    <option value="" selected disabled>{{trans('Dashboard/login_trans.Choose_list')}}</option>
                                                    <option value="user">دخول الادمن</option>
                                                    <option value="doctor">دخول دكتور </option>
                                                    <option value="ray_employee">دخول دكتور اشعه </option>
                                                    <option value="lab_employee">دخول دكتور المختبر  </option>
                                                    <option value="patient">دخول مريض</option>
                                                </select>
                                            </div>
                                            {{--form user--}}
                                            <div class="panel" id="user">
                                                <h2>دخول الادمن</h2>
                                                <form method="POST" action="{{ route('login.user') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>الاميل</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>كلمه المرور</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block">تسجيل دخول</button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i>التسجيل بواسطه الفيس </button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i>التسجيل بواسطه تويتر</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href="">هل نسيت كلمه المرور ؟</a></p>
                                                    <p>هل ليس لديك حساب ؟ <a href="{{ url('/' . $page='signup') }}">انشاء حساب جديد</a></p>
                                                </div>
                                            </div>
                                            {{--form Doctor--}}
                                            <div class="panel" id="doctor">
                                                <h2>دخول دكتور</h2>
                                                <form method="POST" action="{{ route('login.doctor') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>الاميل</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>كلمه المرور</label>
                                                        <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div>
                                                    <button type="submit" class="btn btn-main-primary btn-block">تسجيل دخول</button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i>التسجيل بواسطه الفيس </button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i>التسجيل بواسطه تويتر</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href="">هل نسيت كلمه المرور ؟</a></p>
                                                    <p>هل ليس لديك حساب ؟ <a href="{{ url('/' . $page='signup') }}">انشاء حساب جديد</a></p>
                                                </div>
                                            </div>
                                            {{-- form ray employee --}}
                                            <div class="panel" id="ray_employee">
                                                <h2>دخول دكتور اشعة</h2>
                                                <form method="POST" action="{{ route('login.ray_employee') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>الاميل</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>كلمه المرور</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block">تسجيل دخول</button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i>التسجيل بواسطه الفيس </button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i>التسجيل بواسطه تويتر</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href="">هل نسيت كلمه المرور ؟</a></p>
                                                    <p>هل ليس لديك حساب ؟ <a href="{{ url('/' . $page='signup') }}">انشاء حساب جديد</a></p>
                                                </div>
                                            </div>
                                            {{-- form lab employee --}}
                                            <div class="panel" id="lab_employee">
                                                <h2>دخول دكتور المختبر</h2>
                                                <form method="POST" action="{{ route('login.lab_employee') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>الاميل</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>كلمه المرور</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block">تسجيل دخول</button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i>التسجيل بواسطه الفيس </button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i>التسجيل بواسطه تويتر</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href="">هل نسيت كلمه المرور ؟</a></p>
                                                    <p>هل ليس لديك حساب ؟ <a href="{{ url('/' . $page='signup') }}">انشاء حساب جديد</a></p>
                                                </div>
                                            </div>

                                            {{-- form Patient --}}
                                            <div class="panel" id="patient">
                                                <h2>دخول مريض</h2>
                                                <form method="POST" action="{{ route('login.patient') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>الاميل</label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>كلمه المرور</label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block">تسجيل دخول</button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i>التسجيل بواسطه الفيس </button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i>التسجيل بواسطه تويتر</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href="">هل نسيت كلمه المرور ؟</a></p>
                                                    <p>هل ليس لديك حساب ؟ <a href="{{ url('/' . $page='signup') }}">انشاء حساب جديد</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>
@endsection
@section('js')


    <script>
        $('#sectionChooser').change(function(){
            var myID = $(this).val();
            $('.panel').each(function(){
                myID === $(this).attr('id') ? $(this).show() : $(this).hide();
            });
        });
    </script>
@endsection

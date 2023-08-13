@extends('back.index')

@section('title')
ویرایش کاربر
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb bgcolor">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}"> خانه </a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.users')}}">مدیریت کاربران </a></li>
                                <li class="breadcrumb-item active" aria-current="page">پروفایل کاربر </li>
                            </ol>
                        </nav>

                    <h4 class="page-title">ویرایش کاربر</h4>
                </div>
            </div>

        </div>
        <!-- Page Title Header Ends-->


        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">


                        <form action="{{route('admin.profileupdate',$user->id)}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="title">نام و نام خانوادگی</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label for="title">ایمیل</label>
                                <input type="email" class="form-control"
                                    name="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="title">نام کاربری </label>
                                <input type="text" class="form-control"
                                    name="u_name" value="{{$user->u_name}}">
                            </div>
                            <div class="form-group">
                                <label for="title">رمز ورود</label>
                                <input type="password" class="form-control"
                                    name="password">
                            </div>

                            <div class="form-group">
                                <label for="title">تکرار رمز ورود</label>
                                <input type="password"
                                    class="form-control"
                                    name="password_confirmation">
                            </div>


                            <div class="form-group">
                                <label for="title"></label>
                                <button type="submit" class="btn btn-success">ویرایش پروفایل</button>
                                <a href="{{route('admin.users')}}" class="btn btn-warning"> انصراف </a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    @include('back.footer')
</div>
@endsection
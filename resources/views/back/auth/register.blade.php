@extends('back.index')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <nav aria-label="breadcrumb ">
                      <ol class="breadcrumb bgcolor">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
                      </ol>
                    </nav>

                    <h4 class="page-title">پنل مدیریت</h4>

                </div>
            </div>

        </div>
        <!-- Page Title Header Ends-->


        <div class="row">
        <div class="d-flex justify-content-center">
            <form action="{{route('register')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">نام و نام خانوادگی</label>
                    <input type="text" class="form-control"  name="name" value="{{old('name')}}">
                </div>

                <div class="form-group">
                    <label for="title">ایمیل</label>
                    <input type="email" class="form-control"  name="email"
                    value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="title">نام کاربری </label>
                    <input type="text" class="form-control" name="u_name"
                    value="{{old('u_name')}}">
                </div>
                <div class="form-group">
                    <label for="title">رمز ورود</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <label for="title">تکرار رمز ورود</label>
                    <input type="password" class="form-control"
                    name="password_confirmation">
                </div>


                <div class="form-group">
                    <label for="title"></label>
                    <button type="submit" class="btn btn-success">ثبت نام</button>
                </div>

            </form>
        </div>
    </div>




    </div>
    <!-- content-wrapper ends -->
    @include('back.footer')
</div>
@endsection
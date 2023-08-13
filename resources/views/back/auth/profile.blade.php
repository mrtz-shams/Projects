@extends('front.index')
@section('content')
<section id="intro2" class="clearfix"></section>

<main class="container main2">
  <nav aria-label="breadcrumb ">
    <ol class="breadcrumb bgcolor">
      <li class="breadcrumb-item"><a href="#">خانه</a></li>
      <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
    </ol>
  </nav>




  @include('front.messages')

  <div class="d-flex justify-content-center">
    <form action="{{route('admin.profileupdate',$user->id)}}" method="POST">
    {{csrf_field()}}
      <div class="form-group">
        <label for="title">نام و نام خانوادگی</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}">
      </div>

      <div class="form-group">
        <label for="title">ایمیل</label>
        <input type="email" class="form-control" name="email"
          value="{{$user->email}}">
      </div>
      <div class="form-group">
        <label for="title">نام کاربری </label>
        <input type="text" class="form-control" name="u_name"
          value="{{$user->u_name}}">
      </div>
      <div class="form-group">
        <label for="title">رمز ورود</label>
        <input type="password" class="form-control" name="password">
      </div>

      <div class="form-group">
        <label for="title">تکرار رمز ورود</label>
        <input type="password" class="form-control" name="password_confirmation">
      </div>


      <div class="form-group">
        <label for="title"></label>
        <button type="submit" class="btn btn-success">ویرایش پروفایل</button>
      </div>

    </form>


  </div>
</main>
@endsection
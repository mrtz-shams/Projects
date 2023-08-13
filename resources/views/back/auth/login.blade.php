@extends('back.index')
@section('content')
<section id="intro2" class="clearfix"></section>

<main class="main-panel">
    <div class="page-header">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bgcolor">
                      <li class="breadcrumb-item"><a href="{{route('admin.index')}}">خانه</a></li>
                      <li class="breadcrumb-item active" aria-current="page">ورود </li>
                </ol>
            </nav>
            <h4 class="page-title">پنل مدیریت</h4>

    </div>





  <div class="d-flex justify-content-center">
    <form action="{{route('login')}}" method="POST">
      {{csrf_field()}}


      <div class="form-group">
        <label for="title">نام کاربری</label>
        <input type="text" class="form-control" name="u_name"
          value="{{old('u_name')}}">
      </div>

      <div class="form-group">
        <label for="title">رمز ورود</label>
        <input type="password" class="form-control" name="password">
      </div>

      <div class="form-group">
        <label for="title">مرا بخاطر بسپار</label>
        <input type="checkbox" class="form-check-input" name="remember">

      </div>

      <div class="form-group">
        <label for="title"></label>
        <button type="submit" class="btn btn-success">ورود</button>
      </div>

    </form>


  </div>
</main>
@endsection
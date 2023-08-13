@extends('back.index')

@section('title')
پروژه  جدید
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
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}"> خانه</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{route('admin.projects')}}">   مدیریت پروژه </a> </li>
                            <li class="breadcrumb-item active" aria-current="page">  پروژه جدید  </li>

                        </ol>
                </nav>

                    <h4 class="page-title">پروژه  جدید</h4>
                </div>
            </div>

        </div>
        <!-- Page Title Header Ends-->


        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @include('back.messages')
                        <form action="{{route('admin.projects.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                            <div class="form-group">
                                <label for="title">عنوان  پروژه</label>
                                <input type="text" class="form-control" name="title"
                                    value="{{old('title')}}">
                            </div>

                            <div class="form-group">
                                <label for="title">  توضیحات:</label>
                                <textarea multiline class="form-control" name="description"></textarea>
                            </div>


                            <div class="form-group">
                                <label for="title"></label>
                                <button type="submit" class="btn btn-success">ذخیره</button>
                                <a href="{{route('admin.projects')}}" class="btn btn-warning"> انصراف </a>
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
@extends('back.index')

@section('title')
 پنل کاربری
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
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        </ol>
                    </nav>

                    <h4 class="page-title">پنل مدیریت</h4>
                </div>
            </div>

        </div>
        <!-- Page Title Header Ends-->


        <div class="row">

            صفحه نخست ادمین - نمایش گزارشات
        </div>




    </div>
    <!-- content-wrapper ends -->
    @include('back.footer')
</div>
@endsection
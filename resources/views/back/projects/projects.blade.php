@extends('back.index')

@section('title')
مدیریت پروژه ها
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
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">مدیریت پروژه ها </li>
                        </ol>
                    </nav>

                    <h4 class="page-title">مدیریت پروژه ها</h4>

                </div>
                <div class=" float-right">
                    <a href="{{route('admin.projects.create')}}" class="btn btn-success btn-fw  ">پروژه
                         جدید</a>
                </div>
            </div>

        </div>
        <!-- Page Title Header Ends-->


        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">

                <div class="card">

                    <div class="card-body">
                        @include('back.messages')

                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th> عنوان پروژه</th>
                                    <th> توضیحات </th>
                                    <th>مجری پروژه</th>
                                    <th> وضعیت</th>
                                    <th>مدیریت</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($projects as $project)
                                    @switch($project->status)
                                        @case(1)
                                        @php
                                        $url = route('admin.project.status',$project->id);
                                        $status = '<a href="'.$url.'" class="badge badge-success">فعال</a>' @endphp
                                        @break
                                        @case(0)
                                        @php
                                        $url = route('admin.project.status',$project->id);
                                        $status = '<a href="'.$url.'" class="badge badge-warning">غیر فعال</a>' @endphp
                                        @break
                                        @default
                                    @endswitch
                               
                                <tr>
                                    <td > <a href="{{route('admin.project.show',$project->id)}}" >{{$project->title}}</a></td>
                                    <td ><?php  echo substr($project->description,0,41).' .  .  .  '; ?></td>
                                    <td>{{$project->user->name}}</td>
                                    <td>{!!$status!!}</td>
                                    
                                    <td>
                                        <a href="{{route('admin.projects.edit',$project->id)}}"
                                            class="badge badge-success">ویرایش</a>
                                        <a href="{{route('admin.projects.destroy',$project->id)}}"
                                            onclick="return confirm('آیا آیتم مورد نظر حذف شود');"
                                            class="badge badge-warning"> حذف </a>
                                        <a href="{{route('admin.project.show',$project->id)}}"
                                            class="badge badge-success"> جزئیات </a>


                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                    {{$projects->links()}}
                </div>
            </div>


        </div>




    </div>
    <!-- content-wrapper ends -->
    @include('back.footer')
</div>
@endsection
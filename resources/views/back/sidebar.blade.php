<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="/back/assets/images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name"><?php if(auth()->check()) echo auth()->user()->name  ?> </p>
                    <p class="designation"> <?php if(auth()->check() && auth()->user()->role == 1) echo 'مدیر'; else echo 'کاربر'; ?> </p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">منوی اصلی</li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title"> پنل مدیریت</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    @if(auth()->check())
                        <li class="nav-item"><a href="{{route('admin.profile', Auth::user()->id)}}" class="nav-link">پروفایل کاربری</a></li>

                        <li class="nav-item">
                                <form action="{{route('logout')}}" method="POST">
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-success">خروج</button>
                                </form>
                        </li>

                    @else
                        <li class="nav-item"><a href="{{route('register')}}" class="nav-link">ثبت نام</a></li>
                        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">ورود</a></li>
                    @endif
                </ul>
            </div>
        </li>
        @if(auth()->check())
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">مدیریت سازمانی</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.projects')}}">پروژه ها</a>
                            </li>
                            @if(auth()->user()->role == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.users')}}">کاربران</a>
                                </li>
                            @endif
                    </ul>
                </div>

            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">المانهای فرم</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">نمودارها</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">جدولها</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">آیکونها</span>
            </a>
        </li>
    </ul>
</nav>
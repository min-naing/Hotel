@include('layout/head')

@include('layout/bheader')

    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">@yield('nav')</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="{{url('/')}}">HOME</a></li>
                <li class="active">@yield('nav_name')</li>
            </ul>
        </div>
    </div>
    </div>

    @yield('content')

@include('layout/bfooter');

@include('layout/foot')
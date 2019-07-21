<!doctype html>
<html lang="en">
<head>
    @include('includes.admin.head')
</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    @include('includes.admin.headerNavigation')
    <div class="main-container">

        @include('includes.admin.sidebarNavigation')
        

        @yield('content')
    </div>
</div>
    @include('includes.admin.script')
</body>
</html>

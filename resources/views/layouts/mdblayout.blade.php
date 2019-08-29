<!doctype html>
<html lang="en">
<head>
    @include('includes.admin.head')
</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    <div class="main-container">
        @yield('content')
    </div>
</div>
    @include('includes.admin.script')
</body>
</html>

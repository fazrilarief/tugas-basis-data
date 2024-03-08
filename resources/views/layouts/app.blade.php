<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body id="page-top">
    @include('sweetalert::alert')
    @yield('content')
    @include('includes.script')
</body>


</html>

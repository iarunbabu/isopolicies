<!DOCTYPE html>
<html>
<head>
@include('layout.head')
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
           @include('layout.header')
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
       @yield('content')
        </div>
    </div>
   @include('layout.footer')
</body>
</html>

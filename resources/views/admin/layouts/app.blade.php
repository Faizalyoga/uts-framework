<!DOCTYPE html>
<html lang="en">

@extends('admin.layouts.head')

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.layouts.header')

        <!-- ========== Left Sidebar Start ========== -->
        @extends('admin.layouts.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- JAVASCRIPT -->
    @extends('admin.layouts.script')

</body>

</html>
<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    @include('includes.header')
{{--    @section('title', 'App Page')--}}
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
@include('includes.header-mobile')
<!-- end:: Header Mobile -->

<!-- begin Aside -->
@include('includes.sidebar')
<!-- end:: Aside -->

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

    <!-- begin:: Header -->
    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

        <!-- begin:: Header Menu -->
    @include('includes.navbar.header-menu')
    <!-- end:: Header Menu -->

        <!-- begin:: Header Topbar -->
    @include('includes.navbar.header-topbar')
    <!-- end:: Header Topbar -->
    </div>
    <!-- end:: Header -->

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Subheader -->
    @include('includes.navbar.Sub-header')
    <!-- end:: Subheader -->
        <!-- begin:: Content -->
    @yield('content')

    <!-- end:: Content -->

    <!-- begin:: Footer -->
@include('includes.footer')
<!-- end:: Footer -->
</div>
</div>

<!-- end:: Page -->

<!-- begin::Quick Panel -->
@include('includes.navbar.quick-panel')
<!-- end::Quick Panel -->
<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->

<!-- begin::Sticky Toolbar -->
@include('includes.toolbar')
<!-- end::Sticky Toolbar -->

<!--Begin:: Chat-->
@include('extras.chat')
<!--ENd:: Chat-->
@include('includes.scripts')
</body>
</html>
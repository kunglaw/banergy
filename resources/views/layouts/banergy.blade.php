<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@include("components/head")

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    @include("components/header")

    @include("components/sidebar")

    <!-- BEGIN: Content-->
    @yield("content")
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <i class="ft-heart pink"></i><span
                    id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->

    @include("components/js_under")

</body>
<!-- END: Body-->

</html>
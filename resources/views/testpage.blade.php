<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@include("components/head")

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    @include("components/header")

    @include("components/menu")

    <!-- BEGIN: Content-->
    <div class="app-content content">

        <div class="content-wrapper">
            <div class="content-body">
                <section class="card">
                    <div class="card-body">
                        <h1> Content Title </h1>
                    </div>
                </section>
            </div>
        </div>
    </div>
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


    <!-- BEGIN: Vendor JS-->
    <script src="<?=url('banergy-assets/app-assets/vendors/js/material-vendors.min.js')?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=url('banergy-assets/app-assets/js/core/app-menu.js')?>"></script>
    <script src="<?=url('banergy-assets/app-assets/js/core/app.js')?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=url('banergy-assets/app-assets/js/scripts/pages/material-app.js')?>"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
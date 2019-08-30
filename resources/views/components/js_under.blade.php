<!-- BEGIN: Vendor JS-->
<script src="<?=url('banergy-assets/app-assets/vendors/js/material-vendors.min.js')?>"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<?php $js_vendor = !empty($js_vendor) ? $js_vendor : "/components/js_vendor" ?>
<?= View::make($js_vendor) ?>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?=url('banergy-assets/app-assets/js/core/app-menu.js')?>"></script>
<script src="<?=url('banergy-assets/app-assets/js/core/app.js')?>"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?=url('banergy-assets/app-assets/js/scripts/pages/material-app.js')?>"></script>
<!-- END: Page JS-->
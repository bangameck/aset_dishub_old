<?php
include_once '_func/func.php';
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?= template('head'); ?>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?= template('top_bar'); ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?= template('menu'); ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <?= modul($_GET['m']); ?>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php template('foot'); ?>
    <!-- END: Footer-->

<!-- BEGIN: JS-->
<?php template('js'); ?>
<!-- BEGIN: JS-->
    

</body>
<!-- END: Body-->

</html>
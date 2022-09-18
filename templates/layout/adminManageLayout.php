<?php
ob_start(); // To allow setting header when there's already page contents rendered

?>
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$titleDescription = ' - Admin - Shelbourne legal';

$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
        <?= $titleDescription ?>:
    </title>
    <?= $this->Html->meta('icon', $this->Url->build('/logo.png', ['fullBase' => true])); ?>
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
          rel="stylesheet">

    <?= $this->Html->css(['admin', 'fontawesome-free/css/all.min', 'shelbourne']) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <!-- Common jquery plugin -->
    <?= $this->Html->script('jquery-3.6.0.min') ?>

</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- 1.Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

        <div id="logo" class="mt-5 pt-5">
            <?= $this->Html->link('<div id="company_name">Shelbourne Legal</div>', ['controller' => 'Admins', 'action' => 'dashboard'], ['escape' => false]) ?>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider my-0 mt-4">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= ($controller == 'Admins' && $action == 'dashboard') ? 'active' : '' ?>">
            <?= $this->Html->link(__('<i class="fas fa-fw fa-home"></i> Dashboard'), ['controller' => 'Admins', 'action' => 'dashboard'], ['class' => "nav-link", 'escape' => false]) ?>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- 1-Nav Item - Clients Collapse Menu -->

        <!-- 2-Nav Item - Bookings Collapse Menu -->
        <li class="nav-item <?= ($controller == 'Bookings' && $action != 'dashboard') ? 'active' : '' ?>">
            <a class="nav-link <?= ($controller == 'Bookings' && $action != 'dashboard') ? '' : 'collapsed' ?>" href="#"
               data-toggle="collapse" data-target="#collapseBookings" aria-expanded="true" aria-controls="collapseBookings">
                <i class="fas fa-fw fa-clock"></i>
                <span>Bookings</span>
            </a>
            <div id="collapseBookings" class="collapse<?= ($controller == 'Bookings' && $action != 'dashboard') ? ' show' : '' ?>"
                 aria-labelledby="headingBookings" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Bookings</h6>
                    <?= $this->Html->link(__('Calendar Bookings'), ['controller' => 'Bookings', 'action' => 'calendar'], ['class' => 'collapse-item']) ?>
                    <?= $this->Html->link(__('List Bookings'), ['controller' => 'Bookings', 'action' => 'index'], ['class' => 'collapse-item']) ?>
                    <?= $this->Html->link(__('Add a Booking'), ['controller' => 'Bookings', 'action' => 'add'], ['class' => 'collapse-item']) ?>
                </div>
            </div>
        </li>

        <!-- 3-Nav Item - Admin account management Collapse Menu-->
        <li class="nav-item <?= ($controller == 'Admins' && $action != 'dashboard') ? 'active' : '' ?>">
            <a class="nav-link <?= ($controller == 'Admins' && $action != 'dashboard') ? '' : 'collapsed' ?>" href="#"
               data-toggle="collapse" data-target="#collapseAdmins" aria-expanded="true"
               aria-controls="collapseAdmins">
                <i class="fas fa-user-cog"></i>
                <span>Admins account</span>
            </a>
            <div id="collapseAdmins"
                 class="collapse<?= ($controller == 'Admins' && $action != 'dashboard') ? ' show' : '' ?>"
                 aria-labelledby="headingAdmins" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admins account</h6>
                    <?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index'], ['class' => 'collapse-item']) ?>
                    <?= $this->Html->link(__('Add an Admin'), ['controller' => 'Admins', 'action' => 'add'], ['class' => 'collapse-item']) ?>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- 2.Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- 2.1 Topbar -->
            <nav class="navbar navbar-expand bg-white navbar-light topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 text-shelbourne">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->


                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                            <span class="d-none d-lg-inline font-weight-bolder text-gray-600 small mr-2">Hi,Admin <?= $this->Identity->get('username');  ?></span>
                        </a>
                    </li>

                    <li class="nav-item mt-3">
                        <?= $this->Html->link(__('<i class="fas fa-sign-out-alt"></i>Log out'), ['controller' => 'Admins', 'action' => 'logout'], [ 'data-toggle'=>"modal",'data-target'=>"#logoutModal",'escape'=>false,'class' => 'btn btn-danger float-right ml-3']) ?>
                    </li>


                </ul>

            </nav>
            <!-- End of Topbar -->


            <!-- 2.2  Main content -->
            <main>
                <div class="container-fluid">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </main>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>This project belongs to <span
                            class="font-weight-bolder">Shelbourne Legal </span> company</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Ready to Log out?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to quit this Admin system.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <?= $this->Html->link(__('Logout'), ['controller' => 'Admins', 'action' => 'logout'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
</div>

<!-- Logged-out Modal-->
<div class="modal fade" id="loggedOutModal" tabindex="-1" role="dialog" aria-labelledby="loggedOutModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loggedOutModalLabel">Logged out</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">You have logged out successfully.</div>
        </div>
    </div>
</div>



<div id="currentAction" style="display: none;"><?= $action ?></div>
<div id="currentController" style="display: none;"><?= $controller ?></div>


<!--  JS  -->
<?= $this->Html->script('bootstrap.min') ?>


<?= $this->Html->script('admin') ?>

<?= $this->fetch('script') ?>


</body>
</html>





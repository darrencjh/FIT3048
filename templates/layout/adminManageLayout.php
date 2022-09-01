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

$cakeDescription = 'Admin for management';
$controller= $this->request->getParam('controller');
$action= $this->request->getParam('action');
//echo $controller;//Services
//echo $action;//add
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css(['font-awesome.min']) ?>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
          rel="stylesheet">

    <?= $this->Html->css(['admin']) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <!-- Common jquery plugin -->
    <?= $this->Html->script('jquery-3.3.1.min') ?>

</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

        <div id="logo" class="mt-5 pt-5">
            <?= $this->Html->link('<div id="company_name">Healing The Spirit</div>', ['controller' => 'Admins', 'action' => 'dashboard'],['escape'=> false]) ?>
        </div>
        <!-- Sidebar - Brand -->

        <!-- Divider -->
        <hr class="sidebar-divider my-0 mt-4">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= ($controller == 'Admins' && $action=='dashboard') ? ' active' : '' ?>">
             <?= $this->Html->link(__('<i class="fas fa-fw fa-home"></i> Dashboard'), ['controller' => 'Admins','action' => 'dashboard'],['class'=>"nav-link",'escape'=>false]) ?>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- 1-Nav Item - Clients Collapse Menu -->
        <li class="nav-item <?= ($controller == 'Clients') ? ' active' : '' ?>">
            <a class="nav-link <?= ($controller == 'Clients') ? '' : ' collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseClients" aria-expanded="false" aria-controls="collapseClients">
                <i class="fas fa-fw fa-users"></i>
                <span>Clients</span>
            </a>
            <div id="collapseClients" class="collapse <?= ($controller == 'Clients') ? ' show' : '' ?>" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Clients</h6>
                    <?= $this->Html->link(__('List Clients'), ['controller' => 'Clients','action' => 'index'],['class'=> 'collapse-item']) ?>
                    <?= $this->Html->link(__('Add new Client'), ['controller' => 'Clients','action' => 'adminAdd'],['class'=>'collapse-item']) ?>
                </div>
            </div>
        </li>


        <!-- 2-Nav Item - Services Collapse Menu -->
        <li class="nav-item<?= ($controller == 'Services') ? ' active' : '' ?>">
            <a class="nav-link <?= ($controller == 'Services') ? '' : ' collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseServices" aria-expanded="false" aria-controls="collapseServices">
                <i class="fas fa-fw fa-list"></i>
                <span>Services</span>
            </a>
            <div id="collapseServices" class="collapse<?= ($controller == 'Services') ? ' show' : '' ?>" aria-labelledby="headingServices" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Services</h6>
                    <?= $this->Html->link(__('List Services'), ['controller' => 'Services','action' => 'index'],['class'=>'collapse-item']) ?>
                    <?= $this->Html->link(__('Add new Service'), ['controller' => 'Services','action' => 'add'],['class'=>'collapse-item']) ?>
                </div>
            </div>
        </li>



        <!-- 3-Nav Item - Sessions Collapse Menu -->
        <li class="nav-item<?= ($controller == 'Sessions') ? ' active' : '' ?>">
            <a class="nav-link <?= ($controller == 'Sessions') ? '' : ' collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseSessions" aria-expanded="false" aria-controls="collapseSessions">
                <i class="fas fa-fw fa-calendar-check"></i>
                <span>Sessions</span>
            </a>
            <div id="collapseSessions" class="collapse<?= ($controller == 'Sessions') ? ' show' : '' ?>" aria-labelledby="headingSessions" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Sessions</h6>
                    <?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions','action' => 'index'],['class'=>'collapse-item']) ?>
                    <?= $this->Html->link(__('Add new session'), ['controller' => 'Sessions','action' => 'add'],['class'=>'collapse-item']) ?>
                </div>
            </div>
        </li>

        <!-- 4-Nav Item - Bookings Collapse Menu -->
        <li class="nav-item<?= ($controller == 'Bookings') ? ' active' : '' ?>">
            <a class="nav-link <?= ($controller == 'Bookings') ? '' : ' collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseBookings" aria-expanded="false" aria-controls="collapseBookings">
                <i class="fas fa-fw fa-clock"></i>
                <span>Bookings</span>
            </a>
            <div id="collapseBookings" class="collapse<?= ($controller == 'Bookings') ? ' show' : '' ?>" aria-labelledby="headingBookings" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Bookings</h6>
                    <?= $this->Html->link(__('List Bookings'), ['controller' => 'Bookings','action' => 'index'],['class'=>'collapse-item']) ?>
                    <?= $this->Html->link(__('Add new Booking'), ['controller' => 'Bookings','action' => 'adminAdd'],['class'=>'collapse-item']) ?>
                </div>
            </div>
        </li>

        <!-- 5-Nav Item - Queries Collapse Menu-->
        <li class="nav-item<?= ($controller == 'Queries') ? ' active' : '' ?>">
            <a class="nav-link <?= ($controller == 'Queries') ? '' : ' collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseQueries" aria-expanded="false" aria-controls="collapseQueries">
                <i class="fas fa-fw fa-question"></i>
                <span>Queries</span>
            </a>
            <div id="collapseQueries" class="collapse<?= ($controller == 'Queries') ? ' show' : '' ?>" aria-labelledby="headingQueries" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Queries</h6>
                    <?= $this->Html->link(__('List Queries'), ['controller' => 'Queries','action' => 'index'],['class'=>'collapse-item']) ?>
                    <?= $this->Html->link(__('Send email to respond'), ['controller' => 'Queries','action' => 'email'],['class'=>'collapse-item']) ?>
                </div>
            </div>
        </li>

        <!-- 6-Nav Item - Blogs Collapse Menu-->
        <li class="nav-item<?= ($controller == 'Blogs') ? ' active' : '' ?>">
            <a class="nav-link <?= ($controller == 'Blogs') ? '' : ' collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseBlogs" aria-expanded="false" aria-controls="collapseBlogs">
                <i class="fas fa-fw fa-blog"></i>
                <span>Blogs</span>
            </a>
            <div id="collapseBlogs" class="collapse<?= ($controller == 'Blogs') ? ' show' : '' ?>" aria-labelledby="headingBlogs" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Blogs</h6>
                    <?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs','action' => 'index'],['class'=>'collapse-item']) ?>
                    <?= $this->Html->link(__('Add a Blog'), ['controller' => 'Blogs','action' => 'add'],['class'=>'collapse-item']) ?>

                </div>
            </div>
        </li>

        <!-- 6-Nav Item - Business Info Collapse Menu-->
        <li class="nav-item<?= ($controller == 'BusinessInfo') ? ' active' : '' ?>">
            <a class="nav-link <?= ($controller == 'BusinessInfo') ? '' : ' collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseBusinessInfo" aria-expanded="false" aria-controls="collapseBusinessInfo">
                <i class="fas fa-fw fa-info"></i>
                <span>Business Info</span>
            </a>
            <div id="collapseBusinessInfo" class="collapse<?= ($controller == 'BusinessInfo') ? ' show' : '' ?>" aria-labelledby="headingBusinessInfo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">BusinessInfo</h6>
                    <?= $this->Html->link(__('Edit Business Info'), ['controller' => 'BusinessInfo','action' => 'index'],['class'=>'collapse-item']) ?>
                </div>
            </div>
        </li>


        <!-- 7-Nav Item - Admin account management Collapse Menu-->
        <li class="nav-item<?= ($controller == 'Admins' && $action!='dashboard') ? ' active' : '' ?>">
            <a class="nav-link <?= ($controller == 'Admins' && $action!='dashboard') ? '' : ' collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseAdmins" aria-expanded="false" aria-controls="collapseAdmins">
                <i class="fas fa-user-cog"></i>
                <span>Admins account</span>
            </a>
            <div id="collapseAdmins" class="collapse<?= ($controller == 'Admins' && $action!='dashboard') ? ' show' : '' ?>" aria-labelledby="headingAdmins" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admins account</h6>
                    <?= $this->Html->link(__('List Admins'), ['controller' => 'Admins','action' => 'index'],['class'=>'collapse-item']) ?>
                    <?= $this->Html->link(__('Add an Admin'), ['controller' => 'Admins','action' => 'add'],['class'=>'collapse-item']) ?>
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

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand bg-white navbar-light topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->


                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                            <span class="d-none d-lg-inline font-weight-bolder text-gray-600 small mr-2">Hi,Admin <?= $admin_name ?></span>
<!--                                <i class="fa fa-sign-out-alt fa-sm fa-fw text-gray-400"></i>Log out-->

                        </a>
                    </li>

                    <li  class="nav-item mt-3">
                        <?= $this->Html->link(__('Log out'), ['controller'=>'Admins','action' => 'logout'], ['class' => 'btn btn-danger float-right ml-3 logout']) ?>
                    </li>


                </ul>

            </nav>
            <!-- End of Topbar -->
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
                    <span>This project belongs to <span class="font-weight-bolder">Healing the spirit </span> company</span>
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
                <h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <?= $this->Html->link(__('Logout'), ['controller'=>'Admins','action' => 'logout'], ['class' => 'btn btn-primary']) ?>
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



<!--header-->
<!--<header></header>-->

<!--/header-->



<!-- footer -->
<!--<footer></footer>-->
<!-- //footer -->


<!--            Pop up window-->
<div class="mask hide">
    <div class="prompt_box">
        <div class="prompt_title">
            <h3 class="pt-3 font-weight-bold"></h3>
            <span class="prompt_cancel"></span>
        </div>
        <div class="prompt_cont">
            <div class="prompt_text"></div>
            <a class="prompt_sure">Ok</a>
        </div>
    </div>
</div>
<div id="currentAction" style="display: none;"><?= $action ?></div>
<div id="currentController" style="display: none;"><?= $controller ?></div>

<!--  JS  -->
<script>
    <?php
    //form page just send query string to home page after submit a form
    //using action to distinguish which message to display
    $action = $this->request->getQuery('action','');
    if(!empty($action)){
    ?>
    $('.mask').removeClass('hide');
    $('.prompt_sure,.prompt_cancel').click(function () {
        $('.mask').addClass('hide');
    })
    <?php
    if($action=='respondQuerySuccess'){
    ?>
    $('.prompt_text').text('The response email has been sent.');
    <?php  }
    }
    ?>
</script>


<script>
    $(document).ready(function(){
        //console.log($(".show .collapse-item").attr("href"));//get the first element selected
        $(".show .collapse-item").each(function(){
            // console.log($(this).attr("href"));
            var hrefArray=$(this).attr("href").split('/');
            var actionFromLink=hrefArray[hrefArray.length-1].replace('-','').toLowerCase();

            if (actionFromLink==$("#currentController").text().toLowerCase() && $("#currentAction").text().toLowerCase()=='index'){
                //if index page clicked,actionFromLink will be controller name + action is index
                $(this).addClass('active');

            }else if(actionFromLink==$("#currentAction").text().toLowerCase()){
                //if other page clicked,the action(link) will match the action(method)
                $(this).addClass('active');
            }
        })

    });
</script>



<?= $this->Html->script('bootstrap.min') ?>


<?= $this->Html->script('admin') ?>

<?= $this->fetch('script') ?>


</body>
</html>





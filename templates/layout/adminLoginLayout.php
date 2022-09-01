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
 * @var \App\Model\Entity\BusinessInfo $businessInfo
 */
ob_start(); // To allow setting header when there's already page contents rendered

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="login in page">
    <meta name="author" content="Admin">

    <?= $this->Html->meta('csrfToken',$this->request->getAttribute('csrfToken')); ?>
    <title>Login</title>

    <?= $this->Html->css(['style-starter']) ?>

    <style>
        body{
            background: url("<?= $this->Url->build('/img/login/bg.png') ?>");
            background-size: cover;
        }

        #loginUsername,#loginUserPassword{
            height: 3rem;
            border:2px solid #fff;
            background-repeat: no-repeat;
            background-position: 2%;
            padding-left: 9%;
        }
        #loginUsername{
            background-image: url("<?= $this->Url->build('/img/login/username.png') ?>");
        }
        .msg-uname,.msg-pwd{
            height: 20px;
            color: red;
        }
        #loginUserPassword{
            background-image: url("<?= $this->Url->build('/img/login/pwd.png') ?>");

        }
        .form-control-input:focus{
            box-shadow: none;
        }
        input::-webkit-input-placeholder{
            color: #666; !important;

        }
        .form-button{
            height: 3rem;
        }

        .sub-log {
            width: 40px;
            border-radius: 20px 20px 0px 0px;
            border-top: 8px solid #000;
        }

    </style>

    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js') ?>
</head>

<!--class="bg-gradient-primary"-->
<body class="bg-gradient-primary">

<div class="container">
    <!-- Here's where I want my views to be displayed -->
    <?= $this->fetch('content') ?>


</div>

<!-- Error Message Modal-->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">You have logged out successfully.</div>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('bootstrap.min') ?>

<?= $this->fetch('script') ?>


</body>

</html>








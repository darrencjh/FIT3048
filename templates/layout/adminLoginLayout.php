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
$titleDescription = ' - Shelbourne legal';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
        <?= $titleDescription ?>
    </title>

    <?= $this->Html->meta('icon', $this->Url->build('/logo.png', ['fullBase' => true])); ?>
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>

    <?= $this->Html->css(['normalize.min', 'bootstrap','shelbourne','login']) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script('jquery-3.6.0.min') ?>
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
    <?= $this->Html->script('bootstrap.bundle.min') ?>
    <?= $this->fetch('script') ?>


</body>

</html>








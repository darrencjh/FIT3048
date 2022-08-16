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

$intakeformDescription = 'Intake Form -  Shelbourne legal';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $intakeformDescription ?>:
    </title>
    <?= $this->Html->meta('icon', $this->Url->build('/logo.png', ['fullBase' => true])); ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'bootstrap','fontawesome-free/css/all.min','intakeform']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script('jquery-3.6.0.min') ?>

</head>
<body>

    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <?= $this->Html->script('bootstrap.bundle.min'); ?>
    <?= $this->fetch('script') ?>

</body>
</html>

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

$titleDescription = '- Shelbourne legal';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
        <?= $titleDescription ?>
    </title>
    <?= $this->Html->meta('icon', $this->Url->build('/logo.png',['fullBase'=>true]));?>
    <?= $this->Html->meta('csrfToken',$this->request->getAttribute('csrfToken')); ?>

    <!--#01ab9d-->
    <?= $this->Html->css(['normalize.min', 'evo-calendar', 'bootstrap','fontawesome-free/css/all.min','shelbourne']) ?>

    <?= $this->Html->script('jquery-3.6.0.min') ?>

</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?= $this->Html->script('bootstrap.bundle.min') ?>
    <?= $this->fetch('script') ?>

</body>
</html>

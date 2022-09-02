<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="row">
    <div class="column-responsive column-80 ml-5">
        <div class="admins form content">
            <?= $this->Form->create($admin) ?>
            <fieldset>
                <legend><?= __('Add an Admin account') ?></legend>
                <?php
                    echo $this->Form->control('email', ['placeholder' => 'eg. example@email.com','pattern'=>'^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$']);
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg btn-primary']) ?>
            <?= $this->Html->link(__('List Admins'), ['action' => 'index'], ['class' => 'btn btn-lg btn-secondary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

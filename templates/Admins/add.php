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
                <div class="mb-3">
                    <div class="label required">
                        <label>Email</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="adminEmail" name="email" placeholder="eg. example@email.com" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
                    <div class="invalid-feedback" id="emailError">Please provide your email</div>
                </div>

                <div class="mb-3">
                    <div class="label required mt-3">
                        <label>Username</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="adminUsername" name="username" required>
                    <div class="invalid-feedback" id="usernameError">Please provide your username</div>
                </div>

                <div class="mb-3">
                    <div class="label required mt-3">
                        <label>Password</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="adminPassword" name="password" required>
                    <div class="invalid-feedback" id="passwordError">Please provide your password</div>
                </div>

            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg btn-shelbourne', 'id'=>'addAdminBtn']) ?>
            <?= $this->Html->link(__('List Admins'), ['action' => 'index'], ['class' => 'btn btn-lg btn-secondary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

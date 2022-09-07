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
                <legend><?= __('Edit Admin') ?></legend>
                <div class="mb-3">
                    <div class="label required">
                        <label>Email</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="adminEmail" name="email" value="<?= $admin->email?>" placeholder="eg. example@email.com" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
                    <div class="invalid-feedback" id="emailError">Please provide your email</div>
                </div>

                <div class="mb-3">
                    <div class="label required mt-3">
                        <label>Username</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="adminUsername" name="username" value="<?= $admin->username?>" required>
                    <div class="invalid-feedback" id="usernameError">Please provide your username</div>
                </div>

                <div class="mb-3">
                    <div class="label required mt-3">
                        <label>New Password</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="adminPassword" name="newPassword" value="" placeholder="New Password" required>
                    <div class="invalid-feedback" id="password">Please provide your new password</div>
                </div>

            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg btn-primary']) ?>
            <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-lg btn-secondary']) ?>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

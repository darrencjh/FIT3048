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
                <div class="label required">
                    <label>Email</label>
                </div>
                <?php echo $this->Form->control('email', ['label' => false, 'class' => "form-control bg-transparent fw-bold mt-2 mb-3", 'id' => "editAdminEmail", 'name' => "email",  'placeholder' => "eg. example@email.com",'required' => true, 'pattern'=>'^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$']);
                ?>
                <div class="invalid-feedback" id="emailError">Please provide your email</div>

                <div class="label required mt-3">
                    <label>Username</label>
                </div>
                <?php echo $this->Form->control('username', ['label' => false, 'class' => "form-control bg-transparent fw-bold mt-2 mb-3", 'id' => "editAdminUsername", 'name' => "username",'required' => true]);
                ?>
                <div class="invalid-feedback" id="usernameError">Please provide your username</div>

                <div class="label required mt-3">
                    <label>New Password</label>
                </div>
                <?php echo $this->Form->control('password', ['label' => false, 'value'=>'' ,'placeholder'=>'New Password', 'class' => "form-control bg-transparent fw-bold mt-2 mb-3", 'id' => "editAdminNewPassword", 'name' => "newPassword", 'required' => true]);
                ?>
                <div class="invalid-feedback" id="password">Please provide your new password</div>

            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg btn-primary']) ?>
            <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-lg btn-secondary']) ?>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

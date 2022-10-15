<?php
/**
 * @var \App\View\AppView $this
 */
echo $this->Html->script('login',['block'=>true]);
?>
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-md-9">
        <div class="card o-hidden border-0  my-5 bg-transparent" >

            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <!--   Title -->
                            <div class="text-center">
                                <h1><b>Shelbourne Legal</b></h1>
                                <h2>Reset Password</h2>
                            </div>
                            <?= $this->Flash->render() ?>


                            <?= $this->Form->create(null,['type'=>'post','class'=>'user']); ?>
                            <fieldset>
                                <div class="mt-5 font-weight-bold">Please enter your new password</div>
                                <?php
                                echo $this->Form->control('password',['label' => false,'class'=>"form-control bg-transparent font-weight-bold form-control-input mt-5",'id'=>"newPassword", 'name'=>"password", 'aria-describedby'=>"emailHelp",'placeholder'=>"New Password"]);
                                ?>
                            </fieldset>
                            <div class="mt-3 clearfix">
                                <?= $this->Form->button(__('Reset Password'),['class' => 'btn btn-light btn-block mt-5 form-button text-dark font-weight-bold text-uppercase','id'=>'id="sendCode"']) ?>
                            </div>
                            <?= $this->Form->end() ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

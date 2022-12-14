<?php
///**
// * @var \App\View\AppView $this
// */
echo $this->Html->script('login',['block'=>true]);
?>
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-md-9 col-xl-10">
        <div class="card border-0 my-5 bg-transparent" >

            <div class="card-body p-0 text-light">
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
                                echo $this->Form->control('password',['label' => false,'class'=>"form-control loginInput bg-transparent fw-bold mt-2",'id'=>"newPassword", 'name'=>"password", 'aria-describedby'=>"emailHelp",'placeholder'=>"New Password"]);
                                ?>
                            </fieldset>
                            <div class="mt-3 clearfix">
                                <?= $this->Form->button(__('Reset Password'),['class' => 'btn btn-lg btn-shelbourne w-100 w-lg-25 mt-2','id'=>'id="sendCode"']) ?>
                            </div>
                            <?= $this->Form->end() ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

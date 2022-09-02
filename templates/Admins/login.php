<?php
echo $this->Html->script('login',['block'=>true]);
?>


<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-md-9">
        <div class="card o-hidden border-0  my-5 bg-transparent" >

            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5 mt-5">
                            <div class="text-center">
                                <h1>
                                    <b>Shelbourne Legal</b>
                                </h1>
                                <!--    <h1 class="h1 text-dark mb-4 mt-5" id="login_companyname">Healing the Spirit</h1>-->
                                <h2>Admin Login </h2>
                            </div>

                            <?= $this->Form->create(null,['type'=>'post','class'=>'user']); ?>
                            <fieldset>
							    <div class="label required">
                                     <label>Username</label>
                                </div>
                                <?php echo $this->Form->control('username',['label' => false,'class'=>"form-control bg-transparent font-weight-bold form-control-input mt-2",'id'=>"loginUsername", 'name'=>"username", 'aria-describedby'=>"emailHelp",'placeholder'=>"Username"]);
                                ?>
								<div class="msg-uname mb-3"></div>

							    <div class="label required">
                                     <label>Password</label>
                                </div>
     							<?php echo $this->Form->control('password',['label' => false,'type'=>"password",'class'=>"form-control bg-transparent font-weight-bold form-control-input mt-2",'id'=>"loginUserPassword", 'name'=>"password", 'aria-describedby'=>"emailHelp",'placeholder'=>"Password"]);
                                ?>
								<div class="msg-pwd"></div>
                            </fieldset>
                            <?= $this->Form->button(__('Login'),['class' => 'btn btn-lg btn-shelbourne text-uppercase','id'=>'loginSubmit']) ?>
                            <?= $this->Html->link('Forget Password', ['controller' => 'Admins', 'action' => 'resetPasswordEmail'],['class'=>"btn  btn-lg btn-light text-uppercase float-end",'id'=>"forgetPassword",'target'=>"_blank"]) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!--            Pop up window-->
<!--<div class="mask hide">-->
<!--    <div class="prompt_box">-->
<!--        <div class="prompt_title">-->
<!--            <h3 class="pt-3 font-weight-bold">Hint</h3>-->
<!--            <span class="prompt_cancel"></span>-->
<!--        </div>-->
<!--        <div class="prompt_cont">-->
<!--            <div class="prompt_text"></div>-->
<!--            <a class="prompt_sure">Ok</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<script>
    <?php
    //form page just send query string to home page after submit a form
    //using action to distinguish which message to display
    $action = $this->request->getQuery('action','');
    if(!empty($action)){
    ?>
    $('.mask').removeClass('hide');
    $('.prompt_sure,.prompt_cancel').click(function () {
        $('.mask').addClass('hide');
    })
    <?php
    if($action=='resetPwdSuccess'){
    ?>
    $('.prompt_text').text('Your password has been reset,please login.');
    <?php
    }
    }
    ?>
</script>


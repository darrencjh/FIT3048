<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admins
 */
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
                                <h1><b>Shelbourne Legal</b></h1>
                                <h2>Reset Password</h2>
                            </div>
                            <?= $this->Flash->render() ?>

                            <fieldset>
                                <div class="mb-3 inputArea">
                                    <div class="label required">
                                        <label for="loginUsername">Please enter your email</label>
                                    </div>
<!--                                    <input type="text" class="form-control loginInput bg-transparent fw-bold mt-2"-->
<!--                                           id="adminEmail" name="email" placeholder="Email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>-->
<!--                                    <img src="--><?//= $this->Url->build('/img/login/username.png') ?><!--" alt="user icon"-->
<!--                                         class="loginIcon">-->
<!--                                    $this->Form->button(__('Send Code'),['class' => 'btn btn-lg btn-shelbourne w-100 w-lg-25 mt-2','id'=>'sendCode'])-->
<!--                                    <div class="invalid-feedback" id="msg-uname">Please provide your email</div>-->

                                    <?php
                                    echo $this->Form->control('email',['label' => false,'class'=>"form-control loginInput bg-transparent fw-bold mt-2",'id'=>"adminEmail" ,'pattern'=>'^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$','placeholder'=>"Email",'required'=>true]);
                                    ?>
                                    <?= $this->Form->button(__('Send Code'),['class' => 'btn btn-lg btn-shelbourne w-100 w-lg-25 mt-2','id'=>'sendCode']) ?>
                                </div>



<!--                                <div class="mb-3 inputArea">-->
<!--                                    <div class="label required">-->
<!--                                        <label for="loginUsername">Verification code from email</label>-->
<!--                                    </div>-->
<!--                                    <input type="text" class="form-control loginInput bg-transparent fw-bold mt-2"-->
<!--                                           id="verificationcode" name="code" placeholder="Verification Code" required>-->
<!--                                    <input type="text" class="form-control loginInput bg-transparent fw-bold mt-2"-->
<!--                                           id="adminId" name="adminId" placeholder="Verification Code" hidden>-->
<!--                                    <input type="text" class="form-control loginInput bg-transparent fw-bold mt-2"-->
<!--                                           id="validCode" name="validCode" placeholder="Verification Code" hidden>-->
<!--                                    <div class="invalid-feedback" id="msg-uname">Please provide your verification code from your email</div>-->
<!--                                </div>-->

                                <?= $this->Form->create(null,['type'=>'post','class'=>'user']); ?>
                                <div class="mt-5 font-weight-bold">Verification code from email</div>
                                <?php
                                echo $this->Form->control('code',['label' => false,'class'=>"form-control loginInput bg-transparent fw-bold mt-2",'id'=>"verificationcode", 'name'=>"code", 'aria-describedby'=>"emailHelp",'placeholder'=>"Verification Code"]);
                                echo $this->Form->control('adminId',['type' => 'hidden','id'=>'adminId']);
                                echo $this->Form->control('validCode',['type' => 'hidden','id'=>'validCode']);
                                ?>
                                <?= $this->Form->button(__('Reset Password'),['class'=>"btn btn-lg btn-shelbourne w-100 w-lg-25 mt-2",'id'=>"resetPassword"]) ?>
                                <?= $this->Form->end() ?>
                            </fieldset>
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
            <!--<h3 class="pt-3 font-weight-bold">Hint</h3>-->
<!--            <span class="prompt_cancel"></span>-->
<!--        </div>-->
<!--        <div class="prompt_cont">-->
<!--            <div class="prompt_text"></div>-->
<!--            <a class="prompt_sure">Ok</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



<script>
    $(function(){
        $('#sendCode').click(function (){
            $.ajax({
                method:"POST",
                url:"<?= $this->Url->build(['action'=>'sendCode']) ?>",
                data:{
                    email:$('#adminEmail').val()
                },
                headers:{
                    'X-CSRF-Token':$('meta[name="csrfToken"]').attr('content')
                },
                success: function (data) {
                    console.log(data);
                    $('.mask').removeClass('hide');
                    $('.prompt_sure,.prompt_cancel').click(function () {
                        $('.mask').addClass('hide');
                    })
                    if(data.emailValid){
                        $('.prompt_text').text('Valid email! A verification code has been sent ');
                        adminId.value=data.adminId;
                        validCode.value=data.code;

                    }else{
                        $('.prompt_text').text('Email does not exist! ');
                    }
                }

            })
        })
    });
</script>

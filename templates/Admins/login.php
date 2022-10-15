<?php
echo $this->Html->script('login', ['block' => true]);
?>


<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-md-9 col-xl-10">
        <div class="card border-0 my-5 bg-transparent">

            <div class="card-body p-0 text-light">
                <!-- Nested Row within Card Body -->
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <!--   Title -->
                            <div class="text-center">
                                <h1><b>Shelbourne Legal</b></h1>
                                <h2>Admin Login </h2>
                            </div>
                            <?= $this->Flash->render() ?>


                            <!--     Username+password      -->
                            <?= $this->Form->create(); ?>
                            <fieldset>
                                <div class="mb-3 inputArea">
                                    <div class="label required">
                                        <label for="loginUsername">Username</label>
                                    </div>
                                    <input type="text" class="form-control loginInput bg-transparent fw-bold mt-2"
                                           id="loginUsername" name="username" placeholder="Username" required>
                                    <img src="<?= $this->Url->build('/img/login/username.png') ?>" alt="user icon"
                                         class="loginIcon">
                                    <div class="invalid-feedback" id="msg-uname">Please provide your username</div>
                                </div>

                                <div class="mb-3 inputArea">
                                    <div class="label required">
                                        <label for="loginUserPassword">Password</label>
                                    </div>
                                    <input type="password" class="form-control loginInput bg-transparent fw-bold mt-2"
                                           id="loginUserPassword" name="password" placeholder="Password" required>
                                    <img src="<?= $this->Url->build('/img/login/pwd.png') ?>" alt="user icon"
                                         class="loginIcon">
                                    <div class="invalid-feedback" id="msg-pwd">Please provide your password</div>
                                </div>

                            </fieldset>
                            <div class="mt-3 clearfix">
                                <?= $this->Form->button(__('Login'), ['class' => 'btn btn-lg btn-shelbourne w-100 w-lg-25', 'id' => 'loginSubmit']) ?>
                                <?= $this->Html->link('Forget Password', ['controller' => 'Admins', 'action' => 'resetPasswordEmail'], ['class' => "btn btn-lg btn-shelbourne w-100 w-lg-25", 'id' => "forgetPassword", 'target' => "_blank"]) ?>
                            </div>
                            <?= $this->Form->end() ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<script>
    <?php
    // Cakephp method to the the url
    //form page just send query string to home page after submit a form
    //using action to distinguish which message to display
    $action = $this->request->getQuery('action', '');

    if(isset($loginResult) and $loginResult==false){
    ?>
    $("#msg-uname").text("")
    $("#loginUsername").addClass("is-invalid")

    $("#msg-pwd").text("")
    $("#loginUserPassword").addClass("is-invalid")
    <?php } ?>


</script>


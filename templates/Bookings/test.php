<?php
$this->assign('title', 'Test page');

?>
<style>
    #content{
        background: #ffffff;
        margin: 0;
        padding: 50px 90px 90px 90px;
        margin-bottom: 40px;
    }


    .main{
        background-color: #ededed !important;
        padding-top: 150px !important;
        padding-bottom: 50px !important;

    }
</style>

<div class="main">

    <div class="container">
        <div id="content">
            <h1>hello,this is a test page</h1>
            <?= $this->Html->image('https://d3v0px0pttie1i.cloudfront.net/uploads/user/logo/6737024/445e6b00.jpg', ['alt' => 'Shelbourne legal','class' => '']); ?>

        </div>

    </div>

</div>

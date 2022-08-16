<?php
$this->assign('title', 'Booking Feedback');

?>


<div class="container-xl mb-5">
    <div class="h4 my-5">Your booking is successfully submitted! Thank you for making a booking with us.</div>
    <div class="h4 my-5">Boooking information is sent to your email. Please confirm. If need changes,please contact us</div>
    <div class="text-center">
        <a class="btn btn-outline-shelbourne rounded-pill" target="_blank"
           href="https://shelbournelegal.com.au/contact/">Contack us</a>
    </div>
    <div class="h4 my-5">Next Step: Please fill in the intake form before your booking time.</div>
    <div class="text-center">
        <a class="btn btn-outline-shelbourne rounded-pill" target="_blank"
           href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'intakeform'], ['fullBase' => true]) ?>">Fill in Intake Form</a>
    </div>
</div>



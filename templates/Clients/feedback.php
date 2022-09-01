<?php
$this->assign('title', 'Intake Form Submitted');

?>
<div class="bg-image">
    <div class="feedback-title-container">
<!--        <div class="feedback-title">-->
<!--            <div class="fw-lighter">--><?//= $pageTitle ?><!--</div>-->
<!--        </div>-->
    </div>
</div>

<div class="container-xl mb-5">
    <div class="h1 my-5">Thank You!</div>
    <div class="h4 my-5">Your information has been successfully submitted! Thank you for your time</div>
    <div class="h4 my-5">A confirmation email has been sent to the email provided. If there is any issues or questions, do contact us</div>
    <div class="h4 my-5">If you have not made an appointment with us, please do so using the button below</div>
    <div class="text-center">
        <a class="btn btn-outline-shelbourne rounded-pill" target="_blank"
           href="https://shelbournelegal.com.au/contact/">Contact us</a>
    </div>
    <div class="text-center mt-4">
        <a class="btn btn-outline-shelbourne rounded-pill" target="_blank"
           href="<?= $this->Url->build(['controller' => 'Bookings', 'action' => 'choose'], ['fullBase' => true]) ?>">Make an appointment</a>
    </div>
<!--    <div class="h4 my-5">Next Step: Please fill in the intake form before your booking time.</div>-->
</div>



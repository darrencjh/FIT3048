<?php
$this->assign('title', 'Booking Feedback');

?>
<style>
    @media (min-width: 544px){
        .navbar {
            max-width: 100%;
        }
    }
    @media (min-width: 769px){
        .navbar {
            max-width: 1290px;
        }
    }


    .navbar{
        /*background-color: aquamarine !important;*/
        margin: 0 auto !important;
        padding-top: 15px;
        padding-bottom: 10px;
        font-weight: 600;
    }
    .container-fluid{
        padding: 15px 20px 10px 20px;
        /*border-bottom:  solid 1px red;*/
    }

    #navbarNavDropdown{
        flex-direction: row-reverse;
    }

    .navbar-nav>.nav-item{
        padding: 0px 11.2px;
    }
    .navbar-light .navbar-nav .show > .nav-link,
    .navbar-light .navbar-nav .nav-link.active {
        color: #17bcb9;
    }


    .bg-image{
        background-image: url("https://shelbournelegal.com.au/wp-content/uploads/2020/06/contact-banner-1.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        transition: background .3s,border .3s,border-radius .3s,box-shadow .3s;
        padding: 200px 60px 150px;
        height: 464px !important;
    }



    /*@media (min-width: 544px){*/
    /*    .feedback-title {*/
    /*        width: 50%;*/
    /*    }*/
    /*}*/
    /*@media (min-width: 768px){*/
    /*    .feedback-title {*/
    /*        width: 27.44%;*/
    /*    }*/
    /*}*/
    .feedback-title-container{
        display: flex;
        max-width: 1250px;
        margin-right: auto;
        margin-left: auto;
        position: relative;
        margin-bottom: 40px;
    }

    .feedback-title{
        color: #fff;
        font-size: 45px;
        line-height: 1.4em;
        padding: 10px 20px;
        background-color: rgba(23,188,185,.8);


    }
    .feedback-title>div{
        font-size: 45px;
        font-weight: 200;
        line-height: 1.2em;
    }

    .feedback-title>div::selection{
        background-color: #17bcb9;
        color: #000;
    }



</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white">

    <div class="container-fluid nav-content">
        <!--   logo       -->
        <a class="navbar-brand" href="#">
            <img width="300" height="27" src="https://shelbournelegal.com.au/wp-content/uploads/2020/04/Logo-grey-web-300x27.png" class="custom-logo" alt="Shelbourne Legal" srcset="https://shelbournelegal.com.au/wp-content/uploads/2020/04/Logo-grey-web-300x27.png 300w, https://shelbournelegal.com.au/wp-content/uploads/2020/04/Logo-grey-web-768x70.png 768w, https://shelbournelegal.com.au/wp-content/uploads/2020/04/Logo-grey-web.png 827w" sizes="(max-width: 300px) 100vw, 300px">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--     Menu items   -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tel:1300743526">1300 743 526</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<div class="bg-image mt-2">
    <div class="feedback-title-container">
        <div class="feedback-title">
            <div>Your Booking Feedback </div>

        </div>
    </div>

</div>

<div class="container-xl">
    <div class="h4 my-5">Your booking is successfully submitted! Thank you for making a booking with us. </div>
    <div class="h4 my-5">Boooking information is sent to your email. Please confirm. If need changes,please contact us</div>
    <div class="h4 my-5">Next Step: Please fill in the intake form  before your booking time.</div>
    <div class="text-center">
        <a class="btn btn-outline-shelbourne rounded-pill" target="_blank" href="<?=  $this->Url->build(['controller'=>'Clients','action'=>'intakeform'], ['fullBase' => true]) ?>">Fill in Intake Form</a>
    </div>
</div>

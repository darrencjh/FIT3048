<?php
$this->assign('title', 'Booking Feedback');

?>
<style>
    *{
        font-family: 'Poppins',sans-serif;
    }

    /*  Header navbar section   */
    header {
        background-color: white;
    }

    @media (min-width: 544px) {
        .navbar {
            max-width: 100%;
        }
    }

    @media (min-width: 769px) {
        .navbar {
            max-width: 1290px;
        }
    }


    .navbar {
        margin: 0 auto !important;
        padding-top: 15px;
        padding-bottom: 10px;
    }

    .nav-content {
        padding: 15px 20px 10px 20px;
    }

    .navbar-nav > .nav-item {
        padding: 0px 11.2px;
    }

    .navbar-nav .show > .nav-link,
    .navbar-nav .nav-link.active {
        color: #17bcb9 !important;
    }

    #navbarNavDropdown {
        flex-direction: row-reverse;
    }

    #navbarNavDropdown .nav-link:hover {
        color: #17bcb9 !important;
    }

    .dropdown-menu{
        border-top: 2px  solid  #17bcb9;
        border-radius: 0;
    }

    .dropdown-menu a{
        border-radius: 0 !important;
        transition: all 0.5s !important;
    }
    .dropdown-menu li:hover a{
        color: #17bcb9 !important;
    }




    /* Background image section */
    .bg-image {
        background-image: url("https://shelbournelegal.com.au/wp-content/uploads/2020/06/contact-banner-1.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
        padding: 200px 60px 150px;
        height: 464px !important;
        margin-top: 92px !important;
    }


    .feedback-title-container {
        display: flex;
        max-width: 1250px;
        margin-right: auto;
        margin-left: auto;
        position: relative;
        margin-bottom: 40px;
    }

    .feedback-title {
        color: #fff;
        font-size: 45px;
        line-height: 1.4em;
        padding: 10px 20px;
        background-color: rgba(23, 188, 185, .8);

    }

    .feedback-title > div {
        font-size: 45px;
        line-height: 1.2em;
    }

    .feedback-title > div::selection {
        background-color: #17bcb9;
        color: #000;
    }

    /* Footer */
    footer {
        height: 500px;
        background-color: #3e3e3e;
        transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
        padding: 60px 100px !important;
        color: white;
    }

    footer > div {
        max-width: 1250px;
        display: flex;
        margin-right: auto;
        margin-left: auto;
        position: relative;
    }

    .footer-content {
        width: 100%;
    }
    .footer-content>div>div>*{
        margin-bottom: 20px;
    }
    ul>li>a{
        text-decoration: none;
        color: white;
    }
    .contact-info{
        padding-left: 18px;
    }
    .contact-info:hover{
        color: #17bcb9;
    }
    .footer-content svg{
        fill: #fff;
        width: 23px;
    }
    .fb_in_link a{
        margin-right: 12px;
        font-size: 36px;
        color: #17bcb9 !important;
        text-decoration:none !important;
    }

    .fb_in_link a:hover{
        color: #14a4a0 !important;
    }
    h2::selection {
        background-color: #17bcb9;
        color: #000;
    }




</style>

<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fw-bold">

        <div class="container-fluid nav-content">
            <!--   logo       -->
            <a class="navbar-brand" href="#">
                <img width="300" height="27"
                     src="https://shelbournelegal.com.au/wp-content/uploads/2020/04/Logo-grey-web-300x27.png"
                     class="custom-logo" alt="Shelbourne Legal"
                     srcset="https://shelbournelegal.com.au/wp-content/uploads/2020/04/Logo-grey-web-300x27.png 300w, https://shelbournelegal.com.au/wp-content/uploads/2020/04/Logo-grey-web-768x70.png 768w, https://shelbournelegal.com.au/wp-content/uploads/2020/04/Logo-grey-web.png 827w"
                     sizes="(max-width: 300px) 100vw, 300px">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--     Menu items   -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item"> <!-- show  -->
                        <a class="nav-link" aria-current="page" href="https://shelbournelegal.com.au/">Home</a><!-- active  -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://shelbournelegal.com.au/about/">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu p-2" aria-labelledby="navbarDropdownMenuLink"><!-- show  -->
                            <li><a class="dropdown-item bg-white p-2 mb-2  text-muted" href="https://shelbournelegal.com.au/estate-planning/">Estate Planning</a></li>
                            <li><a class="dropdown-item bg-white p-2 mb-2  text-muted" href="https://shelbournelegal.com.au/probate-estate-administration/">Probate & Administration</a></li>
                            <li><a class="dropdown-item bg-white p-2  text-muted" href="https://shelbournelegal.com.au/estate-litigation/">Estate Litigation</a></li>
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
</header>


<div class="bg-image">
    <div class="feedback-title-container">
        <div class="feedback-title">
            <div class="fw-lighter">Your Booking Feedback</div>
        </div>
    </div>
</div>

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

<footer>
    <div>
        <div class="row footer-content">
            <!--   Footer: left side-->
            <div class="col-sm-12 col-lg-6">
                <div class="p-2">
                    <!-- Company name -->
                    <h2 class="text-shelbourne">Shelbourne Legal</h2>
                    <!-- contact phone+email -->
                    <ul class="list-unstyled list-group">
                        <li>
                            <a href="tel:1300743526">
                                <span class="phone-icon">
							        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 id="Capa_1" x="0px" y="0px" viewBox="0 0 512.076 512.076"
                                 style="enable-background:new 0 0 512.076 512.076;" xml:space="preserve">
                                    <g transform="translate(-1 -1)">
                                        <g>
                                            <g>
                                                <path
                                                    d="M499.639,396.039l-103.646-69.12c-13.153-8.701-30.784-5.838-40.508,6.579l-30.191,38.818     c-3.88,5.116-10.933,6.6-16.546,3.482l-5.743-3.166c-19.038-10.377-42.726-23.296-90.453-71.04s-60.672-71.45-71.049-90.453     l-3.149-5.743c-3.161-5.612-1.705-12.695,3.413-16.606l38.792-30.182c12.412-9.725,15.279-27.351,6.588-40.508l-69.12-103.646     C109.12,1.056,91.25-2.966,77.461,5.323L34.12,31.358C20.502,39.364,10.511,52.33,6.242,67.539     c-15.607,56.866-3.866,155.008,140.706,299.597c115.004,114.995,200.619,145.92,259.465,145.92     c13.543,0.058,27.033-1.704,40.107-5.239c15.212-4.264,28.18-14.256,36.181-27.878l26.061-43.315     C517.063,422.832,513.043,404.951,499.639,396.039z M494.058,427.868l-26.001,43.341c-5.745,9.832-15.072,17.061-26.027,20.173     c-52.497,14.413-144.213,2.475-283.008-136.32S8.29,124.559,22.703,72.054c3.116-10.968,10.354-20.307,20.198-26.061     l43.341-26.001c5.983-3.6,13.739-1.855,17.604,3.959l37.547,56.371l31.514,47.266c3.774,5.707,2.534,13.356-2.85,17.579     l-38.801,30.182c-11.808,9.029-15.18,25.366-7.91,38.332l3.081,5.598c10.906,20.002,24.465,44.885,73.967,94.379     c49.502,49.493,74.377,63.053,94.37,73.958l5.606,3.089c12.965,7.269,29.303,3.898,38.332-7.91l30.182-38.801     c4.224-5.381,11.87-6.62,17.579-2.85l103.637,69.12C495.918,414.126,497.663,421.886,494.058,427.868z"></path>
                                                <path
                                                    d="M291.161,86.39c80.081,0.089,144.977,64.986,145.067,145.067c0,4.713,3.82,8.533,8.533,8.533s8.533-3.82,8.533-8.533     c-0.099-89.503-72.63-162.035-162.133-162.133c-4.713,0-8.533,3.82-8.533,8.533S286.448,86.39,291.161,86.39z"></path>
                                                <path
                                                    d="M291.161,137.59c51.816,0.061,93.806,42.051,93.867,93.867c0,4.713,3.821,8.533,8.533,8.533     c4.713,0,8.533-3.82,8.533-8.533c-0.071-61.238-49.696-110.863-110.933-110.933c-4.713,0-8.533,3.82-8.533,8.533     S286.448,137.59,291.161,137.59z"></path>
                                                <path
                                                    d="M291.161,188.79c23.552,0.028,42.638,19.114,42.667,42.667c0,4.713,3.821,8.533,8.533,8.533s8.533-3.82,8.533-8.533     c-0.038-32.974-26.759-59.696-59.733-59.733c-4.713,0-8.533,3.82-8.533,8.533S286.448,188.79,291.161,188.79z"></path>
                                            </g>
                                        </g>
                                    </g>

                                    </svg width="23" height="23">
                                </span>
                                <span class="contact-info fs-5 fw-light">1300 743 526</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="mailto:info@shelbournelegal.com.au">
                                <span class="elementor-icon-list-icon">
							        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M506.955,1.314c-3.119-1.78-6.955-1.75-10.045,0.078L313.656,109.756c-4.754,2.811-6.329,8.943-3.518,13.697    c2.81,4.753,8.942,6.328,13.697,3.518l131.482-77.749L210.411,303.335L88.603,266.069l158.965-94    c4.754-2.812,6.329-8.944,3.518-13.698c-2.81-4.753-8.943-6.33-13.697-3.518L58.91,260.392c-3.41,2.017-5.309,5.856-4.84,9.791    s3.216,7.221,7.004,8.38l145.469,44.504L270.72,439.88c0.067,0.121,0.136,0.223,0.207,0.314c1.071,1.786,2.676,3.245,4.678,4.087    c1.253,0.527,2.57,0.784,3.878,0.784c2.563,0,5.086-0.986,6.991-2.849l73.794-72.12l138.806,42.466    c0.96,0.293,1.945,0.438,2.925,0.438c2.116,0,4.206-0.672,5.948-1.961C510.496,409.153,512,406.17,512,403V10    C512,6.409,510.074,3.093,506.955,1.314z M271.265,329.23c-1.158,1.673-1.779,3.659-1.779,5.694v61.171l-43.823-79.765    l193.921-201.21L271.265,329.23z M289.486,411.309v-62.867l48.99,14.988L289.486,411.309z M492,389.483l-196.499-60.116    L492,45.704V389.483z"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M164.423,347.577c-3.906-3.905-10.236-3.905-14.143,0l-93.352,93.352c-3.905,3.905-3.905,10.237,0,14.143    C58.882,457.024,61.441,458,64,458s5.118-0.976,7.071-2.929l93.352-93.352C168.328,357.815,168.328,351.483,164.423,347.577z"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M40.071,471.928c-3.906-3.903-10.236-3.903-14.142,0.001l-23,23c-3.905,3.905-3.905,10.237,0,14.143    C4.882,511.024,7.441,512,10,512s5.118-0.977,7.071-2.929l23-23C43.976,482.166,43.976,475.834,40.071,471.928z"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M142.649,494.34c-1.859-1.86-4.439-2.93-7.069-2.93c-2.641,0-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.43-2.93,7.07    c0,2.63,1.069,5.21,2.93,7.07c1.86,1.86,4.44,2.93,7.07,2.93s5.21-1.07,7.069-2.93c1.86-1.86,2.931-4.44,2.931-7.07    C145.58,498.77,144.51,496.2,142.649,494.34z"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M217.051,419.935c-3.903-3.905-10.233-3.905-14.142,0l-49.446,49.445c-3.905,3.905-3.905,10.237,0,14.142    c1.953,1.953,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.929l49.446-49.445C220.956,430.172,220.956,423.84,217.051,419.935z"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M387.704,416.139c-3.906-3.904-10.236-3.904-14.142,0l-49.58,49.58c-3.905,3.905-3.905,10.237,0,14.143    c1.953,1.952,4.512,2.929,7.071,2.929s5.118-0.977,7.071-2.929l49.58-49.58C391.609,426.377,391.609,420.045,387.704,416.139z"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M283.5,136.31c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21,1.07-7.07,2.93c-1.859,1.86-2.93,4.44-2.93,7.08    c0,2.63,1.07,5.2,2.93,7.06c1.86,1.87,4.44,2.93,7.07,2.93s5.21-1.06,7.07-2.93c1.859-1.86,2.93-4.43,2.93-7.06    C286.43,140.75,285.36,138.17,283.5,136.31z"></path>
                                            </g>
                                        </g>

                                    </svg>
                                </span>
                                <span class="contact-info fs-5  fw-light">admin@shelbournelegal.com.au</span>
                            </a>
                        </li>
                    </ul>
                    <!-- facebook+Linkedin icon -->
                    <div class="fb_in_link">
                        <a class="" href="https://www.facebook.com/ShelbourneLegal" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="" href="https://www.linkedin.com/company/shelbourne-legal" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    <!-- Contact -->
                    <h2 class="contact_selection">Contact us today for a free chat with a lawyer</h2>
                </div>
            </div>
            <!--   Footer: Right side Form-->
            <div class="col-sm-12 col-lg-6">
                <div class="p-2">
                    <h2>Get in touch</h2>

                </div>
            </div>
        </div>
    </div>
</footer>


<script>
    $(".dropdown").hover(function(){
        $("a.dropdown-toggle").addClass("active").next().fadeIn()

    })
    $(".dropdown").mouseleave(function(){
        $("a.dropdown-toggle").removeClass("active").next().fadeOut()
    })
</script>
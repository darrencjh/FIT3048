<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */

echo $this->Html->script('adminBooking',['block'=>true]);

?>
<div class="row">
    <div class="column-responsive column-80 ml-5">
        <div class="bookings form content">
            <?= $this->Form->create($booking) ?>
            <fieldset>
                <legend><?= __('Add Booking') ?></legend>

                <div class="mb-3">
                    <div class="label required">
                        <label>Date</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingDate" name="date" type="date" required>
                    <div class="invalid-feedback" id="dateError">Please check your booking date</div>
                </div>

                <div class="dropdown mb-3">
                    <div class="label required">
                        <label>Time</label>
                    </div>
                    <select class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingTime" aria-label="Select a time" name="booked_time" required>
                        <option selected class="text-muted" value="0">Select a time for your booking</option>
                        <option value="12:00am">12:00am</option>
                        <option value="1:00am">1:00am</option>
                        <option value="2:00am">2:00am</option>
                        <option value="3:00am">3:00am</option>
                        <option value="4:00am">4:00am</option>
                        <option value="5:00am">5:00am</option>
                        <option value="6:00am">6:00am</option>
                        <option value="7:00am">7:00am</option>
                        <option value="8:00am">8:00am</option>
                        <option value="9:00am">9:00am</option>
                        <option value="10:00am">10:00am</option>
                        <option value="11:00am">11:00am</option>
                        <option value="12:00pm">12:00pm</option>
                        <option value="1:00pm">1:00pm</option>
                        <option value="2:00pm">2:00pm</option>
                        <option value="3:00pm">3:00pm</option>
                        <option value="4:00pm">4:00pm</option>
                        <option value="5:00pm">5:00pm</option>
                        <option value="6:00pm">6:00pm</option>
                        <option value="7:00pm">7:00pm</option>
                        <option value="8:00pm">8:00pm</option>
                        <option value="9:00pm">9:00pm</option>
                        <option value="10:00pm">10:00pm</option>
                        <option value="11:00pm">11:00pm</option>
                    </select>
                    <div class="invalid-feedback" id="timeError">Please check your booking time</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Service</label>
                    </div>
<!--                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingService" name="service" required>-->
                    <select class="form-control mt-2 mb-1" aria-label="select a service" id="bookingService" name="service" required>
                        <option selected class="text-muted" value="0">Selected a service you want to book</option>
                        <option value="Wills & Estate Planning Appointment">1-Wills & Estate Planning Appointment
                        </option>
                        <option value="Probate and Estate Administration Appointment">2-Probate and Estate
                            Administration Appointment
                        </option>
                        <option value="Signing Appointment">3-Signing Appointment</option>
                        <option value="Call back only">4-Call back only</option>
                    </select>
                    <div class="invalid-feedback" id="serviceError">Please check your chosen service</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Name</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingName" name="name" required>
                    <div class="invalid-feedback" id="nameError">Please provide your name</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Email</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingEmail" name="email" required>
                    <div class="invalid-feedback" id="emailError">Please provide your email</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Location</label>
                    </div>
                    <!--                    <div class="invalid-feedback" id="emailError">Please provide your email</div>-->
                    <select class="form-control bg-transparent fw-bold mt-2 mb-1" aria-label="select a service" id="bookingLocation" name="location" required>
                        <option selected class="text-muted" value="0">Select a location</option>
                        <option value="Microsoft Teams">Microsoft Teams</option>
                        <option value="Suite 2, 1265 Nepean Highway, Cheltenham VIC 3192">Suite 2, 1265 Nepean Highway, Cheltenham VIC 3192</option>
                        <option value="Suite 2, 681 Burke Road, Camberwell VIC 3124">Suite 2, 681 Burke Road, Camberwell VIC 3124</option>
                    </select>
                    <div class="invalid-feedback" id="locationError">Please choose a location</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Phone</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingPhone" name="phone" required>
                    <div class="invalid-feedback" id="phoneError">Please provide your phone number</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Referred By</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingReferredBy" name="referred_by">
                    <div class="invalid-feedback" id="referralNameError">Please provide your referrer name</div>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg btn-shelbourne', 'id'=>'addBookingBtn']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

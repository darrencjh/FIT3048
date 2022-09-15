<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
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
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingDate" name="date" required>
<!--                    <div class="invalid-feedback" id="emailError">Please provide your email</div>-->
                </div>

                <div class="dropdown mb-3">
                    <div class="label required">
                        <label>Time</label>
                    </div>
                    <select class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingTime" aria-label="Select a time" name="booked_time" required>
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
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Service</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingService" name="service" required>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Name</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingName" name="name" required>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Email</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingEmail" name="email" required>
                    <!--                    <div class="invalid-feedback" id="emailError">Please provide your email</div>-->
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Location</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingLocation" name="location" required>
                    <!--                    <div class="invalid-feedback" id="emailError">Please provide your email</div>-->
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Phone</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingPhone" name="phone" required>
                    <!--                    <div class="invalid-feedback" id="emailError">Please provide your email</div>-->
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Referred By</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingReferredBy" name="referred_by" required>
                    <!--                    <div class="invalid-feedback" id="emailError">Please provide your email</div>-->
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg btn-shelbourne', 'id'=>'addBookingBtn']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

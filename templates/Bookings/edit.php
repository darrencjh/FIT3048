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
                <legend><?= __('Edit Booking') ?></legend>

                <div class="mb-3">
                    <div class="label required">
                        <label>Date</label>
                    </div>
                        <input class="form-control bg-transparent fw-bold mt-2 mb-1" type="text" id="bookingDate" name="date" onfocus="(this.type='date')" onblur="(this.type='text', this.value='<?= $booking->date?>')" value="<?= $booking->date?>" required>
                    <script>console.log(<?= $booking->date?>)</script>

                    <div class="invalid-feedback" id="dateError">Please check your booking date</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Booking Time</label>
                    </div>
                    <select class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingTime" aria-label="Select a time" name="booked_time" required>
                        <option selected class="text-muted">Select a time</option>
                        <option value="12:00am" <?= $booking->booked_time=="12:00am" ? 'selected':'' ?>>12:00am</option>
                        <option value="1:00am" <?= $booking->booked_time=="1:00am" ? 'selected':'' ?>>1:00am</option>
                        <option value="2:00am" <?= $booking->booked_time=="2:00am" ? 'selected':'' ?>>2:00am</option>
                        <option value="3:00am" <?= $booking->booked_time=="3:00am" ? 'selected':'' ?>>3:00am</option>
                        <option value="4:00am" <?= $booking->booked_time=="4:00am" ? 'selected':'' ?>>4:00am</option>
                        <option value="5:00am" <?= $booking->booked_time=="5:00am" ? 'selected':'' ?>>5:00am</option>
                        <option value="6:00am" <?= $booking->booked_time=="6:00am" ? 'selected':'' ?>>6:00am</option>
                        <option value="7:00am" <?= $booking->booked_time=="7:00am" ? 'selected':'' ?>>7:00am</option>
                        <option value="8:00am" <?= $booking->booked_time=="8:00am" ? 'selected':'' ?>>8:00am</option>
                        <option value="9:00am" <?= $booking->booked_time=="9:00am" ? 'selected':'' ?>>9:00am</option>
                        <option value="10:00am" <?= $booking->booked_time=="10:00am" ? 'selected':'' ?>>10:00am</option>
                        <option value="11:00am" <?= $booking->booked_time=="11:00am" ? 'selected':'' ?>>11:00am</option>
                        <option value="12:00pm" <?= $booking->booked_time=="12:00pm" ? 'selected':'' ?>>12:00pm</option>
                        <option value="1:00pm" <?= $booking->booked_time=="1:00pm" ? 'selected':'' ?>>1:00pm</option>
                        <option value="2:00pm" <?= $booking->booked_time=="2:00pm" ? 'selected':'' ?>>2:00pm</option>
                        <option value="3:00pm" <?= $booking->booked_time=="3:00pm" ? 'selected':'' ?>>3:00pm</option>
                        <option value="4:00pm" <?= $booking->booked_time=="4:00pm" ? 'selected':'' ?>>4:00pm</option>
                        <option value="5:00pm" <?= $booking->booked_time=="5:00pm" ? 'selected':'' ?>>5:00pm</option>
                        <option value="6:00pm" <?= $booking->booked_time=="6:00pm" ? 'selected':'' ?>>6:00pm</option>
                        <option value="7:00pm" <?= $booking->booked_time=="7:00pm" ? 'selected':'' ?>>7:00pm</option>
                        <option value="8:00pm" <?= $booking->booked_time=="8:00pm" ? 'selected':'' ?>>8:00pm</option>
                        <option value="9:00pm" <?= $booking->booked_time=="9:00pm" ? 'selected':'' ?>>9:00pm</option>
                        <option value="10:00pm" <?= $booking->booked_time=="10:00pm" ? 'selected':'' ?>>10:00pm</option>
                        <option value="11:00pm" <?= $booking->booked_time=="11:00pm" ? 'selected':'' ?>>11:00pm</option>
                    </select>
                    <div class="invalid-feedback" id="timeError">Please check your booking time</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Service</label>
                    </div>
                    <select class="form-control mt-2 mb-1" aria-label="select a service" id="bookingService" name="service" required>
                        <option selected class="text-muted">Select a service</option>
                        <option value="Wills & Estate Planning Appointment" <?= $booking->service=="Wills & Estate Planning Appointment" ? 'selected':'' ?>>1-Wills & Estate Planning Appointment</option>
                        <option value="Probate and Estate Administration Appointment" <?= $booking->service=="Probate and Estate Administration Appointment" ? 'selected':'' ?>>2-Probate and Estate Administration Appointment</option>
                        <option value="Signing Appointment" <?= $booking->service=="Signing Appointment" ? 'selected':'' ?>>3-Signing Appointment</option>
                        <option value="Call back only" <?= $booking->service=="Call back only" ? 'selected':'' ?>>4-Call back only</option>
                    </select>
                    <div class="invalid-feedback" id="serviceError">Please check your chosen service</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Name</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingName" name="name" value="<?= $booking->name?>" required>
                    <div class="invalid-feedback" id="nameError">Please provide your name</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Email</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingEmail" name="email" value="<?= $booking->email?>" required>
                    <div class="invalid-feedback" id="emailError">Please provide your email</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Location</label>
                    </div>
                    <select class="form-control bg-transparent fw-bold mt-2 mb-1" aria-label="select a location" id="bookingLocation" name="location" required>
                        <option selected class="text-muted">Select a location</option>
                        <option value="Microsoft Teams" <?= $booking->location=="Microsoft Teams" ? 'selected':'' ?>>Microsoft Teams</option>
                        <option value="Suite 2, 1265 Nepean Highway, Cheltenham VIC 3192" <?= $booking->location=="Suite 2, 1265 Nepean Highway, Cheltenham VIC 3192" ? 'selected':'' ?>>Suite 2, 1265 Nepean Highway, Cheltenham VIC 3192</option>
                        <option value="Suite 2, 681 Burke Road, Camberwell VIC 3124" <?= $booking->location=="Suite 2, 681 Burke Road, Camberwell VIC 3124" ? 'selected':'' ?>>Suite 2, 681 Burke Road, Camberwell VIC 3124</option>
                    </select>
                    <div class="invalid-feedback" id="locationError">Please choose a location</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Phone</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingPhone" name="phone" value="<?= $booking->phone?>" required>
                    <div class="invalid-feedback" id="phoneError">Please provide your phone number</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Referred By</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-1" id="bookingReferredBy" name="referred_by" value="<?= $booking->referred_by?>">
                    <div class="invalid-feedback" id="referrerError">Please check your referrer name</div>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

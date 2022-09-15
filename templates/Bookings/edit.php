<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $booking->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookings form content">
            <?= $this->Form->create($booking) ?>
            <fieldset>
                <legend><?= __('Edit Booking') ?></legend>

                <div class="mb-3">
                    <div class="label required">
                        <label>Date</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingDate" name="date" value="<?= $booking->date?>" required>
<!--                    <div class="invalid-feedback" id="emailError">Please provide your booking date</div>-->
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Booking Time</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingTime" name="booked_time" value="<?= $booking->booked_time?>" required>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Service</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingService" name="service" value="<?= $booking->service?>" required>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Name</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingName" name="name" value="<?= $booking->name?>" required>
<!--                    <div class="invalid-feedback" id="emailError">Please provide your booking date</div>-->
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Email</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingEmail" name="email" value="<?= $booking->email?>" required>
<!--                    <div class="invalid-feedback" id="emailError">Please provide your booking date</div>-->
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Location</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingLocation" name="location" value="<?= $booking->location?>" required>
<!--                    <div class="invalid-feedback" id="emailError">Please provide your booking date</div>-->
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Phone</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingPhone" name="phone" value="<?= $booking->phone?>" required>
<!--                    <div class="invalid-feedback" id="emailError">Please provide your booking date</div>-->
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Referred By</label>
                    </div>
                    <input class="form-control bg-transparent fw-bold mt-2 mb-3" id="bookingReferredBy" name="referred_by" value="<?= $booking->referred_by?>" required>
<!--                    <div class="invalid-feedback" id="emailError">Please provide your booking date</div>-->
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

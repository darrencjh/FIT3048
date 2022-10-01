<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Availability $availability
 */
?>
<div class="row">
    <div class="column-responsive column-80  ml-5">
        <div class="availabilities form content">
            <?= $this->Form->create($availability) ?>
            <fieldset>
                <legend><?= __('Add An Available Time For Client Booking') ?></legend>
                <div class="dropdown mb-3">
                    <div class="label required">
                        <label>Weekday</label>
                    </div>
                    <select class="form-control bg-transparent fw-bold mt-2 mb-1" id="weekday" aria-label="Select a time" name="weekday" required>
                        <option selected class="text-muted" value="0">Select a weekday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                    </select>
                    <div class="invalid-feedback" id="weekdayError">Please select a weekday</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Available Time</label>
                    </div>
                    <select class="form-control bg-transparent fw-bold mt-2 mb-1" id="availableTime" aria-label="Select a time" name="booked_time" required>
                        <option selected class="text-muted" value="0">Select a time for your booking</option>
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
                    </select>
                    <div class="invalid-feedback" id="availableTimeError">Please provide an available time client can book</div>
                </div>

            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg btn-shelbourne', 'id'=>'addAvailabilityBtn']) ?>
            <?= $this->Html->link(__('List Availabilities'), ['action' => 'index'], ['class' => 'btn btn-lg btn-secondary']) ?>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

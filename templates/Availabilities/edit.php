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
                <legend><?= __('Edit An Availability') ?></legend>
                <div class="dropdown mb-3">
                    <div class="label required">
                        <label>Weekday</label>
                    </div>
                    <select class="form-control bg-transparent fw-bold mt-2 mb-1" id="weekday" aria-label="Select a time" name="weekday" required>
                        <option selected class="text-muted" value="0">Select a weekday</option>
                        <option value="Monday" <?= $availability->weekday=="Monday" ? 'selected':''  ?>>Monday</option>
                        <option value="Tuesday"  <?= $availability->weekday=="Tuesday" ? 'selected':''  ?>>Tuesday</option>
                        <option value="Wednesday"  <?= $availability->weekday=="Wednesday" ? 'selected':''  ?>>Wednesday</option>
                        <option value="Thursday" <?= $availability->weekday=="Thursday" ? 'selected':''  ?>>Thursday</option>
                        <option value="Friday" <?= $availability->weekday=="Friday" ? 'selected':''  ?>>Friday</option>
                    </select>
                    <div class="invalid-feedback" id="weekdayError">Please select a weekday</div>
                </div>

                <div class="mb-3">
                    <div class="label required">
                        <label>Available Time</label>
                    </div>
                    <select class="form-control bg-transparent fw-bold mt-2 mb-1" id="availableTime" aria-label="Select a time" name="booked_time" required>
                        <option selected class="text-muted" value="0">Select a time for your booking</option>
                        <option value="9:00am" <?= $availability->booked_time=="9:00am" ? 'selected':'' ?>>9:00am</option>
                        <option value="10:00am" <?= $availability->booked_time=="10:00am" ? 'selected':'' ?>>10:00am</option>
                        <option value="11:00am" <?= $availability->booked_time=="11:00am" ? 'selected':'' ?>>11:00am</option>
                        <option value="12:00pm" <?= $availability->booked_time=="12:00pm" ? 'selected':'' ?>>12:00pm</option>
                        <option value="1:00pm" <?= $availability->booked_time=="1:00pm" ? 'selected':'' ?>>1:00pm</option>
                        <option value="2:00pm" <?= $availability->booked_time=="2:00pm" ? 'selected':'' ?>>2:00pm</option>
                        <option value="3:00pm" <?= $availability->booked_time=="3:00pm" ? 'selected':'' ?>>3:00pm</option>
                        <option value="4:00pm" <?= $availability->booked_time=="4:00pm" ? 'selected':'' ?>>4:00pm</option>
                        <option value="5:00pm" <?= $availability->booked_time=="5:00pm" ? 'selected':'' ?>>5:00pm</option>
                        <option value="6:00pm" <?= $availability->booked_time=="6:00pm" ? 'selected':'' ?>>6:00pm</option>
                        <option value="7:00pm" <?= $availability->booked_time=="7:00pm" ? 'selected':'' ?>>7:00pm</option>
                        <option value="8:00pm" <?= $availability->booked_time=="8:00pm" ? 'selected':'' ?>>8:00pm</option>
                        <option value="9:00pm" <?= $availability->booked_time=="9:00pm" ? 'selected':'' ?>>9:00pm</option>
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

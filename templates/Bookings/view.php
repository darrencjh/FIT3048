<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="bookings view content">
            <h3><?= h($booking->name) ?></h3>
            <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($booking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Booked Time') ?></th>
                    <td><?= h($booking->booked_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= h($booking->service) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($booking->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($booking->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($booking->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($booking->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referred By') ?></th>
                    <td><?= h($booking->referred_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($booking->date) ?></td>
                </tr>
            </table>
            <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-lg btn-secondary']) ?>
        </div>
    </div>
</div>

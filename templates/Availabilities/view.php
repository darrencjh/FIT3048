<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Availability $availability
 */
?>
<div class="row">
    <div class="column-responsive column-80 ml-5">
        <div class="availabilities view content">
            <h3><?= h($availability->weekday . ' ' . $availability->booked_time) ?></h3>
            <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($availability->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weekday') ?></th>
                    <td><?= h($availability->weekday) ?></td>
                </tr>
                <tr>
                    <th><?= __('Booked Time') ?></th>
                    <td><?= h($availability->booked_time) ?></td>
                </tr>
            </table>
            <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-lg btn-secondary']) ?>

        </div>
    </div>
</div>

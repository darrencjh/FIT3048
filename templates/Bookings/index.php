<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking[]|\Cake\Collection\CollectionInterface $bookings
 */

echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css',['block'=>true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block'=>true]);

?>
<script>
    //table to display
    $(()=>{
        $('#bookingTable').DataTable();
    } );
</script>

<div class="bookings index content">
    <?= $this->Html->link(__('<span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span><span class="text">New Booking</span>'), ['action' => 'add'],['class' => 'btn btn-success btn-icon-split float-right','escape'=>false]) ?>
    <h3><?= __('Bookings') ?></h3>
    <div class="table-responsive">
        <table id="bookingTable">
            <thead>
            <tr>
                <th>name</th>
                <th>date</th>
                <th>booking_time</th>
                <th>service</th>
                <th>email</th>
                <th>phone</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($bookings as $booking): ?>
                <tr>
                    <td><?= h($booking->name) ?></td>
                    <td><?= h($booking->date) ?></td>
                    <td><?= h($booking->booked_time) ?></td>
                    <td><?= h($booking->service) ?></td>

                    <td><?= h($booking->email) ?></td>
                    <td><?= h($booking->phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $booking->id],['class'=>"btn btn-success btn-circle btn-sm",'escape'=>false]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booking->id],['class'=>"btn btn-info btn-circle btn-sm",'escape'=>false]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->id], ['class'=>"btn btn-danger btn-circle btn-sm button-delete-client",'escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $booking->id)]) ?>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

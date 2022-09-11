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
                    <th>id</th>
                    <th>name</th>
                    <th>date</th>
                    <th>booking_time</th>
                    <th>service</th>

<!--                    $this->Paginator->sort('email')-->
<!--                    $this->Paginator->sort('location')-->
<!--                    $this->Paginator->sort('phone')-->
<!--                    $this->Paginator->sort('referred_by')-->
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking): ?>
                <tr>
                    <td><?= h($booking->id) ?></td>
                    <td><?= h($booking->date) ?></td>
                    <td><?= h($booking->booked_time) ?></td>
                    <td><?= h($booking->service) ?></td>
                    <td><?= h($booking->name) ?></td>
                    <td><?= h($booking->email) ?></td>
                    <td><?= h($booking->location) ?></td>
                    <td><?= h($booking->phone) ?></td>
                    <td><?= h($booking->referred_by) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $booking->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booking->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

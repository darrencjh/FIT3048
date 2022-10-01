<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Availability[]|\Cake\Collection\CollectionInterface $availabilities
 */
echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css',['block'=>true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block'=>true]);

?>
<script>
    //table to display
    $(()=>{
        $('#availabilityTable').DataTable();
    } );
</script>
<div class="availabilities index content">
    <?= $this->Html->link(__('<span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span><span class="text">Add a Availability</span>'), ['action' => 'add'],['class' => 'btn btn-success btn-icon-split float-right','escape'=>false]) ?>
    <h3><?= __('Availabilities') ?></h3>
    <div class="table-responsive">
        <table  id="availabilityTable">
            <thead>
                <tr>
                    <th>weekday</th>
                    <th>Time</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($availabilities as $availability): ?>
                <tr>
                    <td><?= h($availability->weekday) ?></td>
                    <td><?= h($availability->booked_time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="fas fa-info"></i>'), ['action' => 'view', $availability->id],['class'=>"btn btn-success btn-circle btn-sm",'escape'=>false]) ?>
                        <?= $this->Html->link(__('<i class="fas fa-edit"></i>'), ['action' => 'edit', $availability->id],['class'=>"btn btn-info btn-circle btn-sm",'escape'=>false]) ?>
                        <?= $this->Form->postLink(__('<i class="fas fa-trash"></i>'), ['action' => 'delete', $availability->id], ['confirm' => __('Are you sure you want to disable the booking time: {0}?', $availability->weekday . ' ' . $availability->booked_time),'class'=>"btn btn-danger btn-circle btn-sm button-delete-client",'escape'=>false]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */

echo $this->Html->css('//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css',['block'=>true]);
echo $this->Html->script('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js',['block'=>true]);

?>
<script>
    //table to display
    $(()=>{
        $('#clientTable').DataTable();
    } );
</script>
<div class="clients index content">
    <?= $this->Html->link(__('<span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span><span class="text">Add new Client</span>'), ['action' => 'intakeform'],['class' => 'btn btn-success btn-icon-split float-right','escape'=>false]) ?>
    <h3><?= __('Clients') ?></h3>
    <div class="table-responsive">
        <table id="clientTable">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Previous Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>

                    <td><?= h($client->full_name) ?></td>
                    <td><?= h($client->previous_name) ?></td>
                    <td><?= h($client->email) ?></td>
                    <td><?= h($client->phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="fas fa-info"></i>'), ['action' => 'view', $client->id],['class'=>"btn btn-success btn-circle btn-sm",'escape'=>false]) ?>
                        <?= $this->Html->link(__('<i class="fas fa-edit"></i>'), ['action' => 'edit', $client->id],['class'=>"btn btn-info btn-circle btn-sm",'escape'=>false]) ?>
                        <?= $this->Form->postLink(__('<i class="fas fa-trash"></i>'), ['action' => 'delete', $client->id], ['class'=>"btn btn-danger btn-circle btn-sm button-delete-client",'escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

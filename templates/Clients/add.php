<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>
                <?php
                    echo $this->Form->control('full_name');
                    echo $this->Form->control('other_names');
                    echo $this->Form->control('date_birth');
                    echo $this->Form->control('occupation');
                    echo $this->Form->control('address');
                    echo $this->Form->control('postal_address');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('referred_by');
                    echo $this->Form->control('is_will');
                    echo $this->Form->control('is_powers');
                    echo $this->Form->control('is_binding');
                    echo $this->Form->control('will_text');
                    echo $this->Form->control('powers_text');
                    echo $this->Form->control('binding_text');
//                echo $this->Form->control('Children.0.firstname');
//                echo $this->Form->control('Children.0.lastname');
//                echo $this->Form->control('Children.0.dob');
//                echo $this->Form->control('Children.1.firstname');
//                echo $this->Form->control('Children.1.lastname');
//                echo $this->Form->control('Children.1.dob');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

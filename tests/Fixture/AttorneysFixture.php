<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AttorneysFixture
 */
class AttorneysFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 'c40abb4c-c89c-4dff-953f-43179204c146',
                'name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'relation' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'f1858c05-6e98-432a-bf7c-cf7163310815',
            ],
        ];
        parent::init();
    }
}

<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AltexecutorsFixture
 */
class AltexecutorsFixture extends TestFixture
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
                'id' => '3f5da66d-8f15-4019-af6f-2c368b9955ac',
                'name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'relation' => 'Lorem ipsum dolor sit amet',
                'client_id' => '4f55dab8-e3a2-4d9c-9d17-9bc89c59e76f',
            ],
        ];
        parent::init();
    }
}

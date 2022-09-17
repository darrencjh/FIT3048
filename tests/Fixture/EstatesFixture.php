<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstatesFixture
 */
class EstatesFixture extends TestFixture
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
                'id' => 'b3b805b7-57c8-4eaa-b2d0-acf68117f103',
                'address' => 'Lorem ipsum dolor sit amet',
                'owner' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'location' => 'Lorem ipsum dolor sit amet',
                'mortgage' => 1,
                'value' => 1.5,
                'client_id' => '3a769823-e63e-472c-a8fc-6662be6bb4ff',
            ],
        ];
        parent::init();
    }
}

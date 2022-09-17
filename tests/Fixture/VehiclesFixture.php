<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VehiclesFixture
 */
class VehiclesFixture extends TestFixture
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
                'id' => '6ab2e15f-7291-4dcf-9cfb-c502df73e5c1',
                'make' => 'Lorem ipsum dolor sit amet',
                'model' => 'Lorem ipsum dolor sit amet',
                'year' => 'Lorem ipsum dolor sit amet',
                'client_id' => '4372f344-85c1-4207-ab2f-816538e6cb4c',
            ],
        ];
        parent::init();
    }
}

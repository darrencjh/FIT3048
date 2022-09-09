<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SuburbsFixture
 */
class SuburbsFixture extends TestFixture
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
                'id' => 1,
                'postcode' => 'Lor',
                'suburb' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lo',
                'latitude' => 1.5,
                'longitude' => 1.5,
            ],
        ];
        parent::init();
    }
}

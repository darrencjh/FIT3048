<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SuperannuationsFixture
 */
class SuperannuationsFixture extends TestFixture
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
                'id' => 'c62d3aa5-b332-4cb6-8bc3-79e43c44a782',
                'fund' => 'Lorem ipsum dolor sit amet',
                'value' => 1.5,
                'nomination' => 'Lorem ipsum dolor sit amet',
                'binding' => 'Lorem ip',
                'client_id' => '20c53fc1-dd84-4b70-bd37-f2eacfc5d137',
            ],
        ];
        parent::init();
    }
}

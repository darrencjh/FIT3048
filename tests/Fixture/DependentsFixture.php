<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DependentsFixture
 */
class DependentsFixture extends TestFixture
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
                'id' => '12984a75-c114-4aaf-bdb3-23cb06f6fa44',
                'full_name' => 'Lorem ipsum dolor sit amet',
                'relationship' => 'Lorem ipsum dolor sit amet',
                'nature' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'e3190c8d-78b3-4df2-b45d-88fd910c6a4f',
            ],
        ];
        parent::init();
    }
}

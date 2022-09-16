<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChildrenFixture
 */
class ChildrenFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'children';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '2dcfb6f7-4c02-41ce-9e93-fed440f72ce9',
                'full_name' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'mother' => 'Lorem ipsum dolor sit amet',
                'father' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'c78a4888-8e3d-4e08-a9ba-9d64390d20e2',
            ],
        ];
        parent::init();
    }
}

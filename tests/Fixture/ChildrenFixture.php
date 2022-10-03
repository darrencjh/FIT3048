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
                'id' => 'cb19772f-8756-407c-bd86-dcffbae02a8e',
                'full_name' => 'Lorem ipsum dolor sit amet',
                'dob' => '2022-10-03',
                'address' => 'Lorem ipsum dolor sit amet',
                'mother' => 'Lorem ipsum dolor sit amet',
                'father' => 'Lorem ipsum dolor sit amet',
                'client_id' => '96a99c12-384f-414d-89a0-ecd402479875',
            ],
        ];
        parent::init();
    }
}

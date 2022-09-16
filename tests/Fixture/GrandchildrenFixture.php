<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GrandchildrenFixture
 */
class GrandchildrenFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'grandchildren';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '942371d1-4b78-472c-a12a-e0bfd14a65d0',
                'full_name' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'mother' => 'Lorem ipsum dolor sit amet',
                'father' => 'Lorem ipsum dolor sit amet',
                'client_id' => '6a20d405-506a-4e9e-9280-a7393ff55691',
            ],
        ];
        parent::init();
    }
}

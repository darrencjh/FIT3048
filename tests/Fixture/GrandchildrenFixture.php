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
                'id' => 'a47dcebc-5fe0-49be-b2a0-72b055ea7c27',
                'full_name' => 'Lorem ipsum dolor sit amet',
                'dob' => '2022-10-03',
                'address' => 'Lorem ipsum dolor sit amet',
                'mother' => 'Lorem ipsum dolor sit amet',
                'father' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'd64cc1f2-99e8-41a4-86cf-1ab63e53b4f9',
            ],
        ];
        parent::init();
    }
}

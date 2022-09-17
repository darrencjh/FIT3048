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
                'id' => 'a82f3ae0-3ac1-4ee5-bc3d-b1ff96bb72a7',
                'fund' => 1.5,
                'value' => 1.5,
                'nomination' => 'Lorem ipsum dolor sit amet',
                'binding' => 'Lorem ip',
                'client_id' => '3d0ce09e-c65e-47fd-87de-169f8a5743e3',
            ],
        ];
        parent::init();
    }
}

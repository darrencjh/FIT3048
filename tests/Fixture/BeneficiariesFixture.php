<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BeneficiariesFixture
 */
class BeneficiariesFixture extends TestFixture
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
                'id' => '1c19800a-81b5-4d23-abcf-453e3a255570',
                'name' => 'Lorem ipsum dolor sit amet',
                'relation' => 'Lorem ipsum dolor sit amet',
                'situation' => 'Lorem ipsum dolor sit amet',
                'client_id' => 'da5e1e52-62ea-4d04-a789-448de7281c77',
            ],
        ];
        parent::init();
    }
}

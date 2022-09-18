<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BeneficiariesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BeneficiariesTable Test Case
 */
class BeneficiariesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BeneficiariesTable
     */
    protected $Beneficiaries;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Beneficiaries',
        'app.Clients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Beneficiaries') ? [] : ['className' => BeneficiariesTable::class];
        $this->Beneficiaries = $this->getTableLocator()->get('Beneficiaries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Beneficiaries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BeneficiariesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BeneficiariesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

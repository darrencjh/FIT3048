<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HouseholdersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HouseholdersTable Test Case
 */
class HouseholdersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HouseholdersTable
     */
    protected $Householders;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Householders',
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
        $config = $this->getTableLocator()->exists('Householders') ? [] : ['className' => HouseholdersTable::class];
        $this->Householders = $this->getTableLocator()->get('Householders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Householders);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HouseholdersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\HouseholdersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

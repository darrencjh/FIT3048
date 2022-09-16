<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GrandchildrenTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GrandchildrenTable Test Case
 */
class GrandchildrenTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GrandchildrenTable
     */
    protected $Grandchildren;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Grandchildren',
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
        $config = $this->getTableLocator()->exists('Grandchildren') ? [] : ['className' => GrandchildrenTable::class];
        $this->Grandchildren = $this->getTableLocator()->get('Grandchildren', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Grandchildren);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GrandchildrenTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\GrandchildrenTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

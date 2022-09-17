<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuperannuationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuperannuationsTable Test Case
 */
class SuperannuationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuperannuationsTable
     */
    protected $Superannuations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Superannuations',
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
        $config = $this->getTableLocator()->exists('Superannuations') ? [] : ['className' => SuperannuationsTable::class];
        $this->Superannuations = $this->getTableLocator()->get('Superannuations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Superannuations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SuperannuationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SuperannuationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

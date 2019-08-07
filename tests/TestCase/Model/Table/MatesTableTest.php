<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatesTable Test Case
 */
class MatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MatesTable
     */
    public $Mates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mates') ? [] : ['className' => MatesTable::class];
        $this->Mates = TableRegistry::getTableLocator()->get('Mates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mates);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

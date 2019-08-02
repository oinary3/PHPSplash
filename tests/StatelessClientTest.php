<?php
namespace Tests\Unit;

require '../vendor/autoload.php';

use Oinary3\PHPSplash\StatelessClient;
use PHPUnit\Framework\TestCase;

/**
 * StatelessClient test case.
 */
class StatelessClientTest extends TestCase
{

    /**
     *
     * @var StatelessClient
     */
    private $statelessClient;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated StatelessClientTest::setUp()
        
        $this->statelessClient = new StatelessClient("hoge");
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated StatelessClientTest::tearDown()
        $this->statelessClient = null;
        
        parent::tearDown();
    }

    /**
     * Tests StatelessClient->execute()
     */
    public function testExecute()
    {
        // TODO Auto-generated StatelessClientTest->testExecute()
        $this->markTestIncomplete("execute test not implemented");
        
        $this->statelessClient->execute(null);
        $this->assertTrue(true);
    }
}


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
        
        $this->statelessClient = new StatelessClient("192.168.1.102", 8050);
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
    public function testGetTitleOfGoogle()
    {
        $url = "http://google.com";
        
        $script = <<< EOM
            function main(splash, args)
                assert(splash:go(args.url))
                assert(splash:wait(0.5))
                return {
                    title = splash:evaljs('document.title')
                }
            end
EOM;
        
        $ret = $this->statelessClient->execute($url, $script);
        
        $this->assertEquals('Google', $ret->title);
    }
}


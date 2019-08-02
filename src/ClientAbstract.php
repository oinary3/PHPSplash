<?php
namespace Oinary3\PHPSplash;

/**
 * SAbstract
 *
 * @access public
 * @author Toshiharu Imanari
 * @copyright Toshiharu Imanari All Rights Reserved
 */
abstract class ClientAbstract
{

    /**
     * the ip address or the domain name of splash server
     *
     * @var string http://foo.com:8050/
     */
    protected $splash_server_address;

    /**
     * the port number of splash server
     *
     * @var int
     */
    protected $splash_server_port;

    /**
     * splash server timeout
     *
     * @var float
     */
    protected $timeout = 90.0;

    public function __construct(string $splash_server_address, int $splash_server_port = 8050)
    {
        $this->splash_server_address = $splash_server_address;
        $this->splash_server_port = $splash_server_port;
    }

    protected function getBaseUrl(): string
    {
        return "http://{$this->splash_server_address}:{$this->splash_server_port}/execute";
    }

    /**
     * send request to splash server's execute end point and get results.
     *
     * @param string $script
     * @param array $params
     * @return \stdClass
     */
    public abstract function execute(string $url, string $lua_source): ?\stdClass;
}

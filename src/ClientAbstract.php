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
     * the url of splash server
     *
     * @var string http://foo.com:8050/
     */
    private $splash_server;

    /**
     * the
     *
     * @var string
     */
    private $base_url;

    public function __construct(string $splash_server)
    {
        $this->splash_server = $splash_server;
    }

    public function setBaseUrl(string $base_url): void
    {
        $this->base_url = $base_url;
    }

    /**
     * send request to splash server's execute end point and get results.
     *
     * @param string $script
     * @param array $params
     * @return \stdClass
     */
    public abstract function execute(string $script, array $params = []): \stdClass;
}

<?php
namespace Oinary3\PHPSplash;

class StatelessClient extends ClientAbstract
{

    public function execute(string $url, string $lua_source): ?\stdClass
    
    {
        $lua_source = trim($lua_source);
        $lua_source = urlencode($lua_source);
        $url = $this->getBaseUrl() . "?url={$url}&lua_source={$lua_source}";
        
        $ret = file_get_contents($url);
        
        if ($ret) {
            $obj = json_decode($ret);
            return $obj;
        } else {
            return null;
        }
    }
}

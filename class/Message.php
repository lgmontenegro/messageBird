<?php
namespace Messagebird\Http;

class Message implements Psr\Http\MessageInterface
{
    public function getProtocolVersion()
    {
        return explode('/',$_SERVER['SERVER_PROTOCOL'])[1];
    }    
}

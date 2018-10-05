<?php
namespace Messagebird\Http;

class Message implements \Psr\Http\Message\MessageInterface
{
    private $protocol;

    public function getProtocolVersion()
    {
        $this->protocol = explode('/',$_SERVER['SERVER_PROTOCOL'])[1];
        return $this->protocol;
    }
    
    public function withProtocolVersion($version)
    {
        if($this->protocol === $version){
            return $this;
        }

        $new = clone $this;
        $new->protocol = $version;
        return $new;
    }

    public function getHeaders()
    {
        return true;
    }

    public function hasHeader($name)
    {
        return true;
    }

    public function getHeader($name)
    {
        return true;
    }

    public function getHeaderLine($name)
    {
        return true;
    }

    public function withHeader($name, $value)
    {
        return true;
    }

    public function withAddedHeader($name, $value)
    {
        return true;
    }

    public function withoutHeader($name)
    {
        return true;
    }

    public function getBody()
    {
        return true;
    }

    /*public function withBody(StreamInterface $body)
    {
        return true;
    }*/
}

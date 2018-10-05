<?php
namespace Messagebird\Http;

class Message implements \Psr\Http\Message\MessageInterface
{
    private $protocol;
    private $headers;

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
        $this->headers = [];
        \var_dump(\headers_sent());
        if(\headers_sent()){
            $header =  \headers_list();
        
            foreach($header as $head){
                $lineArray = \explode(':', $head);
                $this->headers[$lineArray[0]] = $lineArray[1];
            }

        }
        return $this->headers;
    }

    public function hasHeader($name)
    {
        $name = \strtolower($name);

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

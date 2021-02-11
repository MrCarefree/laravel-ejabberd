<?php


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class GetChatList implements IEjabberdCommand
{
    private $user;
    private $host;
    private $resource;

    public function __construct($user, $host, $resource)
    {
        $this->user = $user;
        $this->host = $host;
        $this->resource = $resource;
    }

    public function getCommandName()
    {
        return 'send_stanza_c2s';
    }

    public function getCommandData()
    {
        return [
            'user' => $this->user,
            'host' => $this->host,
            'resource' => $this->resource,
            'stanza' => "<iq type='get'><inbox xmlns='urn:xmpp:inbox:1'/></iq>"
        ];
    }
}
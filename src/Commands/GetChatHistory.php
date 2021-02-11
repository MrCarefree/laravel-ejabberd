<?php


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class GetChatHistory implements IEjabberdCommand
{
    private $user;
    private $host;
    private $resource;
    private $with;
    /**
     * @var string
     */
    private $after;

    public function __construct($user, $host, $resource, $with, $after = '')
    {
        $this->user = $user;
        $this->host = $host;
        $this->resource = $resource;
        $this->with = $with;
        $this->after = $after;
    }

    public function getCommandName()
    {
        return 'send_stanza_c2s';
    }

    public function getCommandData()
    {
        $after = $this->after ? "<after>{$this->after}</after>" : "";

        return [
            'user' => $this->user,
            'host' => $this->host,
            'resource' => $this->resource,
            'stanza' => "<iq type='set'><query xmlns='urn:xmpp:mam:2'><x xmlns='jabber:x:data' type='submit'><field var='FORM_TYPE' type='hidden'><value>urn:xmpp:mam:2</value></field><field var='with'><value>{$this->with}</value></x><set xmlns='http://jabber.org/protocol/rsm'><max>20</max>{$after}</set></query></iq>"
        ];
    }
}
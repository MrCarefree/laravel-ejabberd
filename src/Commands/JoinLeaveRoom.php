<?php


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class JoinLeaveRoom implements IEjabberdCommand
{
    private $from;
    private $resource;
    private $to;
    private $nick;
    /**
     * @var string
     */
    private $method;

    public function __construct($from, $resource, $to, $nick, $method = 'join')
    {
        $this->from = $from;
        $this->resource = $resource;
        $this->to = $to;
        $this->nick = $nick;
        $this->method = $method == 'join' ? '' : "type='unavailable'";
    }

    public function getCommandName()
    {
        return 'send_stanza';
    }

    public function getCommandData()
    {
        /*{
            'from': 'user1@localhost/mobile',
            'to': 'chatroom@conference.localhost/user1',
            'stanza': "<presence ?type='unavailable'></presence>"
        }*/

        return [
            'from' => $this->from . '/' . $this->resource,
            'to' => $this->to . '/' . $this->nick,
            'stanza' => "<presence {$this->method}></presence>"
        ];
    }
}
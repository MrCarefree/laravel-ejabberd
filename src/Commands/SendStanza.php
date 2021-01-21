<?php


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class SendStanza implements IEjabberdCommand
{
    private $from;
    private $to;
    private $stanza;

    public function __construct($from, $to, $stanza)
    {
        $this->from = $from;
        $this->to = $to;
        $this->stanza = $stanza;
    }

    public function getCommandName()
    {
        return 'send_stanza';
    }

    public function getCommandData()
    {
        return [
            'from' => $this->from,
            'to' => $this->to,
            'stanza' => $this->stanza
        ];
    }
}
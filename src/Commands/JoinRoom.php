<?php


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class JoinRoom implements IEjabberdCommand
{
    private $from;
    private $to;
    private $service;

    public function __construct($from, $to, $service)
    {
        $this->from = $from;
        $this->to = $to;
        $this->service = $service;
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
            'stanza' => "<presence from='{$this->from}' to='{$this->to}'> <x xmlns='{$this->service}'/> </presence>"
        ];
    }
}
<?php


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class SetRoomAffiliation implements IEjabberdCommand
{
    private $name;
    private $service;
    private $user;
    private $affilation;

    public function __construct($name, $service, $user, $affilation)
    {
        $this->name = $name;
        $this->service = $service;
        $this->user = $user;
        $this->affilation = $affilation;
    }

    public function getCommandName()
    {
        return 'set_room_affiliation';
    }

    public function getCommandData()
    {
        return [
            'name' => $this->name,
            'service' => $this->service,
            'jid' => $this->jid,
            'affiliation' => $this->affilation
        ];
    }
}
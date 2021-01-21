<?php


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class GetUserResources implements IEjabberdCommand
{
    private $server;
    private $user;

    public function __construct($user, $server)
    {
        $this->user = $user;
        $this->server = $server;
    }

    public function getCommandName()
    {
        return 'user_resources';
    }

    public function getCommandData()
    {
        return [
            'user' => $this->user,
            'host' => $this->server
        ];
    }
}
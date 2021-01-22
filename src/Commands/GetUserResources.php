<?php


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class GetUserResources implements IEjabberdCommand
{
    private $user;
    private $host;

    public function __construct($user, $host)
    {
        $this->user = $user;
        $this->host = $host;
    }

    public function getCommandName()
    {
        return 'user_resources';
    }

    public function getCommandData()
    {
        return [
            'user' => $this->user,
            'host' => $this->host
        ];
    }
}
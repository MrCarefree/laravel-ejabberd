<?php


namespace Ejabberd\Commands;


use Ejabberd\Commands\Contracts\IEjabberdCommand;

class SetPresence implements IEjabberdCommand
{
    private $user;
    private $host;
    private $resource;
    private $type;
    private $show;
    private $status;
    private $priority;

    public function __construct($user, $host, $resource, $type, $show, $status, $priority)
    {
        $this->user = $user;
        $this->host = $host;
        $this->resource = $resource;
        $this->type = $type;
        $this->show = $show;
        $this->status = $status;
        $this->priority  = $priority;
    }

    public function getCommandName()
    {
        return 'set_presence';
    }

    public function getCommandData()
    {
        return [
            'user' => $this->user,
            'host' => $this->host,
            'resource' => $this->resource,
            'type' => $this->type,
            'show' => $this->show,
            'status' => $this->status,
            'priority' => $this->priority
        ];
    }
}
<?php


namespace Framework\Command;

use Framework\Command\CommandHandlerInterface;
use Framework\Command\RegisterRoutesCommand;


class RegisterRoutesHandler implements CommandHandlerInterface
{
    private $command;

    public function __construct(RegisterRoutesCommand $command)
    {
        $this->command = $command;
    }

    public function execute(): void
    {
        $this->routeCollection = require __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'routing.php';
        $this->containerBuilder->set('route_collection', $this->routeCollection);
    }


}
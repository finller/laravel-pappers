<?php

namespace Finller\Pappers;

use Finller\Pappers\Integrations\Pappers\PappersConnector;

class Pappers
{
    public function __construct(
        public readonly PappersConnector $client
    ) {
        //
    }

    public function client(): PappersConnector
    {
        return $this->client;
    }
}

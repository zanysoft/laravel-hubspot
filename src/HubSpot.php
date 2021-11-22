<?php

namespace ZanySoft\LaravelHubSpot;

use SevenShores\Hubspot\Factory as Factory;

class HubSpot extends Factory
{

    /**
     * @return \SevenShores\Hubspot\Factory
     */
    public function factory()
    {
        return $this;
    }
}

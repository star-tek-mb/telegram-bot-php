<?php

namespace Formapro\TelegramBot;

use function Formapro\Values\get_value;

class Location
{
    private $values = [];

    public function getLatitude(): string
    {
        return get_value($this, 'latitude');
    }

    public function getLongitude(): ?string
    {
        return get_value($this, 'longitude');
    }
}

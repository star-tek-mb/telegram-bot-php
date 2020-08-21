<?php

namespace Formapro\TelegramBot;

use function Formapro\Values\get_value;
use function Formapro\Values\get_values;
use function Formapro\Values\set_object;
use function Formapro\Values\set_value;

class SendLocation
{
    private $values = [];

    private $objects = [];

    public function __construct(int $chatId, float $latitude, float $longitude)
    {
        set_value($this, 'chat_id', $chatId);
        set_value($this, 'latitude', $latitude);
        set_value($this, 'longtitude', $longitude);
    }

    public function getChatId(): int
    {
        return get_value($this, 'chat_id');
    }

    public function getLatitude(): float
    {
        return get_value($this, 'latitude');
    }

    public function getLongitude(): float
    {
        return get_value($this, 'longitude');
    }

    public function setLatitude(float $latitude): void
    {
        set_value($this, 'latitude', $latitude);
    }

    public function setLongtitude(float $longitude): void
    {
        set_value($this, 'longitude', $longitude);
    }

    public function setReplyMarkup(ReplyMarkup $replyMarkup): void
    {
        set_value($this, 'reply_markup', json_encode(get_values($replyMarkup)));
    }
}

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

    public function __construct(int $chatId, float $latitude, float $longtitude)
    {
        set_value($this, 'chat_id', $chatId);
        set_value($this, 'latitude', $latitude);
        set_value($this, 'longtitude', $longtitude);
    }

    public function getChatId(): int
    {
        return get_value($this, 'chat_id');
    }

    public function getLatitude(): float
    {
        return get_value($this, 'latitude');
    }

    public function getLongtitude(): float
    {
        return get_value($this, 'longtitude');
    }

    public function setLatitude(float $latitude): void
    {
        set_value($this, 'latitude', $latitude);
    }

    public function setLongtitude(float $longtitude): void
    {
        set_value($this, 'longtitude', $longtitude);
    }

    public function setReplyMarkup(ReplyMarkup $replyMarkup): void
    {
        set_value($this, 'reply_markup', json_encode(get_values($replyMarkup)));
    }
}

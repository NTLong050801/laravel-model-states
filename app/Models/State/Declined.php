<?php

namespace App\Models\State;

class Declined extends OrderState
{
    public static $name = 'declined';
    public function name(): string
    {
        // TODO: Implement color() method.
        return  $this->name;
    }
}

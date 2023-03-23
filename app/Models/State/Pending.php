<?php

namespace App\Models\State;

class pending extends OrderState
{
    public static $name = 'pending';
    public function name(): string
    {
        // TODO: Implement color() method.
        return  $this->name;
    }
}

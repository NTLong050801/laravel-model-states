<?php

namespace App\Models\State;

class Approved extends OrderState
{
    public static $name = 'approved';

    public function name(): string
    {
        // TODO: Implement color() method.
        return  $this->name;
    }
}

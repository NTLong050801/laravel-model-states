<?php

namespace App\Models\State;

class pending extends OrderState
{

    public function color(): string
    {
        // TODO: Implement color() method.
        return  'red';
    }
}

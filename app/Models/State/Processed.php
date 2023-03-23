<?php

namespace App\Models\State;

class Processed extends OrderState
{

   public static $name = "processed";
    public function name(): string
    {
      return  $this->name;
        // TODO: Implement name() method.
    }
}

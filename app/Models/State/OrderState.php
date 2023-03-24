<?php

namespace App\Models\State;

use Spatie\ModelStates\State;
use Spatie\ModelStates\StateConfig;

abstract class  OrderState extends State
{
//    abstract public function pending(): string;
//    abstract public function declined(): string;
//    abstract public function approved(): string;
//    abstract public function processed(): string;
    abstract public function name(): string;
    public static function config():StateConfig
    {
        return parent::config()
            ->default(Pending::class)
            ->allowTransition(Pending::class, Declined::class)
            ->allowTransition(Pending::class, Approved::class)
            ->allowTransition(Approved::class, Declined::class)
            ->allowTransition(Approved::class, Processed::class)
            ;
    }


}

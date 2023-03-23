<?php

namespace App\Models;

use App\Models\State\OrderState;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStates\HasStates;
class Order extends Model
{
    use HasFactory,HasStates;
    protected $casts = [
        'state' => OrderState::class,
    ];
}

<?php

namespace App\Models;

use App\Models\State\Approved;
use App\Models\State\Declined;
use App\Models\State\OrderState;
use App\Models\State\pending;
use App\Models\State\Processed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStates\HasStates;

//use App\States\Fulfillment\FulfillmentState;
class Order extends Model
{
    use HasFactory, HasStates;

    protected $fillable = [
        'name',
        'total',
        'state'
    ];
    protected $casts = [
        'state' => OrderState::class,
        //'fulfillment' => FulfillmentState::class,
    ];

    public function start(): void
    {
        $this->transitionTo('in_progress');
    }
}

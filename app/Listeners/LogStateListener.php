<?php

namespace App\Listeners;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Spatie\ModelStates\Events\StateChanged;

class LogStateListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StateChanged $event): void
    {
        //

        //pendiing - done
        $data = "ID : ".$event->model->id." -- From state: ".$event->initialState->getValue()." -- To state : ".$event->finalState->getValue();

        Log::info($data);
    }
}

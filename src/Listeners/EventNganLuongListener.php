<?php

namespace Ttsoft\Nganluong\Listeners;

use Ttsoft\NganLuong\NganLuongEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth as Authenticate;


class EventNganLuongListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(){}

    /**
     * Handle the event.
     *
     * @param  EventLogin  $event
     * @return void
     */
    public function handle(EventLogin $event)
    {
        $credentials = $event->data;
        if (Authenticate::attempt($credentials , request()->has('remember'))) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

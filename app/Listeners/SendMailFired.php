<?php

namespace App\Listeners;

use App\Events\SendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;    
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeEmail;


class SendMailFired implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendMail  $event
     * @return void
     */
    public function handle(SendMail $event)
    {

        sleep(10);
        $details =[
            
            'title'=>'Mail form Shreya',
            'body'=>'Thank You For Registration!'
        ];


        mail::to($event->data->email)->send(new welcomeEmail($details));
    }
}

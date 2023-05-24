<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\Test;
use Mail;

class TestMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
         $name = 'laravel Class';
        Mail::to('asiddiq538@gmail.com')->send(new Test($name));
        $name = 'laravel Class';
        Mail::to('asiddiq538@gmail.com')->send(new Test($name));
        $name = 'laravel Class';
        Mail::to('asiddiq538@gmail.com')->send(new Test($name));
        $name = 'laravel Class';
        Mail::to('asiddiq538@gmail.com')->send(new Test($name));
        $name = 'laravel Class';
        Mail::to('asiddiq538@gmail.com')->send(new Test($name));
    }
}

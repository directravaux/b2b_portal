<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->data;

        Mail::send('mail.welcome', ['user' => $data], function ($m) use ($data) {
            $m->from(Config("mail.from.address"), Config("mail.from.name"));
            $m->to($data['email']);
            $m->subject("Welcome Email!");
        });

        if ($data['user_role'] == "vendor") {
            Mail::send('mail.verify', ['user' => $data], function ($m) use ($data) {
                $m->from(Config("mail.from.address"), Config("mail.from.name"));
                $m->to($data['email']);
                $m->subject("Verify Email!");
            });
        }
    }
}

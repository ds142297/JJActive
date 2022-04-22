<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use PDF;
use App\Models\Registration;

class SendCertificate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $register;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($register)
    {
        $this->register = $register;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = [
            "name" => $this->register->name,
            "bib" => $this->register->bib,
        ];
        $register= $this->register;
        Mail::send('emails.certificate', $data, function($message) use($register)
        {
        $message->to($register->email, $register->name)->cc('subham.5ine@gmail.com')->subject('TCSW10K "Training Run One" – Certification');
        $message->attach(public_path('admin/certificate/').$register->name.'-'.$register->bib.'.pdf');
        });
    }
}

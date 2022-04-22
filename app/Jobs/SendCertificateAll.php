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

class SendCertificateAll implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $registration;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($registration)
    {
        $this->registration = $registration;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach($this->registration as $register){
            $data = [
                "name" => $register->name,
                "bib" => $register->bib,
            ];
            Mail::send('emails.certificate', $data, function($message) use($register)
            {
            $message->to($register->email, $register->name)->cc('subham.5ine@gmail.com')->subject('TCSW10K "Training Run One" – Certification');
            $message->attach(public_path('admin/certificate/').$register->name.'-'.$register->bib.'.pdf');
            });
        }
    }
}

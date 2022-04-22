<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MatchSendAdminEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $detail;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($detail)
    {
        $this->detail = $detail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("subham.s@jurysoft.com", "JJ ACTIVE");
        $email->setSubject("TCSW10K -  New Registration");
        $email->addTo("subham.5ine@gmail.com", "Admin");
        $email->addContent(
            "text/html", '
            <!DOCTYPE html>
            <html>
            <head>
            <title>TCSW10K - Registration (E-BIB : '.$this->detail->bib.')</title>
            </head>
            <body>
            
            <h2>New Registration (E-BIB : '.$this->detail->bib.')</h2>
            <table>
            <tr>
            <th>E-BIB : </th>
            <td>'.$this->detail->bib.'</td>
            </tr><tr>
            <th>Name : </th>
            <td>'.$this->detail->name.'</td>
            </tr><tr>
            <th>Email : </th>
            <td>'.$this->detail->email.'</td>
            </tr><tr>
            <th>Phone : </th>
            <td>'.$this->detail->phone.'</td>
            </tr>
            </table>
            
            </body>
            </html> 
            
            '
        );
        $sendgrid = new \SendGrid('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');
        try {
            $response = $sendgrid->send($email);
        } catch (Exception $e) {}
    }
}

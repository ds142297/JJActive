<?php

namespace App\Helper;
use App\Helper\EmailConfig;


class EmailSender {
    protected $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->email = new EmailConfig;
    }

    public function sendUserMail($detail){
        $this->email->from('testing@5ines.com', 'ONCA'); 
        $this->email->to($detail->email);
        $this->email->subject('Registration to TCSW10K "Training Run One" – Success'); 
        
        $this->email->message('
            <!DOCTYPE html>
            <html>
            <head>
            <title>TCSW10K - Registration (BIB : '.$detail->id.')</title>
            </head>
            <body>

            Dear '.$detail->name.',<br><br>
            Your registration to TCSW10K "Training Run One" is successful.<br><br>
            Registration ID: '.$detail->id.'<br></br>
            Below is the Event information:<br>
            Date: 23.04.2022<br>
            Start Time: 6:00 AM<br>
            Reporting Time:<br>
            Venue: BDA Complex, 2nd Cross Electronic City, Phase 1<br>
            Location pin:</br/>
            Contact Name:</br/>
            Contact Number: 9844093666<br><br>
            If you have any queries, contact the above number or 9844093666, or write to us at admin@jjactive.in<br>
            
            </body>
            </html> 
        ');

        $this->email->send();
    }

    public function sendAdminMail($detail){
        $this->email->from('testing@5ines.com', 'ONCA'); 
        $this->email->to('subham.5ine@gmail.com');
        $this->email->subject('TCSW10K -  New Registration'); 
        
        $this->email->message('
            <!DOCTYPE html>
            <html>
            <head>
            <title>TCSW10K - Registration (BIB : '.$detail->id.')</title>
            </head>
            <body>
            
            <h2>New Registration (BIB : '.$detail->id.')</h2>
            <table>
            <tr>
            <th>BIB : </th>
            <td>'.$detail->id.'</td>
            </tr><tr>
            <th>Name : </th>
            <td>'.$detail->name.'</td>
            </tr><tr>
            <th>Email : </th>
            <td>'.$detail->email.'</td>
            </tr><tr>
            <th>Phone : </th>
            <td>'.$detail->phone.'</td>
            </tr>
            </table>
            
            </body>
            </html> 
        ');

        $this->email->send();
    }

}
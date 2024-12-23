<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationCreated extends Mailable
{
    use Queueable, SerializesModels;

    public Application $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        $mail =  $this->from('webcoderazizbek@gmail.com', 'WebCoder')
            ->subject('Application Created')
            ->view('emails.application-created');

if(! is_null($this->application->file_up)){
     $mail->attachFromStorageDisk('public', $this->application->file_up);
}


return $mail;
    }



   }

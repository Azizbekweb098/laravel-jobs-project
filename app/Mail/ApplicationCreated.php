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

    public $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->from('webcoderazizbek@gmail.com', 'WebCoder')
            ->subject('Application Created')
            ->view('emails.application-created')  // Faqat viewga murojaat qiling
            ->attachFromStorageDisk('public', $this->application->file_up);  // Faylni saqlash
    }

    // Bu metodni o'chirish mumkin, chunki `build()` uni avtomatik tarzda bajaradi
    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'Application Created',
    //     );
    // }

    // public function content()
    // {
    //     return new Content(
    //         view: 'emails.application-created', // To'g'ri format
    //     );
    // }

    // public function attachments()
    // {
    //     return [];
    // }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $company;
    protected $email;
    protected $phone;
    protected $comment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $company,  $email, $phone, $comment)
    {
        $this->name = $name;
        $this->company = $company;
        $this->email = $email;
        $this->phone = $phone;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contactMail')
        ->with([
            'name' => $this->name,
            'company' => $this->company,
            'email' => $this->email,
            'phone' => $this->phone,
            'comment' => $this->comment,
        ])
        ->subject('Обратная связь');
    }
}

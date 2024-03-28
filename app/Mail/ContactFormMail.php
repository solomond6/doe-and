<?php

namespace App\Mail;

use App\Models\ContactFormModel;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactForm;

    /**
     * Create a new message instance.
     *
     * @param ContactFormModel $contactForm
     * @return void
     */
    public function __construct(ContactFormModel $contactForm)
    {
        $this->contactForm = $contactForm;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->contactForm->email)
                    ->view('emails.contact-form')
                    ->with(['contactForm' => $this->contactForm]);
    }
}

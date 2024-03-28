<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactFormModel;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function submitForm()
    {
        try{
            // Validation
            $this->validate([
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);

            // Store in database
            $contactForm = new ContactFormModel();
            $contactForm->name = $this->name;
            $contactForm->email = $this->email;
            $contactForm->message = $this->message;
            $contactForm->save();

            // Send email
            Mail::to('your@email.com')->send(new ContactFormMail($contactForm));

            // Display success notification
            Session::flash('success', 'Form submitted successfully!');

            // Reset form fields after submission
            $this->resetForm();
        }catch(\Exception $e){
            // Display success notification
            Session::flash('error', 'Error submiting form!');
        }
        
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

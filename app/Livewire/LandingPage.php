<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactFormSubmitted;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Mail;

class LandingPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $formSubmitted = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submitContactForm()
    {
        $this->validate();

        // Save to DB
        ContactSubmission::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        // Send email to admin
        Mail::to('admin@example.com')->send(new ContactFormSubmitted(
            $this->name,
            $this->email,
            $this->message
        ));

        $this->formSubmitted = true;
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.landing-page')->layout('layouts.landing');
    }
}

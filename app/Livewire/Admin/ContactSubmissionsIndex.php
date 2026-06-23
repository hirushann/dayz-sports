<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ContactSubmission;
use Livewire\Attributes\Layout;

class ContactSubmissionsIndex extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.contact-submissions-index', [
            'submissions' => ContactSubmission::latest()->paginate(10)
        ]);
    }

    public function delete(ContactSubmission $submission)
    {
        $submission->delete();
        $this->dispatch('toast', type: 'success', text: 'Submission deleted successfully.');
    }
}

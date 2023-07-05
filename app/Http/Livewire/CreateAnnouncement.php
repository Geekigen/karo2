<?php

namespace App\Http\Livewire;

use App\Models\Anouncement;
use Carbon\Carbon;
use Livewire\Component;

class CreateAnnouncement extends Component
{
  
    public $content;
    public $deadline;
    public $announcementId; // Used for editing

    public function render()
    {
        $announcements = Anouncement::all();
        return view('livewire.create-announcement', compact('announcements'));
    }

    public function saveAnnouncement()
    {
        $validatedData = $this->validate([
            'content' => 'required',
            'deadline' => 'required|date',
        ]);
        $validatedData['deadline'] = Carbon::createFromFormat('Y-m-d', $this->deadline)->startOfDay();
        Anouncement::create($validatedData);

        $this->resetForm();
        session()->flash('success', 'Announcement created successfully.');
    }

    public function editAnnouncement($id)
    {
        $announcement = Anouncement::findOrFail($id);
        $this->announcementId = $announcement->id;
        $this->content = $announcement->content;
        $this->deadline = $announcement->deadline;
    }

    public function updateAnnouncement()
    {
        $validatedData = $this->validate([
            'content' => 'required',
            'deadline' => 'required|date',
        ]);

        $announcement = Anouncement::findOrFail($this->announcementId);
        $announcement->update($validatedData);

        $this->resetForm();
        session()->flash('success', 'Announcement updated successfully.');
    }

    public function deleteAnnouncement($id)
    {
        $announcement = Anouncement::findOrFail($id);
        $announcement->delete();
        session()->flash('success', 'Announcement deleted successfully.');
    }

    private function resetForm()
    {
        $this->content = '';
        $this->deadline = '';
        $this->announcementId = null;
    }
}

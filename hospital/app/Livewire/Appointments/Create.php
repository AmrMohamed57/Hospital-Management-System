<?php

namespace App\Livewire\Appointments;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Section;
use Livewire\Component;

class Create extends Component
{
    public $doctors;
    public $sections;
    public $doctor;
    public $section;
    public $name;
    public $email;
    public $phone;
    public $notes;
    public $message = false;

    public function mount()
    {
        $this->sections = Section::get();
        $this->doctors = collect();
    }

    public function render()
    {
        return view('livewire.appointments.create', [
            'sections' => Section::get()
        ]);
    }

    public function updatedSection($section_id)
    {
        $this->doctors = Doctor::where('section_id', $section_id)->get();
    }

    public function store()
    {
        // حفظ الموعد في قاعدة البيانات
        $appointment = new Appointment();
        $appointment->doctor_id = $this->doctor;
        $appointment->section_id = $this->section;
        $appointment->name = $this->name;
        $appointment->email = $this->email;
        $appointment->phone = $this->phone;
        $appointment->notes = $this->notes;
        $appointment->save();

        // تفريغ الحقول بعد الحفظ
        $this->reset(['doctor', 'section', 'name', 'email', 'phone', 'notes']);
        $this->message=true;
    }
}

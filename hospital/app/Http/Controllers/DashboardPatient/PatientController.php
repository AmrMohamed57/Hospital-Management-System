<?php

namespace App\Http\Controllers\DashboardPatient;

use App\Http\Controllers\Controller;
use App\Interfaces\patient_dashboard\PatientViewRepositoryInterface;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    private $patient;
    
    public function __construct(PatientViewRepositoryInterface $patient)
    {
        $this->patient = $patient;
    }

    public function invoices(){
        return $this->patient->invoices();
    }

    public function laboratories(){
        return $this->patient->laboratories();
    }

    public function viewLaboratories($id){
        return $this->patient->viewLaboratories($id);
    }

    public function rays(){
        return $this->patient->rays();
    }

    public function viewRays($id){
        return $this->patient->viewRays($id);
    }

    public function payments(){
        return $this->patient->payments();
    }
}

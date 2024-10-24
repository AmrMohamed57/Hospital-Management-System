<?php

namespace App\Interfaces\patient_dashboard;

interface PatientViewRepositoryInterface
{
    public function invoices();
    public function laboratories();
    public function viewLaboratories($id);
    public function rays();
    public function viewRays($id);
    public function payments();
}
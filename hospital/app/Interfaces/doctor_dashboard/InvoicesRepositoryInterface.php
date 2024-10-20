<?php

namespace App\Interfaces\doctor_dashboard;

interface InvoicesRepositoryInterface
{
    // Get Invoices Doctor
    public function index($id);

    // Show rays of patients 
    public function show($id);

    // Show labs of patients 
    public function showLabs($id);
}
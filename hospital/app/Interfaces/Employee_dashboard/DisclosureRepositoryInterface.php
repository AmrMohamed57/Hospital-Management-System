<?php
namespace App\Interfaces\Employee_dashboard;

interface DisclosureRepositoryInterface
{
    // Get All Patients
    public function index($id);

    // Edit Disclosure
    public function edit($id);

    // Update Disclosure
    public function update($request, $id);
}
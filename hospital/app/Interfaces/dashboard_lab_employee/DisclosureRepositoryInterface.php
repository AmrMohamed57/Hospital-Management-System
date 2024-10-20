<?php
namespace App\Interfaces\dashboard_lab_employee;

interface DisclosureRepositoryInterface
{
    // Get All Patients
    public function index($id);

    // Edit Disclosure
    public function edit($id);

    // Update Disclosure
    public function update($request, $id);
}
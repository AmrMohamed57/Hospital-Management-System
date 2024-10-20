<?php

namespace App\Http\Controllers\LabEmployee;

use App\Http\Controllers\Controller;
use App\Interfaces\dashboard_lab_employee\DisclosureRepositoryInterface;
use Illuminate\Http\Request;

class LabEmployeeController extends Controller
{
    private $disclosure;

    public function __construct( DisclosureRepositoryInterface $disclosure )
    {
        $this->disclosure = $disclosure;   
    }

    public function index($id)
    {
        return $this->disclosure->index($id);
    }

    public function edit(string $id)
    {
        return $this->disclosure->edit($id);
    }

    public function update(Request $request, string $id)
    {
        return $this->disclosure->update($request , $id);
    }

}

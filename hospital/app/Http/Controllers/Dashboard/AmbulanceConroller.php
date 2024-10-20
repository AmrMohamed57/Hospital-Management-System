<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Ambulance\AmbulanceRepositoryInterface;
use App\Models\Ambulance;
use Illuminate\Http\Request;

class AmbulanceConroller extends Controller
{
    private $Ambulance;

    public function __construct(AmbulanceRepositoryInterface $ambulance)
    {
        $this->Ambulance = $ambulance;
    }

    public function index()
    {
        return $this->Ambulance->index();
    }

    public function create()
    {
        return $this->Ambulance->create();
    }

    public function store(Request $request)
    {
        return $this->Ambulance->store($request);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return $this->Ambulance->edit($id);
    }

    public function update(Request $request)
    {
        return $this->Ambulance->update($request);
    }

    public function destroy(Request $request)
    {
        return $this->Ambulance->destroy($request);
    }
}

<?php
namespace App\Interfaces\Ambulance;

interface AmbulanceRepositoryInterface
{
    public function index();
    public function create();
    public function store($request);
    public function destroy($request);
    public function edit($id);
    public function update($request);

}

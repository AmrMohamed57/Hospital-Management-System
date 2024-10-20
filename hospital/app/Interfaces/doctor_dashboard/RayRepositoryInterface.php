<?php

namespace App\Interfaces\doctor_dashboard;

interface RayRepositoryInterface
{
    public function store($request);

    public function update($request,$id);

    public function destroy($id);
}
<?php

namespace App\Http\Controllers\RayEmployee;

use App\Http\Controllers\Controller;
use App\Interfaces\Employee_dashboard\DisclosureRepositoryInterface;
use Illuminate\Http\Request;

class DisclosureController extends Controller
{
    private $disclosure;
    
    public function __construct( DisclosureRepositoryInterface $disclosure )
    {
        $this->disclosure = $disclosure;
    }

    public function index($id){
        return $this->disclosure->index($id);
    }

    public function edit($id){
        return $this->disclosure->edit($id);
    }

    public function update(Request $request, $id){
        return $this->disclosure->update($request, $id);
    }
}

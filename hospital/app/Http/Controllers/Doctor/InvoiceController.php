<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\doctor_dashboard\InvoicesRepositoryInterface;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public $invoices; 

    public function __construct(InvoicesRepositoryInterface $invoices){
        $this->invoices = $invoices;
    }

    public function index(string $id)
    {
        return $this->invoices->index($id);
    }

    public function show(string $id)
    {
        return $this->invoices->show($id);
    }

    public function showLabs(string $id)
    {
        return $this->invoices->showLabs($id);
    }

}

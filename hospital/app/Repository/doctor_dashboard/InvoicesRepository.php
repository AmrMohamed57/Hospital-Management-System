<?php

namespace App\Repository\doctor_dashboard;
use App\Interfaces\doctor_dashboard\InvoicesRepositoryInterface;
use App\Models\Invoice;
use App\Models\Laboratorie;
use App\Models\Ray;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class InvoicesRepository implements InvoicesRepositoryInterface
{

    public function index($id)
    {
        $invoices =Invoice::where('doctor_id', Auth::user()->id)
                          ->where('invoice_status', $id)
                          ->get();    
        return view('dashboard.doctor.invoices.index', compact('invoices'));
    }

    public function show($id)
    {
        $rays = Ray::findorFail($id);
        if($rays->doctor_id != Auth::user()->id){
            return redirect()->route("404");
        }

        return view('dashboard.doctor.invoices.view_rays', compact('rays'));
    }

    public function showLabs($id)
    {
        $labs = Laboratorie::findorFail($id);
        if($labs->doctor_id != Auth::user()->id){
            return redirect()->route("404");
        }

        return view('dashboard.doctor.invoices.view_labs', compact('labs'));
    }
}
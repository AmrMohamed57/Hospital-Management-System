<?php
namespace App\Repository\Patients;

use App\Interfaces\Patients\PatientRepositoryInterface;
use App\Models\Invoice;
use App\Models\Patient;
use App\Models\PatientAccount;
use App\Models\ReceiptAccount;
use App\Models\SingleInvoices;
use Illuminate\Support\Facades\Hash;

class PatientRepository implements  PatientRepositoryInterface
{
    public function index()
    {
        $Patients = Patient::all();
        return view("dashboard/patients/index" , compact("Patients"));
    }

    public function create(){
        return view("dashboard/patients/create");
    }

    public function store($request){
        try{
            $Patient = new Patient();
            $Patient->email = $request->email;
            $Patient->Password = Hash::make($request->phone);
            $Patient->Date_Birth = $request->Date_Birth;
            $Patient->Gender = $request->Gender;
            $Patient->Phone = $request->Phone;
            $Patient->Blood_Group = $request->Blood_Group;
            $Patient->save();

            //install into trans
            $Patient->name= $request->name;
            $Patient->Address = $request->Address;
            $Patient->save();

            session()->flash('add');
            return redirect()->route('Patients.index');

        }catch(\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $Patient = Patient::find($id);
        return view("dashboard/patients/edit" , compact("Patient"));
    }

    public function show($id)
    {
        $Patient = patient::findorfail($id);
        $invoices = Invoice::where('patient_id', $id)->get();
        $receipt_accounts = ReceiptAccount::where('patient_id', $id)->get();
        $Patient_accounts = PatientAccount::where('patient_id', $id)->get();
        return view('Dashboard.Patients.show', compact('Patient', 'invoices', 'receipt_accounts', 'Patient_accounts'));

    }

    public function update($request)
    {
        $Patient= Patient::findOrFail($request->id);
        $Patient->email = $request->email;
        $Patient->Password = Hash::make($request->phone);
        $Patient->Date_Birth = $request->Date_Birth;
        $Patient->Gender = $request->Gender;
        $Patient->Phone = $request->Phone;
        $Patient->Blood_Group = $request->Blood_Group;
        $Patient->save();

        //install into trans
        $Patient->name= $request->name;
        $Patient->Address = $request->Address;
        $Patient->save();

        session()->flash('edit');
        return redirect()->route('Patients.index');

    }

    public function destroy($request)
    {
        $Patient = Patient::find($request->id);
        $Patient->delete();
        session()->flash('delete');
        return redirect()->back();

    }
}
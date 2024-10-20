<?php
namespace App\Repository\dashboard_lab_employee;

use App\Interfaces\dashboard_lab_employee\DisclosureRepositoryInterface;
use App\Models\Laboratorie;
use App\Traits\UploadTrait;
use App\Models\Ray;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DisclosureRepository implements  DisclosureRepositoryInterface
{
    use UploadTrait;

    public function index($id)
    {
        if ($id == 0) {
            $invoices = Laboratorie::where('case', 0)->get();
        } elseif ($id == 1) {
            $invoices = Laboratorie::where('case', 1)
                            ->where('employee_id', auth()->user()->id)
                            ->get();
        }
    
        return view("dashboard.dashboard_LaboratorieEmployee.invoices.index", compact("invoices"));
    }
    
    public function edit($id)
    {
        $invoice = Laboratorie::findOrFail($id);
        return view('dashboard.dashboard_LaboratorieEmployee.invoices.add',compact('invoice'));
    }
 
    public function update($request, $id)
    {
        DB::beginTransaction();
        try{
            $invoice = Laboratorie::findorFail($id);

            $invoice->update([
                'employee_id'=> auth()->user()->id,
                'description_employee'=> $request->description_employee,
                'case'=> 1,
            ]);
    
            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $photo) { 
                    $this->verifyAndStoreImageForeach($photo, 'laboratories', 'upload_image', $invoice->id, 'App\Models\Laboratorie');
                }
            }            
            DB::commit();
            session()->flash('edit');
            return redirect()->route('labDisclosures' , ['id' => 1]);
        }
        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
    
    

}
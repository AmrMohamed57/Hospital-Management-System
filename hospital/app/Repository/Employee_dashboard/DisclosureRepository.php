<?php
namespace App\Repository\Employee_dashboard;

use App\Interfaces\Employee_dashboard\DisclosureRepositoryInterface;
use App\Traits\UploadTrait;
use App\Models\Ray;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DisclosureRepository implements  DisclosureRepositoryInterface
{
    use UploadTrait;

    public function index($id)
    {
        if ($id == 0) {
            $invoices = Ray::where('case', 0)->get();
        } elseif ($id == 1) {
            $invoices = Ray::where('case', 1)
                            ->where('employee_id', auth()->user()->id)
                            ->get();
        }
    
        return view("dashboard.dashboard_RayEmployee.invoices.index", compact("invoices"));
    }
    
    public function edit($id)
    {
        $invoice = Ray::findorFail($id);
        return view('dashboard.dashboard_RayEmployee.invoices.add',compact('invoice'));
    }
 
    public function update($request, $id)
    {
        DB::beginTransaction();
        try{
            $invoice = Ray::findorFail($id);

            $invoice->update([
                'employee_id'=> auth()->user()->id,
                'description_employee'=> $request->description_employee,
                'case'=> 1,
            ]);
    
            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $photo) { 
                    $this->verifyAndStoreImageForeach($photo, 'Rays', 'upload_image', $invoice->id, 'App\Models\Ray');
                }
            }            
            DB::commit();
            session()->flash('edit');
            return redirect()->route('disclosure' , ['id' => 1]);
        }
        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
   }
}
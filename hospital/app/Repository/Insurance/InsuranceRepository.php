<?php
namespace App\Repository\Insurance;

use App\Interfaces\Insurance\InsuranceRepositoryInterface;
use App\Models\Insurance;

class InsuranceRepository implements  InsuranceRepositoryInterface
{
    public function index()
    {
        $insurances = Insurance::all();

        return view("dashboard.insurance.index" , compact("insurances"));
    }

    public function create(){
        return view("dashboard.insurance.create");
    }

    public function store($request)
    {
        try
        {
            $insurances = new insurance();
            $insurances->insurance_code = $request->insurance_code;
            $insurances->discount_percentage = $request->discount_percentage;
            $insurances->Company_rate = $request->Company_rate;
            $insurances->status = 1;
            $insurances->save();

            // install in trans
            $insurances->name = $request->name;
            $insurances->notes = $request->notes;
            $insurances->save();

            session()->flash("add");
            return redirect()->route("insurance.index");

        }
        catch(\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $insurances = Insurance::find($id);
        return view("dashboard.insurance.edit" , compact("insurances"));
    }

    public function update($request)
    {
        $status = $request->has('status') ? 1 : 0;
        $request->request->add(['status' => $status]);

        $insurances = Insurance::findOrFail($request->id);

        $companyRate = $request->input('company_rate');
        if (empty($companyRate)) {
            $companyRate = 0;
        }

        $insurances->update($request->all());

        // insert trans
        $insurances->name = $request->name;
        $insurances->notes = $request->notes;
        $insurances->save();

        session()->flash('edit', 'تم التحديث بنجاح');
        return redirect('insurance');
    }


    public function destroy($request)
    {
        insurance::destroy($request->id);
        session()->flash('delete');
        return redirect('insurance');
    }
}

<?php   
namespace App\Repository\Ambulance;

use App\Interfaces\Ambulance\AmbulanceRepositoryInterface;
use App\Models\Ambulance;

class AmbulanceRepository implements  AmbulanceRepositoryInterface{

    public function index()
    {
        $ambulances = Ambulance::all();
        return view("dashboard/ambulances/index" , compact("ambulances"));
    }

    public function create() {
        return view("dashboard/ambulances/create");
    }

    public function store($request)
    {
        try {
            $Ambulances = new Ambulance();
            $Ambulances->car_number = $request->car_number;
            $Ambulances->car_model = $request->car_model;
            $Ambulances->car_year_made = $request->car_year_made;
            $Ambulances->driver_license_number = $request->driver_license_number;
            $Ambulances->driver_phone = $request->driver_phone;
            $Ambulances->is_available=1;
            $Ambulances->car_type = $request->car_type;
            $Ambulances->save();

            //insert trans
            $Ambulances->driver_name = $request->driver_name;
            $Ambulances->notes = $request->notes;
            $Ambulances->save(); 

            session()->flash('add');
            return redirect()->back();
            

        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $ambulance = Ambulance::findOrFail($id);
        return view("dashboard/ambulances/edit" , compact("ambulance"));
    }

    public function update($request){
        if(!$request->has("is_available"))
            $request->request->add(['is_available' => 2]);
        else
            $request->request->add(['is_available' => 1]);
        
        $ambulance = Ambulance::findOrFail($request->id);
        $ambulance->update($request->all());

        // insert trans
        $ambulance->driver_name = $request->driver_name;
        $ambulance->notes = $request->notes;
        $ambulance->save();

        session()->flash('edit');
        return redirect()->route('Ambulance.index');

    }

    public function destroy($request){

        $ambulance = Ambulance::findOrFail($request->id);
        $ambulance->delete();
        session()->flash('delete');
        return redirect()->route('Ambulance.index');
    }
}
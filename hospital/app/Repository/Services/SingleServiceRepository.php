<?php   
namespace App\Repository\Services;

use App\Interfaces\Services\SingleServiceRepositoryInterface;
use App\Models\Service;
use App\Models\Services\SingleServiceModel;
use Illuminate\Http\Request;

class SingleServiceRepository implements SingleServiceRepositoryInterface  
{     
    public function index(){
        $services = Service::all();
        return view("dashboard.services.single service.index" , compact('services'));
    }


    public function store($request)
    {
        try
        {
            $singleService = new Service();
            $singleService->price = $request->price;
            $singleService->description = $request->description;
            $singleService->status = 1;
            $singleService->save();

            //insert in table trans
            $singleService->name = $request->name;
            $singleService->save();

            session()->flash('add');
            return redirect()->route('Service.index');
        }
        catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function update($request)  {
        try
        {
            $singleService = Service::findOrFail($request->id);
            $singleService->price = $request->price;
            $singleService->description = $request->description;
            $singleService->status = $request->status;
            $singleService->save();

            //insert in table trans
            $singleService->name = $request->name;
            $singleService->save();

            session()->flash('edit');
            return redirect()->route('Service.index');
        }
        catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request){

        Service::destroy($request->id);

        session()->flash("delete");
        
        return redirect()->route("Service.index");

    }
}
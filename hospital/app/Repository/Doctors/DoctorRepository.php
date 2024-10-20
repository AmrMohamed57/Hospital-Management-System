<?php
namespace App\Repository\Doctors;

use App\Interfaces\Doctors\DoctorRepositoryInterface;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Section;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class DoctorRepository implements  DoctorRepositoryInterface
{
    use UploadTrait;

    public function index()
    {
        $doctors = Doctor::with('image' , 'doctorappointments')->get();
        return view('dashboard.doctors.index' , compact('doctors'));
    }


    public function create()
    {
        $sections = Section::all();
        $appointments = Appointment::all();
        return view('dashboard.doctors.add' , compact('sections' , 'appointments'));
    }

    public function store($request)
    {

        DB::beginTransaction();

        try {

            $doctors = new Doctor();
            $doctors->email = $request->email;
            $doctors->password = Hash::make($request->password);
            $doctors->section_id = $request->section_id;
            $doctors->phone = $request->phone;
            $doctors->status = 1;
            $doctors->save();

            // store trans
            $doctors->name = $request->name;
            if($request->appointments){
                $doctors->appointments = implode(",", $request->appointments);
            }

            $doctors->save();


            //Upload img
            $this->verifyAndStoreImage($request,'photo','doctors','upload_image',$doctors->id,'App\Models\Doctor');

            DB::commit();
            session()->flash('add');
            return redirect()->route('Doctors.create');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function edit($id)
    {
        $sections = Section::all();
        $appointments = Appointment::all();
        $doctor = Doctor::find($id);
        return view('dashboard.doctors.edit' , get_defined_vars());

    }

    public function update($request){
        DB::beginTransaction();

        try {

            $doctor = Doctor::findorfail($request->id);

            $doctor->email = $request->email;
            $doctor->section_id = $request->section_id;
            $doctor->phone = $request->phone;
            $doctor->save();
            // store trans
            $doctor->name = $request->name;

            if($request->appointments){
                $doctor->appointments = implode(",", $request->appointments);
            }

            $doctor->save();


            // update photo
            if ($request->has('photo')){
                // Delete old photo
                if ($doctor->image){
                    $old_img = $doctor->image->filename;
                    $this->Delete_attachment('upload_image','doctors/'.$old_img,$request->id);
                }
                //Upload img
                $this->verifyAndStoreImage($request,'photo','doctors','upload_image',$request->id,'App\Models\Doctor');
            }

            DB::commit();
            session()->flash('edit');
            return redirect()->back();

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update_password($request){
        try{
            $doctor = Doctor::findorfail($request->id);
            $doctor->update([
                'password' =>Hash::make($request->password)
            ]);

            session()->flash('edit');
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update_status($request)
    {

        try{
            $doctor = Doctor::findorfail($request->id);
            $doctor->update([
                'status' => $request->status
                ]);
                session()->flash('edit');
                return redirect()->back();
            }
            catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
    }

    public function destroy($request)
    {
        if ($request->page_id == 1) {
            if ($request->filename) {
                // استخدم اسم الدرايفر 'upload_image' والمسار 'doctors/'.$request->filename
                $this->Delete_attachment('upload_image', 'doctors/'.$request->filename, $request->id, $request->filename);
            }

            //Delete doctor recode from the database
            Doctor::destroy($request->id);
            session()->flash('delete');
            return redirect()->route('Doctors.index');



        }else{
          // delete selector doctor
          $delete_select_id = explode(",", $request->delete_select_id);

            foreach ($delete_select_id as $ids_doctors) {
              $doctor = Doctor::findOrFail($ids_doctors);

              if ($doctor->image) {
                  // Pass the parameters to Delete_attachment method
                  $this->Delete_attachment('upload_image', 'doctors/' . $doctor->image->filename, $doctor->image->id, $doctor->image->filename);
              }

            }
            // Delete doctor records from the database
            Doctor::destroy($delete_select_id);

            session()->flash('delete');
            return redirect()->route('Doctors.index');
        }
    }
}

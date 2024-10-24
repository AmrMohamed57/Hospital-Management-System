<?php

namespace App\Http\Controllers\Dashboard\appointments;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentConfirmation;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function index(){

        $appointments = Appointment::where('type','unconfirmed')->get();
        return view('Dashboard.appointments.index',compact('appointments'));
    }

    public function index2(){

        $appointments = Appointment::where('type','confirmed')->get();
        return view('Dashboard.appointments.index2',compact('appointments'));
    }

    public function approval(Request $request,$id){
        $appointment = Appointment::findorFail($id);
        $appointment->update([
            'type'=>'confirmed',
            'appointment'=>$request->appointment
        ]);
        // send email
        Mail::to($appointment->email)->send(new AppointmentConfirmation($appointment));
        session()->flash('add');
        return back();
    }
}

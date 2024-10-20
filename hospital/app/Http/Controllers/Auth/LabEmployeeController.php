<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LabEmployeeLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LabEmployeeController extends Controller
{
    public function store(LabEmployeeLoginRequest $request)
    {
        if($request->authenticate()){
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::LabEmployee);
        }

        return redirect()->back()->withErrors(['name' => (trans('Dashboard/auth.failed'))]);

    }
    public function destroy(Request $request)
    {
        Log::info('Logout attempt for doctor.');
    
        Auth::guard('lab_employee')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}

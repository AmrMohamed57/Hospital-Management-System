<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;

    public function Invoice(){
        return $this->belongsTo(Invoice::class , 'invoice_id');
    }

    public function Patient(){
        return $this->belongsTo(Patient::class , 'patient_id');
    }

    public function Doctor(){
        return $this->belongsTo(Doctor::class , 'doctor_id');
    }
}

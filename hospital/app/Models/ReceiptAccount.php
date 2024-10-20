<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReceiptAccount extends Model
{
    use HasFactory;

    public function patients(){
        return $this->BelongsTo(Patient::class , 'patient_id');
    }
}

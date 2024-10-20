<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Image extends Model
{
    use HasFactory;
    public function imageable(){
        
        return $this->morphTo();
    }
}

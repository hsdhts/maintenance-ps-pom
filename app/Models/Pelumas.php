<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ShiftOneLabs\LaravelCascadeDeletes\CascadesDeletes;

class Pelumas extends Model
{
    use HasFactory;
    use SoftDeletes, CascadesDeletes;


    protected $dates = ['deleted_at'];
    
    
    protected $guarded = ['id'];


    public function sparepart() {
        return $this->belongsTo(Sparepart::class);
    }
  
}

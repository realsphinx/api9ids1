<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = "profesores";

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    public function puesto()
    {
        return $this->belongsTo(Puesto::class);
    }
}

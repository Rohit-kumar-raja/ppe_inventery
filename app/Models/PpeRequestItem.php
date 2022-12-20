<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpeRequestItem extends Model
{
    use HasFactory;

    public function ppe()
    {
        return $this->belongsTo(ppe::class);
    }
}

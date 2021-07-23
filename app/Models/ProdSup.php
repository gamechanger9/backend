<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdSup extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}

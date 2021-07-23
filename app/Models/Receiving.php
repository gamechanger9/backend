<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Location;

class Receiving extends Model
{
    use HasFactory;

    public function location()
    {
        return $this->belongsTo(Locations::class);
    }

    public function purchaseOrder()
    {
        return $this->belongsTo(PurchaseOrder::class);

    }
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}

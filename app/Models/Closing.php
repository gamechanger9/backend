<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Location;

class Closing extends Model
{
    use HasFactory;

    public function receiving()
    {
        return $this->belongsTo(Receiving::class);
    }

    public function location()
    {
        return $this->belongsTo(Locations::class);
    }
}

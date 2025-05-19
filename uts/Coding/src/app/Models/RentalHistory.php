<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class RentalHistory extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'rental_date', 'vehicle', 'duration'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}


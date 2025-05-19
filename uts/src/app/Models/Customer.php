<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'identity_number', 'phone', 'address', 'email', 'status', 'notes'];

    public function rentalHistories()
    {
        return $this->hasMany(RentalHistory::class);
    }
}


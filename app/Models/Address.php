<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'county',
        'town',
        'estate',
        'house_no',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFullAddressAttribute()
    {
        return $this->house_no . ', ' . $this->estate . ', ' . $this->town;
    }
}

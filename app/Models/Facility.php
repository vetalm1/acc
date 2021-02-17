<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'town',
        'user_id',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    use HasFactory;

    protected $fillable = [
        'indication',
        'indication_photo',
        'user_id',
        'facility_id',
        'device_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::Class);
    }

    public function device()
    {
        return $this->belongsTo(Device::Class);
    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'facility_id',
        'number',
        'type',
        'location',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::Class);
    }

    public function indications()
    {
        return $this->hasMany(Indication::class);
    }

}

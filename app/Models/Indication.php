<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Indication
 *
 * @property int $id
 * @property int $user_id
 * @property int $facility_id
 * @property int $device_id
 * @property string $indication
 * @property string|null $indication_photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @property-read \App\Models\Facility $facility
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Indication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Indication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Indication query()
 * @method static \Illuminate\Database\Eloquent\Builder|Indication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Indication whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Indication whereFacilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Indication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Indication whereIndication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Indication whereIndicationPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Indication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Indication whereUserId($value)
 * @mixin \Eloquent
 */
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

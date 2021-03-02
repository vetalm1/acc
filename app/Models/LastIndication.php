<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LastIndication
 *
 * @property int $id
 * @property int $device_id
 * @property string|null $pre_last_indication
 * @property string|null $last_indication
 * @property string|null $pre_last_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication query()
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication whereLastIndication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication wherePreLastDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication wherePreLastIndication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LastIndication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LastIndication extends Model
{
    use HasFactory;

    protected $table = 'last_indications'; //а то вдруг ...

    protected $fillable = [
        'device_id',
        'last_indication',
        'pre_last_indication',
        'pre_last_date',
    ];

    public function device()
    {
        return $this->belongsTo(Device::Class);
    }
}

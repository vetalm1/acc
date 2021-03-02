<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Device
 *
 * @property int $id
 * @property int $user_id
 * @property int $facility_id
 * @property string $number
 * @property string $type
 * @property string|null $location
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $ratio
 * @property string|null $note
 * @property string|null $acc_type
 * @property-read \App\Models\Facility $facility
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Indication[] $indications
 * @property-read int|null $indications_count
 * @property-read \App\Models\LastIndication|null $last_indication
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Device newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device query()
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereAccType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereFacilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereRatio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereUserId($value)
 * @mixin \Eloquent
 */
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
        'ratio',
        'note',
        'acc_type',
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

    public function last_indication()
    {
        return $this->hasOne(LastIndication::class);
    }
}

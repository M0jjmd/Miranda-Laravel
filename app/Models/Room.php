<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\RoomFactory> */
    use HasFactory;

    protected $fillable = [
        'photo',
        'room_number',
        'bed_type',
        'rate',
        'offer_price',
        'status',
    ];

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'facility_room');
    }
}

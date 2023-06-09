<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\booking;


class Payment extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}

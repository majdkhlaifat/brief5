<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\House;
use App\Models\Booking;
use App\Models\Role;
class Lesson extends Authenticatable
{
    use HasFactory;

    public function roles()
    {
        return $this->hasTobelong(Role::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

}

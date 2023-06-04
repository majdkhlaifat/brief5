<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Booking;
use App\Models\Lesson;
class House extends Model
{
    use HasFactory;
    public function commnets()
    {
        return $this->hasToMany(Comment::class);
    }
    public function houses()
    {
        return $this->hasToMany(Lesson::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    protected $fillable = [
        // other fields...
        'image1',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\House;
class Typeofhouse extends Model
{
    use HasFactory;
    public function houses()
    {
        return $this->hasToMany(House::class);
    }
    
}

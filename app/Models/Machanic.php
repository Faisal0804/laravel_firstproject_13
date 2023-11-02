<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machanic extends Model
{
    use HasFactory;
    public function CarOwnners()
    {
        return $this->hasOneThrough(CarOwner::class,Car::class);
    }
    public function Car()
    {
        return $this->hasOne(Car::class);
    }
}

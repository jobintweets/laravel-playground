<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Home;
use App\Models\Broker;
class Person extends Model
{
    use HasFactory;
// person->broker-home
    public function homeInformation(){
        //destination model-home , intermediate model - broker
        return $this->hasOneThrough(Home::class, Broker::class);
    }
//has many through example
//list of all homes that belongs to a broker
    public function homeList()
    {
        return $this->hasManyThrough(Home::class, Broker::class);
    }
}

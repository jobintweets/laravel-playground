<?php

namespace App\Http\Controllers;
use App\Models\Person; 

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function getHomeOfPerson(){
        return Person::find(1)->homeInformation;
    }
}

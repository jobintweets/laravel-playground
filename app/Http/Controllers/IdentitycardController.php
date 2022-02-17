<?php

namespace App\Http\Controllers;
use App\Models\Identitycard; 
use Illuminate\Http\Request;

class IdentitycardController extends Controller
{
    public function index() {
   $identity = Identitycard::with(['user'])->get();
//    dd($indentity);
    foreach($indentity as $val){
     echo '<b>Identity ID</b> : '. $val->identity_number.'<br />';
     echo '<b>Identity ID Name</b> : '. $val->user->name .'<br />';
     echo '--------------------------------------------- <br/>';
   }
}

    public function test () {
         $identity = Identitycard::with(['user'])->get();
        return response()-> json([
            "message"=>"hello",
            "data"=> $identity
        ],200);
    }
}

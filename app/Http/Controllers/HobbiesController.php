<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobbiesFunc()
    {
        $hobbiesData = array(
            "hobbies" => "Gaming, Watching, Doing nothing",
        );

        return view("hobbies", $hobbiesData);
    }
}

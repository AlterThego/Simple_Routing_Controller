<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function aboutMeFunc() {
        $aboutMeData = array(
            'name' => 'Theodore Songalia Suaking',
            'sex'=> 'M',
            'birthdate'=> 'August 04, 2001',
            'address'=> 'Bakakeng Central, Baguio City',
            'email'=> 'theosuaking@gmail.com',
        );
        return view("about-me", $aboutMeData);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skillsFunc()
    {
        $skillsData = array(
            "progLang" => "JavaScript, PHP, HTML, CSS, SAP ABAP",
            "frameworks" => "Laravel, Node.js, Tailwind.css",
            "tools" => "Git, Visual Studio Code, Github",
            "softSkills" => "Problem-solving, Critical Thinking, Communication",
        );
        return view("skills", $skillsData);
    }
}

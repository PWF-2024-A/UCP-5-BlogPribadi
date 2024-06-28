<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        // Data developer bisa diambil dari database atau hardcoded seperti berikut
        $team = [
            [
                'name' => 'John Doe',
                'role' => 'Frontend Developer',
                'image' => 'path/to/image1.jpg',
                'description' => 'Experienced in HTML, CSS, and JavaScript.'
            ],
            [
                'name' => 'Jane Smith',
                'role' => 'Backend Developer',
                'image' => 'path/to/image2.jpg',
                'description' => 'Specialist in PHP, Laravel, and MySQL.'
            ],
            [
                'name' => 'Mike Johnson',
                'role' => 'Full Stack Developer',
                'image' => 'path/to/image3.jpg',
                'description' => 'Proficient in both frontend and backend technologies.'
            ],
        ];

        return view('team', compact('team'));
    }
}

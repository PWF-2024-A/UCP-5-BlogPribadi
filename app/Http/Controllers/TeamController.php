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
                'name' => 'Raynanda Aqiyas P',
                'role' => '20210140024',
                'image' => 'https://i.pinimg.com/736x/55/dd/5c/55dd5ceccf65060d66668d696c347f3f.jpg',
                'description' => 'Full Stack Dev'
            ],
            [
                'name' => 'Muhammad Fadila',
                'role' => '20210140119',
                'image' => 'https://i.pinimg.com/564x/1c/2e/61/1c2e61c2ebbc21992a6fa804db47c764.jpg',
                'description' => '-'
            ],
            [
                'name' => 'Ammar Fatwa',
                'role' => 'Full Stack Developer',
                'image' => 'https://i.pinimg.com/564x/aa/1a/84/aa1a84e3affb36db315d5045abeead61.jpg',
                'description' => 'Proficient in both frontend and backend technologies.'
            ],
            [
                'name' => 'Dzaky Naufal',
                'role' => 'Full Stack Developer',
                'image' => 'https://i.pinimg.com/564x/34/d7/9a/34d79a65276e70c06385a03841d51b7a.jpg',
                'description' => 'Proficient in both frontend and backend technologies.'
            ],
        ];

        return view('team', compact('team'));
    }
}

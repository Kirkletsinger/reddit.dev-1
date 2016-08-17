<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }
    public function rollDice($guess = 1)
    {
        $data = [
            'number' => mt_rand(1, 6),
            'guess' => $guess
        ];
        return view('roll-dice', $data);
    }
    public function upperCase($word = "electric")
    {
        $upper = strtoupper($word);
        // $data = [
        // 'word' => $upper
        // ];

        return view('uppercase', compact('upper', 'word'));
        //return view('uppercase')->with('word', $upper);
    }
    public function incrementThis($number = 0)
    {
        $number += 1;
        // $data = [
        // 'number' => $number,
        // 'number + 1' => $number + 1
        // ];
        return view('increment')->with('number', $number);
    }
}

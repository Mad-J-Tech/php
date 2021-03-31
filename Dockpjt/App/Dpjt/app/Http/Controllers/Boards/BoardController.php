<?php

namespace App\Http\Controllers\Boards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        return view('boards.post');
    }
}

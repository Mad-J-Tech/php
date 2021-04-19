<?php

namespace App\Http\Controllers\Boards;

use App\Board;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Board $board)
    {
        $board->favorite_users()->attach(Auth::id());

        return redirect()->route('boards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        $board->favorite_users()->detach(Auth::id());

        return redirect()->route('boards.index');
    }
}

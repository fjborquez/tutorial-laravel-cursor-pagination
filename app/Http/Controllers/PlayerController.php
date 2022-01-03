<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    public function cursorPagination()
    {
        DB::enableQueryLog();
        $players = Player::orderBy('id')->cursorPaginate(10);
        $queryLog = DB::getQueryLog();
        return view('cursorPagination', [
            'list' => json_decode($players->toJson()),
            'queryLog' => $queryLog,
        ]);
    }

    public function paginate()
    {
        DB::enableQueryLog();
        $players = Player::orderBy('id')->paginate(10);
        $queryLog = DB::getQueryLog();
        return view('paginate', [
            'list' => json_decode($players->toJson()),
            'queryLog' => $queryLog,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Chanson;
use Illuminate\Http\Request;

class ChansonController extends Controller
{
    public function index() {
        $chanson = Chanson::all();
        return view('chanson', compact('chanson'));
    }
}

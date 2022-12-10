<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id) {
        $movie = Movie::getDetails($id);
        return $movie;
    }
}

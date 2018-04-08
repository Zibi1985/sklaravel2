<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Pobieramy listę filmów
     */
    public function index() {
        $videos = Video::latest()->get();
        return $videos;
    }
}

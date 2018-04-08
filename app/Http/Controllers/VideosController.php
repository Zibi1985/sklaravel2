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
        return view('videos.index')->with('videos', $videos);
    }
    /**
     *  Pobieramy pojedynczego filmu
     */
    public function show($id) {
        $video = Video::findOrFail($id);
        return view('videos.show')->with('video', $video);
    }
    /*
     *  Wyświetla formularz dodawania filmu
     */
    public function create() {
        return view('videos.create');
    }
}

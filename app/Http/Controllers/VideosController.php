<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoRequest;
use Auth;
use App\Video;
use Illuminate\Http\Request;
use Session;

class VideosController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['only'=>'create']);
    }
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

    /*
     * Zapisujemy film do bazy
     */
    public function store(CreateVideoRequest $request) {
        $video = new Video($request->all());
        Auth::user()->videos()->save($video);
        Session::flash('video_created', 'Film został zapisany do bazy.');
        return redirect('/videos');

    }
    /*
     * Formularz edycji filmu
     */
    public function edit($id) {
        $video = Video::findOrFail($id);
        return view('videos.edit')->with('video', $video);

    }
    /*
     * Zapisujemy edytowane dane filmu do bazy
     */
    public function update($id, CreateVideoRequest $request) {
        $video = Video::findOrFail($id);
        $video->update($request->all());
        return redirect('/videos');
    }
}

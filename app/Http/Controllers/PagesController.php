<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        $header = 'To jest strona O nas!';
        return view('pages.about')->with('header', $header);
    }

    public function contact() {
        $header = 'To jest strona Kontakt';
        $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a tincidunt sem, vel volutpat magna. Quisque scelerisque tristique tellus, vitae rhoncus diam pellentesque quis. Vestibulum vitae suscipit urna, ut lacinia mauris. Phasellus lobortis nunc non vestibulum efficitur. Cras urna mi, cursus quis pharetra id, feugiat non turpis. Pellentesque tellus turpis, varius ultrices egestas a, scelerisque eget erat. Nunc aliquam egestas enim eget pulvinar. Nam gravida leo sagittis suscipit auctor.';
        $date = '08.04.2018';
        return view('pages.contact', compact('header', 'content', 'date'));
    }
}

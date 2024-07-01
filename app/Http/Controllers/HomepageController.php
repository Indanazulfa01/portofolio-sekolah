<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $data = array('title' => 'SMK Muhammadiyah 9 Gambiran');
        return view('homepage.index', $data);
    }

    public function visimisi() {
        $data = array('title' => 'about');
        return view('homepage.visimisi', $data);
    }

    public function onlineorder() {
        $data = array('title' => 'onlineorder');
        return view('homepage.onlineorder', $data);
    }

    public function history() {
        $data = array('title' => 'history');
        return view('homepage.history', $data);
    }

    public function tentangkami() {
        $data = array('title' => 'Tentang Kami');
        return view('homepage.tentangkami', $data);
    }
}

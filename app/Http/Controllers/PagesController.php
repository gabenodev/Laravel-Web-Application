<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel!";
        return view("Pages.index", compact("title"));
    }

    public function about()
    {
        $title = "About us";
        return view("Pages.about", compact("title"));
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design','Programming','SEO']
        );
        return view("Pages.services")->with($data);
    }
}

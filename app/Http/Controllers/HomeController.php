<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'navbar' => config('db.navbar'),
            'items' => config('db.items'),
            'dcComics' => config('db.dcComics'),
            'shop' => config('db.shop'),
            'dc' => config('db.dc'),
            'sites' => config('db.sites'),
            'socials' => config('db.socials')
        ];
        return view('home', $data);
    }
}
